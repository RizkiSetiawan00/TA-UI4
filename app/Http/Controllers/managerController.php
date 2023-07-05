<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\aktivitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Http\Requests\projectsFormRequest;

class managerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showProject()
    {
        $showStaff = User::all();
        $project = aktivitas::all();
        return view('/manager/activity', compact('showStaff', 'project'));
    }

    public function profileManager()
    {
        $profileAjanya = DB::table('users')
                    ->where('users.id',auth()->user()->id)
                    ->join('banks', 'banks.id', '=', 'users.bank_id')
                    ->join('lokasinyas', 'lokasinyas.id', '=', 'users.lokasinya_id')
                    ->join('departemens', 'departemens.id', '=', 'users.departemen_id')
                    ->join('brands', 'brands.id', '=', 'users.brand_id')
                    ->join('title1s', 'title1s.id', '=', 'users.title1_id')
                    ->select('users.*', 'title1s.title1Name', 'banks.bankName', 'brands.brandName', 'departemens.departemenName', 'lokasinyas.lokasiName')
                    ->first();

        //dd($profileAjanya);
        return view('/manager/profile', compact('profileAjanya'));
    }

    // Prject
    public function saveProject(projectsFormRequest $request)
    { 
        aktivitas::create($request->validated());
        return redirect('/manager/project')->with('success', 'A New Project Successfully Added!');
    }
 
    public function deleteProject($id)
    {
        $hapusprojek=aktivitas::findOrFail($id);
        $hapusprojek->delete();
        return redirect('/manager/activity')->with('success', 'A lokasinya Name added successfully!');
    }
    public function editProject(Request $request,$id)
    {
        $editprojek=aktivitas::findOrFail($id);
    
           $editprojek->update([
               "desc" =>$request->desc,
               "deadline" =>$request->deadline,
               "status" =>$request->status,
               "sta_desc" =>$request->sta_desc,
               "user_id" =>$request->user
           ]);
    
           return redirect('/manager/project')->with('success', 'A lokasinya Name added successfully!');
    }

}
