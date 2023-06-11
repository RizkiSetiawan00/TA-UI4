<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\title1s;
use App\Models\loginModel;
use App\Models\profileAjas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\loginFormRequest;

class dashController extends Controller
{
    //Auth Admin
    /*
    public function __construct()
    {
        $this->middleware('auth');
    }
    */

    public function crudData()
    {
        return view('/admin/crudData');
    }

    public function activity()
    {
        return view('/staff/activity');
    }

    public function dash()
    {
        return view('/home');
    }

    public function handleAdmin()
    {
        return 'ur an admin!';
    }    

    public function loginNya(Request $request)
    {

        $dataMasuk = new loginModel;
        $dataMasuk->email = $request->input('loginEmail');
        $dataMasuk->password = $request->input('loginPass');

        if(auth()->attempt(['email'=>$dataMasuk['loginEmail'], 'password'=>$dataMasuk['loginPass']])){
            $request->session()->regenerate();
            return redirect('/')->with('success', 'You have successfully logged in!!');
        }
        else{
            return redirect('/')->with('failure', 'Invalid Log In!');
        }
    }

    public function dashboard() {
        //return ("UR AN USER!");
        return view('/staff/index');
    }

    public function profile() {
    
        // Return the results or perform other actions
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
        return view("/staff/profile",['depart'=>$departemendata,
        'lokasi'=>$lokasidata,
        'title1'=>$title1data,
        'brand'=>$branddata,
        'bank'=>$bankdata
        ]);
    }
}