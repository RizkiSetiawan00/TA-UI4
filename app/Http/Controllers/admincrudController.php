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
        $profilhr=User::all();
        $profiladmin=User::all();
        //dd($profilhr);
        return view('/admin/crudData', compact('bank','departemen','brand','lokasi','title1','profilhr','profiladmin'));
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
            return redirect()->back()->with('Success', 'A Bank Name added successfully!');
    }
 
    public function bankHapus($id)
    {
         $hapusBank=Banks::findOrFail($id);
         $hapusBank->delete();
         return back()->with('Success', 'A Bank Name deleted successfully!');
    }
    public function bankEditnya(Request $request,$id)
    {
        $editbanknya=banks::findOrFail($id);
    
           $editbanknya->update([
               "bankName" =>$request->bankName
           ]);
    
           return redirect('/admin/crudData')->with('Success', 'A Bank Name edited successfully!');
    }
 
    // TITLE1
    public function title1Save(Request $request)
    { 
        title1s::create($request->all());
        return redirect('/admin/crudData')->with('Success', 'A Title Name Added successfully!');
    }
 
 
    public function title1Hapus($id)
    {
         $hapustitle1=title1s::findOrFail($id);
         $hapustitle1->delete();
         return redirect('/admin/crudData')->with('Success', 'A Title Name Deleted successfully!');
    }
    public function title1Editnya(Request $request,$id)
    {
        $edittitle1nya=title1s::findOrFail($id);
    
           $edittitle1nya->update([
               "title1Name" =>$request->title1Name
           ]);
    
           return redirect('/admin/crudData')->with('Success', 'A Title Name Edited successfully!');
    }

    // brandSave
    public function brandSave(Request $request)
    { 
        brands::create($request->all());
        return redirect('/admin/crudData')->with('Success', 'A Brand Name added successfully!');
    }
 
    public function brandHapus($id)
    {

        $hapusbrand=brands::findOrFail($id);
        $hapusbrand->delete();
         return redirect('/admin/crudData')->with('Success', 'A Brand Name deleted successfully!');
    }
    public function brandEditnya(Request $request,$id)
    {
        $editbrandnya=brands::findOrFail($id);
    
           $editbrandnya->update([
               "brandName" =>$request->brandName
           ]);
    
           return view('/admin/crudData')->with('Success', 'A Brand Name Edited successfully!');
    }
    

    // departemen
    public function departemenSave(Request $request)
    { 
        departemens::create($request->all());
        return redirect('/admin/crudData')->with('Success', 'A Departemen Name added successfully!');
    }
 
    public function departemenHapus($id)
    {

        $hapusdepartemen=departemens::findOrFail($id);
        $hapusdepartemen->delete();
         return redirect('/admin/crudData')->with('Success', 'A Departemen Name deleted successfully!');
    }
    public function departemenEditnya(Request $request,$id)
    {
        $editdepartemennya=departemens::findOrFail($id);
    
           $editdepartemennya->update([
               "departemenName" =>$request->departemenName
           ]);
    
           return redirect('/admin/crudData')->with('Success', 'A departemen Name Edited successfully!');
    }
    

    // lokasinya
    public function lokasinyaSave(Request $request)
    { 
        lokasinyas::create($request->all());
        return redirect('/admin/crudData')->with('Success', 'A lokasinya Name added successfully!');
    }
 
    public function lokasinyaHapus($id)
    {

        $hapuslokasinya=lokasinyas::findOrFail($id);
        $hapuslokasinya->delete();
         return redirect('/admin/crudData')->with('Success', 'A lokasi Name deleted successfully!');
    }
    public function lokasinyaEditnya(Request $request,$id)
    {
        $editlokasinyanya=lokasinyas::findOrFail($id);
    
           $editlokasinyanya->update([
               "lokasiName" =>$request->lokasiName
           ]);
    
           return redirect('/admin/crudData')->with('Success', 'A lokasi Name Edited successfully!');
    }
    
//0 = User, 1 = Admin, 2 = Manager, 3 = HR
    // profilhr 
    public function profilhrSave(Request $request,$id)
    { 
        //Only need to change its Type status
        $updateprofilhrnya=User::findOrFail($id);
        $updateprofilhrnya->update([
            "type" =>$request->type
        ]);
        return redirect('/admin/crudData')->with('Success', 'A Departemen Name added successfully!');
    }
 
    public function profilhrHapus($id)
    {

        $hapusprofilhr=User::findOrFail($id);
        $hapusprofilhr->delete();
         return redirect('/admin/crudData')->with('Success', 'A Departemen Name deleted successfully!');
    }
    public function profilhrEditnya(Request $request,$id)
    {
        $editprofilhrnya=User::findOrFail($id);
    
           $editprofilhrnya->update([
               "type" =>$request->type
           ]);
    
           return redirect('/admin/crudData')->with('Success', 'A departemen Name Edited successfully!');
    }
 
}
