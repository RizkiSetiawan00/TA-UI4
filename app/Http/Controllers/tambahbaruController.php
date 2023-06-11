<?php

namespace App\Http\Controllers;

use App\Models\hr;
use App\Models\User;
use App\Models\departemens;
use App\Models\profileAjas;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\addnewFormRequest;
use Illuminate\Foundation\Auth\RegistersUsers;

class tambahbaruController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function showDataProfile(Type $var = null)
    {
        //This is use to show all of the data
        $profileAjanya = DB::table('users')
                    ->join('banks', 'banks.id', '=', 'users.bank_id')
                    ->join('lokasinyas', 'lokasinyas.id', '=', 'users.lokasinya_id')
                    ->join('departemens', 'departemens.id', '=', 'users.departemen_id')
                    ->join('brands', 'brands.id', '=', 'users.brand_id')
                    ->join('title1s', 'title1s.id', '=', 'users.title1_id')
                    ->get();
  
        $bankdata = DB::table('banks')
                    ->get();
  
        $branddata = DB::table('brands')
                    ->get();
        $departemendata = DB::table('departemens')
                    ->get();
        $title1data = DB::table('title1s')
                    ->get();
        $lokasidata = DB::table('lokasinyas')
                    ->get();
    }


/*
    protected function tambahbaru(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
*/
    public function tambahbaru(addnewFormRequest $request) {
        

        
        $addProfile = new User;
        $addProfile->name = $request->input('name');
        $addProfile->joinDate = $request->date('joinDate');
        $addProfile->birth = $request->date('birth');
        $addProfile->idNumb = $request->input('idNumb');
        $addProfile->nip = $request->input('nip');
        $addProfile->phoneNumb = $request->input('phoneNumb');
        $addProfile->email = $request->input('email');
        $addProfile->password = $request->input('password');
        $addProfile->alamat = $request->input('alamat');
        $addProfile->jobDesc = $request->input('jobDesc');
        $addProfile->jobPurpose = $request->input('jobPurpose');
        $addProfile->accName = $request->input('accName');
        $addProfile->npwp = $request->input('npwp');
        $addProfile->accNumb = $request->input('accNumb');
        $addProfile->bpjsKerja = $request->input('bpjsKerja');
        $addProfile->health = $request->input('health');
        $addProfile->bpjsSehat = $request->input('bpjsSehat');
       
        $addProfile->title1_id = $request->input('title1Name');
        $addProfile->bank_id = $request->input('bankName');
        $addProfile->lokasinya_id = $request->input('lokasiName');
        $addProfile->brand_id = $request->input('brandName');
        $addProfile->departemen_id = $request->input('departemenName');

        
        $addProfile->save();
        return redirect('/hr/staffList')->with('berhasil','A New Staff Succesfully Added!');

    }
    public function pesanError(addnewFormRequest $request)
    {


        $input = $request->all();
        User::create($input);


        return redirect(route('users.index'));
    }
}
