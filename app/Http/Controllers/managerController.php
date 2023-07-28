<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\aktivitas;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\projectsFormRequest;
use App\Http\Requests\editprojectsFormRequest;

class managerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showProject()
    {
        $todayDatenya = Carbon::now();
        $staff2 = User::all();
        $project = aktivitas::paginate(10);
        /*
        $project = DB::table('aktivitas')
                    ->where('aktivitas.deadline','!=','2')
                    ->join('users', 'users.id', '=', 'aktivitas.user_id')
                    ->select('aktivitas.*', 'users.name')
                    ->paginate(10);
                    */

        $project2 = aktivitas::select('deadline');
        
        //$projectFinished = aktivitas::where('name','LIKE','%'.$pencarian.'%')->with('title1')->get();
//dd($projectFinished);

        return view('/manager/activity', compact('staff2', 'project', 'todayDatenya', 'project2'));
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
        return redirect('/manager/project')->with('success', 'A lokasinya Name added successfully!');
    }
    public function editProject(editprojectsFormRequest $request,$id)
    {
        $editprojek=aktivitas::findOrFail($id);
        $request->validate([
            'desc' => ['required'],
            'deadline'=>['required', 'date'],
            'sta_desc' => ['required'],
            'status' => ['required'],
            'user_id' => ['required'],
        ]);

        $ambiltanggal = DB::table('aktivitas')
                    ->where('aktivitas.id',$id)
                    ->join('users', 'users.id', '=', 'aktivitas.user_id')
                    ->select('aktivitas.*', 'users.name')
                    ->first();

        //$ambiltanggal = aktivitas::where('id','==',$id);
        $ambiltanggal2 = $ambiltanggal->deadline;
        $todayDatenya = Carbon::now();
        $editprojek->update([
            "desc" =>$request->desc,
            "deadline" =>$request->deadline,
            "status" =>$request->status,
            "sta_desc" =>$request->sta_desc,
            "user_id" =>$request->user_id
        ]);
    
        //dd($ambiltanggal2);

        if ($editprojek->deadline > $ambiltanggal2) {
            return 'gagal :D';
        }
        else if (1 == 0) {
        }
        //dd($ambiltanggal2);
       //dd($editprojek);
    
        return redirect('/manager/project')->with('success', 'A lokasinya Name added successfully!');
    }
    
    function findAllProject()
    {
        $todayDatenya = Carbon::now();
        $staff2 = User::all();
        $project = aktivitas::paginate(10);

        $pencarian = $_GET['search'];
        $project = aktivitas::where('desc','LIKE','%'.$pencarian.'%')->with('user')->paginate(10);

        return view('/manager/activity2', compact('staff2', 'project', 'todayDatenya'));
    }
    
    function findfinishProject()
    {
        $todayDatenya = Carbon::now();
        $staff2 = User::all();
        $project = aktivitas::paginate(10);

        $pencarian = $_GET['search'];
        $project = aktivitas::where('desc','LIKE','%'.$pencarian.'%')->with('user')->paginate(10);
        
        //$project = aktivitas::search('desc','LIKE','%'.$pencarian.'%')->where('status','==','2')->paginate(10);
    //dd($project);
        return view('/manager/activity3', compact('staff2', 'project', 'todayDatenya'));
    }

}
