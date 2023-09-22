<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\banks;
use App\Models\Image;
use App\Models\brands;
use App\Models\title1s;
use App\Models\lokasinyas;
use App\Models\departemens;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Http\RedirectResponse;
 
class admincrudController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function showPage()
    {
        $bank=banks::all();
        $departemen=departemens::all();
        $brand=brands::all();
        $lokasi=lokasinyas::all();
        $title1=title1s::all();
        //$profilhr2=User::all();

        //For to update more user type
        $profilhr2 = DB::table('users')
        ->where('users.type','!=',3)
        ->select('users.*')
        ->get();

        //For the list
        $profilhr = DB::table('users')
        ->where('users.type',3)
        ->select('users.*')
        ->get();

        $profiladmin = DB::table('users')
        ->where('users.type',1)
        ->select('users.*')
        ->get();

        $profiladmin2 = DB::table('users')
        ->where('users.type','!=',1)
        ->select('users.*')
        ->get();
        //dd($profilhr);
        return view('/admin/crudData', compact('bank','departemen','brand','lokasi','title1','profilhr','profilhr2','profiladmin', 'profiladmin2'));
    }

    // bankSave
    public function bankSave(Request $request)
    { 
            foreach($request->bankName as $key=>$insert) {

                $simpanBank = [
                    'bankName'   =>$request->bankName[$key]
                ];
                DB::table('banks')->insert($simpanBank);
            }
            return redirect()->back()->with('success', 'A Bank Name added successfully!');
    }
 
    public function bankHapus($id)
    {
         $hapusBank=Banks::findOrFail($id);
         $hapusBank->delete();
         return back()->with('success', 'A Bank Name deleted successfully!');
    }
    public function bankEditnya(Request $request,$id)
    {
        $editbanknya=banks::findOrFail($id);
    
           $editbanknya->update([
               "bankName" =>$request->bankName
           ]);
    
           return redirect('/admin/crudData')->with('success', 'A Bank Name edited successfully!');
    }
 
    // TITLE1
    public function title1Save(Request $request)
    { 
        title1s::create($request->all());
        return redirect('/admin/crudData')->with('success', 'A Title Name Added successfully!');
    }
 
 
    public function title1Hapus($id)
    {
         $hapustitle1=title1s::findOrFail($id);
         $hapustitle1->delete();
         return redirect('/admin/crudData')->with('success', 'A Title Name Deleted successfully!');
    }
    public function title1Editnya(Request $request,$id)
    {
        $edittitle1nya=title1s::findOrFail($id);
    
           $edittitle1nya->update([
               "title1Name" =>$request->title1Name
           ]);
    
           return redirect('/admin/crudData')->with('success', 'A Title Name Edited successfully!');
    }

    // brandSave
    public function brandSave(Request $request)
    { 
        brands::create($request->all());
        return redirect('/admin/crudData')->with('success', 'A Brand Name added successfully!');
    }
 
    public function brandHapus($id)
    {

        $hapusbrand=brands::findOrFail($id);
        $hapusbrand->delete();
         return redirect('/admin/crudData')->with('success', 'A Brand Name deleted successfully!');
    }
    public function brandEditnya(Request $request,$id)
    {
        $editbrandnya=brands::findOrFail($id);
    
           $editbrandnya->update([
               "brandName" =>$request->brandName
           ]);
    
           return redirect('/admin/crudData')->with('success', 'A Brand Name Edited successfully!');
    }
    

    // departemen
    public function departemenSave(Request $request)
    { 
        departemens::create($request->all());
        return redirect('/admin/crudData')->with('success', 'A Departmen Name added successfully!');
    }
 
    public function departemenHapus($id)
    {

        $hapusdepartemen=departemens::findOrFail($id);
        $hapusdepartemen->delete();
         return redirect('/admin/crudData')->with('success', 'A Departmen Name deleted successfully!');
    }
    public function departemenEditnya(Request $request,$id)
    {
        $editdepartemennya=departemens::findOrFail($id);
    
           $editdepartemennya->update([
               "departemenName" =>$request->departemenName
           ]);
    
           return redirect('/admin/crudData')->with('success', 'A Departmen Name Edited successfully!');
    }
    

    // lokasinya
    public function lokasinyaSave(Request $request)
    { 
        lokasinyas::create($request->all());
        return redirect('/admin/crudData')->with('success', 'A Location Name added successfully!');
    }
 
    public function lokasinyaHapus($id)
    {

        $hapuslokasinya=lokasinyas::findOrFail($id);
        $hapuslokasinya->delete();
         return redirect('/admin/crudData')->with('success', 'A Location Name deleted successfully!');
    }
    public function lokasinyaEditnya(Request $request,$id)
    {
        $editlokasinyanya=lokasinyas::findOrFail($id);
    
           $editlokasinyanya->update([
               "lokasiName" =>$request->lokasiName
           ]);
    
           return redirect('/admin/crudData')->with('success', 'A Location Name Edited successfully!');
    }
    
//0 = User, 1 = Admin, 2 = Manager, 3 = HR
    // profilhr 
    public function profilhrSave(Request $request,$id)
    { 
        //Only need to change its Type status
        $updateprofilhrnya=User::find($id);

        if ($updateprofilhrnya->type == "user") {

            $updateprofilhrnya->update([
                'type'=>$request->type,
            ]);
        
            //dd($updateprofilhrnya);
            return redirect('/admin/crudData')->with('success', 'An User Access Successfully Changed into HR!');

        }
        
        //dd($updateprofilhrnya);
        return redirect('/admin/crudData')->with('fail', 'Failed! The said user is not a regular user!');
    }
 
    public function profilhrHapus($id)
    {

        //$hapusprofilhr=User::findOrFail($id);
        $hapusprofilhr->delete();
         return redirect('/admin/crudData')->with('success', 'A Departemen Name deleted successfully!');
    }
    public function profilhrEditnya(Request $request,$id)
    {
        $editprofilhrnya=User::findOrFail($id);
    
           $editprofilhrnya->update([
               "type" =>$request->type
           ]);
    
           return redirect('/admin/crudData')->with('success', 'A departemen Name Edited successfully!');
    }

    
    // profiladmin 
    public function profiladminSave(Request $request,$id)
    { 
        //Only need to change its Type status
        $updateprofiladminnya=User::find($id);

        if ($updateprofiladminnya->type == "user") {

            $updateprofiladminnya->update([
                'type'=>$request->type,
            ]);
        
            //dd($updateprofiladminnya);
            return redirect('/admin/crudData')->with('success', 'An User Access Successfully Changed into admin!');

        }
        
        //dd($updateprofiladminnya);
        return redirect('/admin/crudData')->with('fail', 'Failed! The said user is not a regular user!');
    }
 
    public function profiladminHapus($id)
    {

        //$hapusprofiladmin=User::findOrFail($id);
        $hapusprofiladmin->delete();
         return redirect('/admin/crudData')->with('success', 'A Departemen Name deleted successfully!');
    }
    public function profiladminEditnya(Request $request,$id)
    {
        $editprofiladminnya=User::findOrFail($id);
    
           $editprofiladminnya->update([
               "type" =>$request->type
           ]);
    
           return redirect('/admin/crudData')->with('success', 'A departemen Name Edited successfully!');
    }
 
}
