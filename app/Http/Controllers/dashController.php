<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\title1s;
use App\Models\aktivitas;
use App\Models\loginModel;
use App\Models\profileAjas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\loginFormRequest;
use App\Http\Requests\staffeditprojectsFormRequest;

class dashController extends Controller
{
    //Auth Admin
    /*
    public function __construct()
    {
        $this->middleware('auth');
    }
    */
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function editProjectStaff(staffeditprojectsFormRequest $request,$id)
    {
        $editprojek=aktivitas::findOrFail($id);
    
           $editprojek->update([
               "status" =>$request->status,
               "sta_desc" =>$request->sta_desc,
               "user_id" =>$request->user_id
           ]);
           //dd($editprojek);
    
           return redirect('/staff/project')->with('success', 'A lokasinya Name added successfully!');
    }
    
    function findAllProject()
    {
        $todayDatenya = Carbon::now();
        $staff2 = User::all();
        $project = aktivitas::paginate(10);

        $pencarian = $_GET['search'];
        $project = aktivitas::where('desc','LIKE','%'.$pencarian.'%')->with('user')->paginate(10);

        return view('/staff/activity2', compact('staff2', 'project', 'todayDatenya'));
    }
    

    public function showProject()
    {
        $userID = auth()->user()->id;
        $todayDatenya = Carbon::now();
        $staff2 = User::all();
        $project = aktivitas::paginate(10);
        $project2 = aktivitas::select('deadline');
        $projectFinished = aktivitas::paginate(10);
        //dd($staffProjects);


        return view('/staff/activity', compact('staff2', 'project', 'todayDatenya', 'project2', 'userID', 'projectFinished'));
    }

    public function dash()
    {
        return view('/home');
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

    function profilenya() {
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
        return view('/staff/profile', compact('profileAjanya'));
    }

}
