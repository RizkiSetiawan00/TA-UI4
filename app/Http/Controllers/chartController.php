<?php

namespace App\Http\Controllers;
 
use DateTime;
use Carbon\Carbon;
use App\Models\User;
use App\Models\title1s;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class chartController extends Controller
{
    function chartHR() 
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

        //FOR THE CHART

        //New Joiners
        $dataUser = User::selectRaw('MONTH(Created_at) as month, COUNT(*) as count')
                    -> whereYear('created_at', '2023')
                    -> groupBy ('month')
                    -> orderBy('month')
                    ->get();
        
        $labels = [];
        $data = [];
        $warnanya = ['#0fbb90', '#0fbb90', '#0fbb90', '#0fbb90', '#0fbb90', '#0fbb90', '#0fbb90', '#0fbb90', '#0fbb90', '#0fbb90', '#0fbb90', '#0fbb90', ];

        for ($i=1; $i <= 12; $i++) { 
            $bulan = date('F', mktime(0,0,0,$i,1));
            $itung = 0;

            foreach ($dataUser as $usernya) {
                if ($usernya -> month == $i) {
                    $itung = $usernya->count;
                    break;
                }
            }

            array_push($labels, $bulan);
            array_push($data, $itung);

        }

        $dataset = [
            [
                'label' => 'People Joined',
                'data' => $data,
                'backgroundColor' => $warnanya

            ]
        ];


        //Dougnut - Title
        $dataUsertitle1kedua = DB::table('title1s')->pluck('title1Name')->toArray();

        $dataUsertitle1 = User::selectRaw('title1_id, COUNT(*) as counttitle1')
        ->join('title1s', 'title1s.id', '=', 'users.title1_id')
        ->groupBy ('title1_id')
        ->orderBy('title1_id')
        ->get();
        
        $dataTitle1 = DB::table('title1s')->get('*')->toArray();
        $itungdatatitle1 = count($dataTitle1);

        //select <NamaKolom>, COUNT(*) as <nama> from <tabel> group by <nama kolom>

        $labelstitle1 = [];
        $datatitle1 = [];
        $warnanyatitle1 = [
        '#0fbb90', "#b91d47", "#00aba9", "#2b5797", "#e8c3b9", "#1e7145", '#1c110a', "#e4d6a7", "#e9b44c", "#9b2915", "#50a2a7", "#8d6a9f", '#dda448', "#bb342f", "#3ba99c", "#392f5a", "#a8c7bb", "#ddd8c4", '#fe64a3', "#b4656f", "#474350", "#a57548", "#5296a5", "#191102", '#731963', "#f1c40f", "#2274a5", "#00cc66", "#002a32", "#f78e69", '#fafaff', "#1e2749", "#da4167", "#083d77", "#f78764", "#8d98a7", '#2b5797', "#243119", "#00aba9", "#fe5f55", "#011627", "#f0b67f", '#731963', "#fafaff", "#f78e69", "#011627", "#ddd8c4", "#8d6a9f", '#002a32', "#dda448", "#9b2915", "#50a2a7", "#bb342f", "#00cc66", '#f78764', "#e9b44c", "#2274a5", "#8d98a7", "#373f47", "#fe5f55", '#f0b67f', "#392f5a", "#b4656f", "#191102", "#1e2749", "#1e7145", '#474350', "#083d77", "#16db65", "#f1c40f", "#243119", "#0fbb90", '#fe64a3', "#5296a5", "#3ba99c", "#da4167", "#a57548", "#a31621", '#f4afab', "#33658a", 
        ];

        for ($atitle1 = 0; $atitle1 < $itungdatatitle1; $atitle1++) { 
            $itungtitle1 = 0;
            //$arrayLabelTitle1 = ;

            foreach ($dataUsertitle1 as $pptitle1) {
                if ($pptitle1 -> title1_id == $atitle1) {
                    $itungtitle1 = $pptitle1->counttitle1;
                    break;
                }
            }

            array_push($datatitle1, $itungtitle1);
            array_push($labelstitle1, $dataUsertitle1kedua[$atitle1]);
        }

        $datasettitle1 = [
            [
                'label' => '',
                'data' => $datatitle1,
                'backgroundColor' => $warnanyatitle1

            ]
        ];
                

        //Dougnut - Bank
        $dataUserBankkedua = DB::table('Banks')->pluck('BankName')->toArray();

        $dataUserBank = User::selectRaw('Bank_id, COUNT(*) as countBank')
        ->join('Banks', 'Banks.id', '=', 'users.Bank_id')
        ->groupBy ('Bank_id')
        ->orderBy('Bank_id')
        ->get();
        
        $dataBank = DB::table('Banks')->get('*')->toArray();
        $itungdataBank = count($dataBank);

        //select <NamaKolom>, COUNT(*) as <nama> from <tabel> group by <nama kolom>

        $labelsBank = [];
        $dataBank = [];
        $warnanyaBank = [
        '#0fbb90', "#b91d47", "#00aba9", "#2b5797", "#e8c3b9", "#1e7145", '#1c110a', "#e4d6a7", "#e9b44c", "#9b2915", "#50a2a7", "#8d6a9f", '#dda448', "#bb342f", "#3ba99c", "#392f5a", "#a8c7bb", "#ddd8c4", '#fe64a3', "#b4656f", "#474350", "#a57548", "#5296a5", "#191102", '#731963', "#f1c40f", "#2274a5", "#00cc66", "#002a32", "#f78e69", '#fafaff', "#1e2749", "#da4167", "#083d77", "#f78764", "#8d98a7", '#2b5797', "#243119", "#00aba9", "#fe5f55", "#011627", "#f0b67f", '#731963', "#fafaff", "#f78e69", "#011627", "#ddd8c4", "#8d6a9f", '#002a32', "#dda448", "#9b2915", "#50a2a7", "#bb342f", "#00cc66", '#f78764', "#e9b44c", "#2274a5", "#8d98a7", "#373f47", "#fe5f55", '#f0b67f', "#392f5a", "#b4656f", "#191102", "#1e2749", "#1e7145", '#474350', "#083d77", "#16db65", "#f1c40f", "#243119", "#0fbb90", '#fe64a3', "#5296a5", "#3ba99c", "#da4167", "#a57548", "#a31621", '#f4afab', "#33658a", 
        ];

        for ($aBank = 0; $aBank < $itungdataBank; $aBank++) { 
            $itungBank = 0;
            //$arrayLabelBank = ;

            foreach ($dataUserBank as $ppBank) {
                if ($ppBank -> Bank_id == $aBank) {
                    $itungBank = $ppBank->countBank;
                    break;
                }
            }

            array_push($dataBank, $itungBank);
            array_push($labelsBank, $dataUserBankkedua[$aBank]);
        }

        $datasetBank = [
            [
                'label' => '',
                'data' => $dataBank,
                'backgroundColor' => $warnanyaBank

            ]
        ];


        //Dougnut - departemen
        $dataUserdepartemenkedua = DB::table('departemens')->pluck('departemenName')->toArray();

        $dataUserdepartemen = User::selectRaw('departemen_id, COUNT(*) as countdepartemen')
        ->join('departemens', 'departemens.id', '=', 'users.departemen_id')
        ->groupBy ('departemen_id')
        ->orderBy('departemen_id')
        ->get();
        
        $datadepartemen = DB::table('departemens')->get('*')->toArray();
        $itungdatadepartemen = count($datadepartemen);

        //select <NamaKolom>, COUNT(*) as <nama> from <tabel> group by <nama kolom>

        $labelsdepartemen = [];
        $datadepartemen = [];
        $warnanyadepartemen = [
        '#0fbb90', "#b91d47", "#00aba9", "#2b5797", "#e8c3b9", "#1e7145", '#1c110a', "#e4d6a7", "#e9b44c", "#9b2915", "#50a2a7", "#8d6a9f", '#dda448', "#bb342f", "#3ba99c", "#392f5a", "#a8c7bb", "#ddd8c4", '#fe64a3', "#b4656f", "#474350", "#a57548", "#5296a5", "#191102", '#731963', "#f1c40f", "#2274a5", "#00cc66", "#002a32", "#f78e69", '#fafaff', "#1e2749", "#da4167", "#083d77", "#f78764", "#8d98a7", '#2b5797', "#243119", "#00aba9", "#fe5f55", "#011627", "#f0b67f", '#731963', "#fafaff", "#f78e69", "#011627", "#ddd8c4", "#8d6a9f", '#002a32', "#dda448", "#9b2915", "#50a2a7", "#bb342f", "#00cc66", '#f78764', "#e9b44c", "#2274a5", "#8d98a7", "#373f47", "#fe5f55", '#f0b67f', "#392f5a", "#b4656f", "#191102", "#1e2749", "#1e7145", '#474350', "#083d77", "#16db65", "#f1c40f", "#243119", "#0fbb90", '#fe64a3', "#5296a5", "#3ba99c", "#da4167", "#a57548", "#a31621", '#f4afab', "#33658a", 
        ];

        for ($adepartemen = 0; $adepartemen < $itungdatadepartemen; $adepartemen++) { 
            $itungdepartemen = 0;
            //$arrayLabeldepartemen = ;

            foreach ($dataUserdepartemen as $ppdepartemen) {
                if ($ppdepartemen -> departemen_id == $adepartemen) {
                    $itungdepartemen = $ppdepartemen->countdepartemen;
                    break;
                }
            }

            array_push($datadepartemen, $itungdepartemen);
            array_push($labelsdepartemen, $dataUserdepartemenkedua[$adepartemen]);
        }

        $datasetdepartemen = [
            [
                'label' => '',
                'data' => $datadepartemen,
                'backgroundColor' => $warnanyadepartemen

            ]
        ];


        //Dougnut - lokasinya
        $dataUserlokasinyakedua = DB::table('lokasinyas')->pluck('lokasiName')->toArray();

        $dataUserlokasinya = User::selectRaw('lokasinya_id, COUNT(*) as countlokasinya')
        ->join('lokasinyas', 'lokasinyas.id', '=', 'users.lokasinya_id')
        ->groupBy ('lokasinya_id')
        ->orderBy('lokasinya_id')
        ->get();
        
        $datalokasinya = DB::table('lokasinyas')->get('*')->toArray();
        $itungdatalokasinya = count($datalokasinya);

        //select <NamaKolom>, COUNT(*) as <nama> from <tabel> group by <nama kolom>

        $labelslokasinya = [];
        $datalokasinya = [];
        $warnanyalokasinya = [
        '#0fbb90', "#b91d47", "#00aba9", "#2b5797", "#e8c3b9", "#1e7145", '#1c110a', "#e4d6a7", "#e9b44c", "#9b2915", "#50a2a7", "#8d6a9f", '#dda448', "#bb342f", "#3ba99c", "#392f5a", "#a8c7bb", "#ddd8c4", '#fe64a3', "#b4656f", "#474350", "#a57548", "#5296a5", "#191102", '#731963', "#f1c40f", "#2274a5", "#00cc66", "#002a32", "#f78e69", '#fafaff', "#1e2749", "#da4167", "#083d77", "#f78764", "#8d98a7", '#2b5797', "#243119", "#00aba9", "#fe5f55", "#011627", "#f0b67f", '#731963', "#fafaff", "#f78e69", "#011627", "#ddd8c4", "#8d6a9f", '#002a32', "#dda448", "#9b2915", "#50a2a7", "#bb342f", "#00cc66", '#f78764', "#e9b44c", "#2274a5", "#8d98a7", "#373f47", "#fe5f55", '#f0b67f', "#392f5a", "#b4656f", "#191102", "#1e2749", "#1e7145", '#474350', "#083d77", "#16db65", "#f1c40f", "#243119", "#0fbb90", '#fe64a3', "#5296a5", "#3ba99c", "#da4167", "#a57548", "#a31621", '#f4afab', "#33658a", 
        ];

        for ($alokasinya = 0; $alokasinya < $itungdatalokasinya; $alokasinya++) { 
            $itunglokasinya = 0;
            //$arrayLabellokasinya = ;

            foreach ($dataUserlokasinya as $pplokasinya) {
                if ($pplokasinya -> lokasinya_id == $alokasinya) {
                    $itunglokasinya = $pplokasinya->countlokasinya;
                    break;
                }
            }

            array_push($datalokasinya, $itunglokasinya);
            array_push($labelslokasinya, $dataUserlokasinyakedua[$alokasinya]);
        }

        $datasetlokasinya = [
            [
                'label' => '',
                'data' => $datalokasinya,
                'backgroundColor' => $warnanyalokasinya

            ]
        ];


        //Dougnut - brand
        $dataUserbrandkedua = DB::table('brands')->pluck('brandName')->toArray();

        $dataUserbrand = User::selectRaw('brand_id, COUNT(*) as countbrand')
        ->join('brands', 'brands.id', '=', 'users.brand_id')
        ->groupBy ('brand_id')
        ->orderBy('brand_id')
        ->get();
        
        $databrand = DB::table('brands')->get('*')->toArray();
        $itungdatabrand = count($databrand);

        //select <NamaKolom>, COUNT(*) as <nama> from <tabel> group by <nama kolom>

        $labelsbrand = [];
        $databrand = [];
        $warnanyabrand = [
        '#0fbb90', "#b91d47", "#00aba9", "#2b5797", "#e8c3b9", "#1e7145", '#1c110a', "#e4d6a7", "#e9b44c", "#9b2915", "#50a2a7", "#8d6a9f", '#dda448', "#bb342f", "#3ba99c", "#392f5a", "#a8c7bb", "#ddd8c4", '#fe64a3', "#b4656f", "#474350", "#a57548", "#5296a5", "#191102", '#731963', "#f1c40f", "#2274a5", "#00cc66", "#002a32", "#f78e69", '#fafaff', "#1e2749", "#da4167", "#083d77", "#f78764", "#8d98a7", '#2b5797', "#243119", "#00aba9", "#fe5f55", "#011627", "#f0b67f", '#731963', "#fafaff", "#f78e69", "#011627", "#ddd8c4", "#8d6a9f", '#002a32', "#dda448", "#9b2915", "#50a2a7", "#bb342f", "#00cc66", '#f78764', "#e9b44c", "#2274a5", "#8d98a7", "#373f47", "#fe5f55", '#f0b67f', "#392f5a", "#b4656f", "#191102", "#1e2749", "#1e7145", '#474350', "#083d77", "#16db65", "#f1c40f", "#243119", "#0fbb90", '#fe64a3', "#5296a5", "#3ba99c", "#da4167", "#a57548", "#a31621", '#f4afab', "#33658a", 
        ];

        for ($abrand = 0; $abrand < $itungdatabrand; $abrand++) { 
            $itungbrand = 0;
            //$arrayLabelbrand = ;

            foreach ($dataUserbrand as $ppbrand) {
                if ($ppbrand -> brand_id == $abrand) {
                    $itungbrand = $ppbrand->countbrand;
                    break;
                }
            }

            array_push($databrand, $itungbrand);
            array_push($labelsbrand, $dataUserbrandkedua[$abrand]);
        }

        $datasetbrand = [
            [
                'label' => '',
                'data' => $databrand,
                'backgroundColor' => $warnanyabrand

            ]
        ];


        //Counting the User based on its Role

        //User
        $staffItung = User::where('type', '0')->get();
        $dataStaff = count($staffItung);

        //Admin
        $adminItung = User::where('type', '1')->get();
        $dataadmin = count($adminItung);

        //Manager
        $managerItung = User::where('type', '2')->get();
        $datamanager = count($managerItung);

        //HR
        $hrItung = User::where('type', '3')->get();
        $datahr = count($hrItung);

        //Total
        $dataemployee = $datahr + $datamanager + $dataadmin +$dataStaff;
                
        //dd($labels);
        //dd($dataemployee);

        return view('/hr/index', compact('messageDashboard', 'dataset', 'labels', 'data', 'datasettitle1', 'labelstitle1', 'datasetBank', 'labelsBank', 'datasetdepartemen', 'labelsdepartemen', 'datasetlokasinya', 'labelslokasinya', 'datasetbrand', 'labelsbrand', 'dataStaff', 'dataadmin', 'datamanager', 'datahr','dataemployee'));
    }
}
