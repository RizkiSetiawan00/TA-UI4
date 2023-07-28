<?php

namespace App\Http\Controllers;
 
use DateTime;
use Carbon\Carbon;
use Illuminate\Http\Request;
 
class HomeController extends Controller
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

    //Home
    function toTheHome() {
        
        if (auth()->user()->type == 'admin') {
            return redirect()->route('admin.home');
        }
        else if (auth()->user()->type == 'manager') {
            return redirect()->route('manager.home');
        }
        else if (auth()->user()->type == 'hr') {
            return redirect()->route('hr.home');
        }
        else if (auth()->user()->type == 'hr') {
            return redirect()->route('staff.home');
        }
        else{
            return redirect()->route('staff.home');
        }
    }
 
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function staffHome()
    {
        $timeToday = Carbon::now();
        $Morning = new DateTime();
        $timeToday2 = Carbon::createFromTimeString($timeToday);
        //$timeToday2 = Carbon::createFromTimeString('05:00:00');

        //24 Hour Format
        $pagi = Carbon::createFromTimeString('05:00:00');
        $siang = Carbon::createFromTimeString('12:00:00');
        $sore = Carbon::createFromTimeString('15:00:00');
        $malam = Carbon::createFromTimeString('20:00:00');
        $messageDashboard = '';

        if ($timeToday2 <= $siang && $timeToday2 >= $pagi) {
            $messageDashboard = 'Morning';
        }
        else if ($timeToday2 <= $sore && $timeToday2 >= $siang ) {
            $messageDashboard = 'Afternoon';
        }
        else if ($timeToday2 <= $malam && $timeToday2 >= $sore ) {
            $messageDashboard = 'Evening';
        }
        //else if ($timeToday2 <= $pagi && $timeToday2 >= $malam ) {
        else {
            $messageDashboard = 'Night';
        }
        //dd($messageDashboard);
        return view('/staff/index', compact('messageDashboard'));
    }
 
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function hrHome()
    {
        $timeToday = Carbon::now();
        $Morning = new DateTime();
        $timeToday2 = Carbon::createFromTimeString($timeToday);
        //$timeToday2 = Carbon::createFromTimeString('05:00:00');
        
        //24 Hour Format
        $pagi = Carbon::createFromTimeString('05:00:00');
        $siang = Carbon::createFromTimeString('12:00:00');
        $sore = Carbon::createFromTimeString('15:00:00');
        $malam = Carbon::createFromTimeString('20:00:00');
        $messageDashboard = '';

        if ($timeToday2 <= $siang && $timeToday2 >= $pagi) {
            $messageDashboard = 'Morning';
        }
        else if ($timeToday2 <= $sore && $timeToday2 >= $siang ) {
            $messageDashboard = 'Afternoon';
        }
        else if ($timeToday2 <= $malam && $timeToday2 >= $sore ) {
            $messageDashboard = 'Evening';
        }
        //else if ($timeToday2 <= $pagi && $timeToday2 >= $malam ) {
        else {
            $messageDashboard = 'Night';
        }
        //dd($messageDashboard);
        return view('/hr/index', compact('messageDashboard'));
    }
 
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $timeToday = Carbon::now();
        $Morning = new DateTime();
        $timeToday2 = Carbon::createFromTimeString($timeToday);
        //$timeToday2 = Carbon::createFromTimeString('05:00:00');
        
        //24 Hour Format
        $pagi = Carbon::createFromTimeString('05:00:00');
        $siang = Carbon::createFromTimeString('12:00:00');
        $sore = Carbon::createFromTimeString('15:00:00');
        $malam = Carbon::createFromTimeString('20:00:00');
        $messageDashboard = '';

        if ($timeToday2 <= $siang && $timeToday2 >= $pagi) {
            $messageDashboard = 'Morning';
        }
        else if ($timeToday2 <= $sore && $timeToday2 >= $siang ) {
            $messageDashboard = 'Afternoon';
        }
        else if ($timeToday2 <= $malam && $timeToday2 >= $sore ) {
            $messageDashboard = 'Evening';
        }
        //else if ($timeToday2 <= $pagi && $timeToday2 >= $malam ) {
        else {
            $messageDashboard = 'Night';
        }
        //dd($messageDashboard);
        return view('/admin/index', compact('messageDashboard'));
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function managerHome()
    {
        $timeToday = Carbon::now();
        $Morning = new DateTime();
        $timeToday2 = Carbon::createFromTimeString($timeToday);
        //$timeToday2 = Carbon::createFromTimeString('05:00:00');
        
        //24 Hour Format
        $pagi = Carbon::createFromTimeString('05:00:00');
        $siang = Carbon::createFromTimeString('12:00:00');
        $sore = Carbon::createFromTimeString('15:00:00');
        $malam = Carbon::createFromTimeString('20:00:00');
        $messageDashboard = '';

        if ($timeToday2 <= $siang && $timeToday2 >= $pagi) {
            $messageDashboard = 'Morning';
        }
        else if ($timeToday2 <= $sore && $timeToday2 >= $siang ) {
            $messageDashboard = 'Afternoon';
        }
        else if ($timeToday2 <= $malam && $timeToday2 >= $sore ) {
            $messageDashboard = 'Evening';
        }
        //else if ($timeToday2 <= $pagi && $timeToday2 >= $malam ) {
        else {
            $messageDashboard = 'Night';
        }
        //dd($messageDashboard);
        return view('/manager/index', compact('messageDashboard'));
    }
}