<?php

namespace App\Http\Controllers\Auth;
 
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
 
use Illuminate\Http\Request;
 
class LoginController extends Controller
{
 
    use AuthenticatesUsers;
 
    protected $redirectTo = RouteServiceProvider::HOME;
 
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
 
    public function login(Request $request)
    {   
        $input = $request->all();
       
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
       
        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            if (auth()->user()->type == 'admin') {
                return redirect()->route('admin.home');
            }
            else if (auth()->user()->type == 'manager') {
                return redirect()->route('manager.home');
            }
            else if (auth()->user()->type == 'hr') {
                return redirect()->route('hr.home');
            }
            else{
                return redirect()->route('staff.home');
            }
        }
        
            return redirect()->route('login')->with('error','Email-Address And Password Are Wrong.');
            
    }
}