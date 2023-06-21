<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\banks;
use App\Models\brands;
use App\Models\lokasis;
use App\Models\title1s;
use App\Models\departemens;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class hrController extends Controller
{
    //Auth Admin
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
 

    public function aktivitas() {
        return view("/hr/activity");
    }

    public function list_Staff() {
        //This is use to show all of the data
        //$profileAjanya = User::all();

        
        $profileAjanya = DB::table('users')
        //->where('users.type',1)
        ->join('title1s', 'title1s.id', '=', 'users.title1_id')
        ->select('users.*', 'title1s.title1Name')
        ->get();                      
    
        //FIND OUT HOW TO CHANGE DATE FORMAT
        return view("/hr/staffList", compact('profileAjanya'));

    }

    public function moredetails_Staff($id) {

        $profileAjanya = User::find($id);
        $profileAjanya = DB::table('users')
                    ->where('users.id',$id)
                    ->join('banks', 'banks.id', '=', 'users.bank_id')
                    ->join('lokasinyas', 'lokasinyas.id', '=', 'users.lokasinya_id')
                    ->join('departemens', 'departemens.id', '=', 'users.departemen_id')
                    ->join('brands', 'brands.id', '=', 'users.brand_id')
                    ->join('title1s', 'title1s.id', '=', 'users.title1_id')
                    ->select('users.*', 'title1s.title1Name', 'banks.bankName', 'brands.brandName', 'departemens.departemenName', 'lokasinyas.lokasiName')
                    ->first();
        
        return view("/hr/staff_moredetails", compact('profileAjanya'));
    }

    public function addnew_Staff() {
        //This is use to show all of the data
        $profileAjanya = DB::table('users')
                    ->join('banks', 'banks.id', '=', 'users.bank_id')
                    ->join('lokasinyas', 'lokasinyas.id', '=', 'users.lokasinya_id')
                    ->join('departemens', 'departemens.id', '=', 'users.departemen_id')
                    ->join('brands', 'brands.id', '=', 'users.brand_id')
                    ->join('title1s', 'title1s.id', '=', 'users.title1_id')
                    ->get();
  
        $bankdata = DB::table('banks')->get();
  
        $branddata = DB::table('brands')->get();
        $departemendata = DB::table('departemens')->get();
        $title1data = DB::table('title1s')->get();
        $lokasidata = DB::table('lokasinyas')->get();
        return view(
            "/hr/addnew_staff",
            ['depart'=>$departemendata,
            'lokasi'=>$lokasidata,
            'title1'=>$title1data,
            'brand'=>$branddata,
            'bank'=>$bankdata
            ]
        );
    }

    public function staff_edit() {
        return view("/hr/edit_staff");
    }
}
