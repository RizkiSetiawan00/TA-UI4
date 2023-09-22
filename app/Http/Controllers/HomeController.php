<?php

namespace App\Http\Controllers;
 
use DateTime;
use Carbon\Carbon;
use App\Models\User;
use App\Models\banks;
use App\Models\brands;
use App\Models\title1s;
use App\Models\aktivitas;
use App\Models\lokasinyas;
use App\Models\departemens;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;
 
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

        //FOR THE CHART
        //Warna Chart Donat
        
        $warnanyaChartDonat = [
            '#0fbb90', "#b91d47", "#00aba9", "#2b5797", "#e8c3b9", "#1e7145", '#1c110a', "#e4d6a7", "#e9b44c", "#9b2915", "#50a2a7", "#8d6a9f", '#dda448', "#bb342f", "#3ba99c", "#392f5a", "#a8c7bb", "#ddd8c4", '#fe64a3', "#b4656f", "#474350", "#a57548", "#5296a5", "#191102", '#731963', "#f1c40f", "#2274a5", "#00cc66", "#002a32", "#f78e69", '#fafaff', "#1e2749", "#da4167", "#083d77", "#f78764", "#8d98a7", '#2b5797', "#243119", "#00aba9", "#fe5f55", "#011627", "#f0b67f", '#731963', "#fafaff", "#f78e69", "#011627", "#ddd8c4", "#8d6a9f", '#002a32', "#dda448", "#9b2915", "#50a2a7", "#bb342f", "#00cc66", '#f78764', "#e9b44c", "#2274a5", "#8d98a7", "#373f47", "#fe5f55", '#f0b67f', "#392f5a", "#b4656f", "#191102", "#1e2749", "#1e7145", '#474350', "#083d77", "#16db65", "#f1c40f", "#243119", "#0fbb90", '#fe64a3', "#5296a5", "#3ba99c", "#da4167", "#a57548", "#a31621", '#f4afab', "#33658a", 
            ];

            

        //Dougnut - Aktivitas

        $labelAktivitasIsi = [
            'Not Assigned', 'ON Progress', 'Finished', 'On Hold'
        ];
        $warnanyaChartDonatAktivitas = [
            '#6c757d', "#0dcaf0", "#198754", "#ffc107"
            ];
        //#6c757d = Not Assigned, #0dcaf0 = On Progress, #198754 = Finished, #ffc107 = On Hold

        //select <NamaKolom>, COUNT(*) as <nama> from <tabel> group by <nama kolom>
            //0 = No Assigned, 1 = On Progress, 2 = Finished, 3 = On Hold

        $aktivitasArr = [];
        $statusProgNum = [];
        for ($aAktivitas = 0; $aAktivitas <= 3; $aAktivitas++) { 

            $aktivitasItung = aktivitas::where('status', $aAktivitas)->get();
            $dataAktivitas0 = count($aktivitasItung);
            
            array_push($aktivitasArr, $dataAktivitas0);
            array_push($statusProgNum, $aAktivitas);

        }

            //dd($aktivitasArr);
        $datasetAktivitas = [
            [
                'label' => 'Projects',
                'data' => $aktivitasArr,
                'backgroundColor' => $warnanyaChartDonatAktivitas

            ]
        ];


        //Chart for SUM of people finished projects
        $totalUser0 = User::all();
        $ambilUser = collect(User::selectRaw('name')
                        ->pluck('name')
                        ->toArray());
                        
        $idUserTerkecil = collect(User::selectRaw('id')
                    ->pluck('id')
                    ->toArray())->min();

        $idUserTerbesar = collect(User::selectRaw('id')
                    ->pluck('id')
                    ->toArray())->max();


        $totalUser = count($totalUser0);

        $projectsArr = [];
        $labelsUserNya = [];

        



        /*
        $testernya = aktivitas::addSelect(['user_id' => User::select('name')
                            ->whereColumn('user_id', 'Users.id')
                            ->orderByDesc('status')
                            ->groupBy('name')
                        ])->get();

        $tester2 = count($testernya);
        */
        //dd($testernya);

            //0 = No Assigned, 1 = On Progress, 2 = Finished, 3 = On Hold
            //#6c757d = Not Assigned, #0dcaf0 = On Progress, #198754 = Finished, #ffc107 = On Hold
        //This is used to check the array of the selected accurately
        $statusFinished1 = aktivitas::selectRaw('user_id, COUNT(*) as hitungStatus')
                        ->where('status', '2')
                        ->groupBy ('user_id')
                        ->orderBy('user_id')
                        ->get();
            
        $statusFinished = collect(aktivitas::selectRaw('user_id, COUNT(*) as hitungStatus')
                            ->where('status', '2')
                            ->groupBy ('user_id')
                            ->orderBy('user_id')
                            ->get());

        $statusFinishedPluck = $statusFinished1->pluck('user_id');
        $max = collect([1, 2, 3, 4, 5])->max();
        //dd($idUserTerbesar);

        $namaUserNya = collect(User::select('name')->get());
        $namaUserNyaPluck = $namaUserNya->pluck('name');
       
        $ambilItungDataFinish = $statusFinished->pluck('hitungStatus');
        $ambilItungDataFinish2 = $statusFinished->pluck('user_id');
        $ambilItungDataFinish3 = $ambilItungDataFinish2->combine($ambilItungDataFinish);

        $arraykosongFinish = [];
        $arraykosongFinish2 = [];
        $itungAjaArrayFinish = [];
        for ($isiarrayFinish=$idUserTerkecil; $isiarrayFinish <= $idUserTerbesar ; $isiarrayFinish++) {
            foreach ($statusFinished1 as $key=>$isinya) {
                if ($isinya->user_id == $isiarrayFinish) {
                    if (collect([$isinya->user_id])->isEmpty() != true) {
                        $itungAjaArrayFinish = $isinya->hitungStatus;
                        break;
                    }
                    else {
                        $itungAjaArrayFinish = 0;

                    }

                }
                else {
                    $itungAjaArrayFinish = 0;

                }
            }
            array_push($arraykosongFinish2, $itungAjaArrayFinish);
        }

        //dd([$idUserTerkecil, $arraykosongFinish2,$namaUserNyaPluck]);

        
        /* Memories
        $statusFinished = aktivitas::selectRaw('user_id, COUNT(*) as hitungStatus')
                        ->where('status', '2')
                        ->groupBy ('user_id')
                        ->orderBy('user_id')
                        ->get();

        $arrayBuatStatusFinished = [];
        $statusStatus0 = 0;
        for ($itesterStatusFinished=0; $itesterStatusFinished < $totalUser ; $itesterStatusFinished++) { 

            foreach ($statusFinished as $statusFinished0) {
                if ($statusFinished0 -> user_id == $itesterStatusFinished) {
                    $statusStatus0 = $statusFinished0->hitungStatus;
                    break;
                }
            }

            array_push($arrayBuatStatusFinished, $statusStatus0);
        }
*/
        $datasetFinished = [
            [
                'label' => 'Finished Projects',
                'data' => $arraykosongFinish2,
                'backgroundColor' => '#198754'
            ]
        ];
        //dd($datasetFinished);

        
        //dd($arrayBuatStatusFinished);
        //To Count On Progress Projects for Each User
        $statusOnProg1 = aktivitas::selectRaw('user_id, COUNT(*) as hitungStatus')
                        ->where('status', '1')
                        ->groupBy ('user_id')
                        ->orderBy('user_id')
                        ->get();
            
        $statusOnProg = collect(aktivitas::selectRaw('user_id, COUNT(*) as hitungStatus')
                            ->where('status', '1')
                            ->groupBy ('user_id')
                            ->orderBy('user_id')
                            ->get());

        $statusOnProgPluck = $statusOnProg1->pluck('user_id');

        $namaUserNya = collect(User::select('name')->get());
        $namaUserNyaPluck = $namaUserNya->pluck('name');
       
        $ambilItungDataOnProg = $statusOnProg->pluck('hitungStatus');
        $ambilItungDataOnProg2 = $statusOnProg->pluck('user_id');
        $ambilItungDataOnProg3 = $ambilItungDataOnProg2->combine($ambilItungDataOnProg);

        $arraykosongOnProg = [];
        $arraykosongOnProg2 = [];
        $itungAjaArrayOnProg = [];
        for ($isiarrayOnProg=$idUserTerkecil; $isiarrayOnProg <= $idUserTerbesar ; $isiarrayOnProg++) {
            foreach ($statusOnProg1 as $key=>$isinya) {
                if ($isinya->user_id == $isiarrayOnProg) {
                    if (collect([$isinya->user_id])->isEmpty() != true) {
                        $itungAjaArrayOnProg = $isinya->hitungStatus;
                        break;
                    }
                    else {
                        $itungAjaArrayOnProg = 0;

                    }

                }
                else {
                    $itungAjaArrayOnProg = 0;

                }
            }
            array_push($arraykosongOnProg2, $itungAjaArrayOnProg);
        }
        $datasetOnProg = [
            [
                'label' => 'On Progress Projects',
                'data' => $arraykosongOnProg2,
                'backgroundColor' => '#0dcaf0'
            ]
        ];

        //dd($arrayBuatStatusOnProg);
        //To Count On Hold Projects for Each User
        $statusOnHold1 = aktivitas::selectRaw('user_id, COUNT(*) as hitungStatus')
                        ->where('status', '3')
                        ->groupBy ('user_id')
                        ->orderBy('user_id')
                        ->get();
            
        $statusOnHold = collect(aktivitas::selectRaw('user_id, COUNT(*) as hitungStatus')
                            ->where('status', '3')
                            ->groupBy ('user_id')
                            ->orderBy('user_id')
                            ->get());

        $statusOnHoldPluck = $statusOnHold1->pluck('user_id');

        $namaUserNya = collect(User::select('name')->get());
        $namaUserNyaPluck = $namaUserNya->pluck('name');
       
        $ambilItungDataOnHold = $statusOnHold->pluck('hitungStatus');
        $ambilItungDataOnHold2 = $statusOnHold->pluck('user_id');
        $ambilItungDataOnHold3 = $ambilItungDataOnHold2->combine($ambilItungDataOnHold);

        $arraykosongOnHold = [];
        $arraykosongOnHold2 = [];
        $itungAjaArrayOnHold = [];
        for ($isiarrayOnHold=$idUserTerkecil; $isiarrayOnHold <= $idUserTerbesar ; $isiarrayOnHold++) {
            foreach ($statusOnHold1 as $key=>$isinya) {
                if ($isinya->user_id == $isiarrayOnHold) {
                    if (collect([$isinya->user_id])->isEmpty() != true) {
                        $itungAjaArrayOnHold = $isinya->hitungStatus;
                        break;
                    }
                    else {
                        $itungAjaArrayOnHold = 0;

                    }

                }
                else {
                    $itungAjaArrayOnHold = 0;

                }
            }
            array_push($arraykosongOnHold2, $itungAjaArrayOnHold);
        }

        $datasetOnHold = [
            [
                'label' => 'On Hold Projects',
                'data' => $arraykosongOnHold2,
                'backgroundColor' => '#ffc107'
            ]
        ];

        //To Count Not Assigned Projects for Each User
        $statusNoAss1 = aktivitas::selectRaw('user_id, COUNT(*) as hitungStatus')
                        ->where('status', '0')
                        ->groupBy ('user_id')
                        ->orderBy('user_id')
                        ->get();
            
        $statusNoAss = collect(aktivitas::selectRaw('user_id, COUNT(*) as hitungStatus')
                            ->where('status', '0')
                            ->groupBy ('user_id')
                            ->orderBy('user_id')
                            ->get());

        $statusNoAssPluck = $statusNoAss1->pluck('user_id');

        $namaUserNya = collect(User::select('name')->get());
        $namaUserNyaPluck = $namaUserNya->pluck('name');
       
        $ambilItungDataNoAss = $statusNoAss->pluck('hitungStatus');
        $ambilItungDataNoAss2 = $statusNoAss->pluck('user_id');
        $ambilItungDataNoAss3 = $ambilItungDataNoAss2->combine($ambilItungDataNoAss);

        $arraykosongNoAss = [];
        $arraykosongNoAss2 = [];
        $itungAjaArrayNoAss = [];
        for ($isiarrayNoAss=$idUserTerkecil; $isiarrayNoAss <= $idUserTerbesar ; $isiarrayNoAss++) {
            foreach ($statusNoAss1 as $key=>$isinya) {
                if ($isinya->user_id == $isiarrayNoAss) {
                    if (collect([$isinya->user_id])->isEmpty() != true) {
                        $itungAjaArrayNoAss = $isinya->hitungStatus;
                        break;
                    }
                    else {
                        $itungAjaArrayNoAss = 0;

                    }

                }
                else {
                    $itungAjaArrayNoAss = 0;

                }
            }
            array_push($arraykosongNoAss2, $itungAjaArrayNoAss);
        }

        $datasetNoAss = [
            [
                'label' => 'Not Assigned Projects',
                'data' => $arraykosongNoAss2,
                'backgroundColor' => '#6c757d'
            ]
        ];

        

        

        //To Total Projects Group By Month
        $totalAktivQuery = aktivitas::selectRaw('MONTH(Created_at) as monthAktiv, COUNT(*) as countAktiv')
                        -> whereYear('created_at', date('Y'))
                        -> groupBy ('monthAktiv')
                        -> orderBy('monthAktiv')
                        ->get();

        $arrayAktiv = [];
        $labelsAktiv = [];
        for ($aaAktiv=1; $aaAktiv <= 12 ; $aaAktiv++) { 
            $bulanAktiv = date('F', mktime(0,0,0,$aaAktiv,1));
            $Aktiv0 = 0;

            foreach ($totalAktivQuery as $aktivTotal) {
                if ($aktivTotal -> monthAktiv == $aaAktiv) {
                    $Aktiv0 = $aktivTotal->countAktiv;
                    break;
                }
            }

            array_push($labelsAktiv, $bulanAktiv);
            array_push($arrayAktiv, $Aktiv0);
        }

        $datasetAktivTotal = [
            [
                'label' => 'Projects',
                'data' => $arrayAktiv,
                'backgroundColor' => '#0fbb90'
            ]
        ];


        //dd($arrayAktiv);


        for ($aprojects = 0; $aprojects < $totalUser; $aprojects++) { 

            $projectsItung = aktivitas::where('user_id', $aprojects)->get();
            $dataprojects0 = count($projectsItung);
            $labelUserKeArr = $ambilUser[$aprojects];
            
            array_push($projectsArr, $dataprojects0);
            array_push($labelsUserNya, $labelUserKeArr);

        }

        
        $dataUser = User::selectRaw('MONTH(Created_at) as month, COUNT(*) as count')
                    -> whereYear('created_at', date('Y'))
                    -> groupBy ('month')
                    -> orderBy('month')
                    ->get();

            //dd($labelsUserNya);
        $datasetprojects = [
            [
                'label' => 'Projects',
                'data' => $projectsArr,
                'backgroundColor' => '#0fbb90'
            ]
        ];

        //Untuk cek berapa banyak project yang sudah di progress berdasarkan status untuk user yang bersangkutan
        //MASIH RUSAK KAGAK SESUAI DATA!
        

        //$cekArrayFinishedKosong = $ambilItungDataFinish3[$idUser];

        $idUser = (auth()->user()->id);

        //Finished
        $cekdataArrayTertinggiFinished = collect($arraykosongFinish2)->count();
        //$idUserSesuaiArrayFinished = $idUser-($cekdataArrayTertinggiFinished - $idUser); 
        $idUserSesuaiArrayFinished = $idUser - $idUserTerkecil;


        $aa = $cekdataArrayTertinggiFinished - $idUser;
        $bb = $cekdataArrayTertinggiFinished - $idUserTerkecil;

        //OnProg
        $cekdataArrayTertinggiOnProg = collect($arraykosongOnProg2)->count();
        //$idUserSesuaiArrayOnProg = $idUser - ($cekdataArrayTertinggiOnProg - $idUser);
        $idUserSesuaiArrayOnProg = $idUser - $idUserTerkecil; 

        //OnHold
        $cekdataArrayTertinggiOnHold = collect($arraykosongOnHold2)->count();
        //$idUserSesuaiArrayOnHold = $idUser - ($idUserTerbesar - $idUser); 
        $idUserSesuaiArrayOnHold = $idUser - $idUserTerkecil;

        //NoAss
        $cekdataArrayTertinggiNoAss = collect($arraykosongNoAss2)->count();
        //$idUserSesuaiArrayNoAss = $idUser - ($cekdataArrayTertinggiNoAss - $idUser); 
        $idUserSesuaiArrayNoAss = $idUser - $idUserTerkecil;

        //dd([$arraykosongFinish2, $idUser, $idUserSesuaiArrayFinished, $cekdataArrayTertinggiFinished, $idUserTerbesar], $arraykosongNoAss2);

        //Diagram batang projects User
            //0 = No Assigned, 1 = On Progress, 2 = Finished, 3 = On Hold
            //#6c757d = Not Assigned, #0dcaf0 = On Progress, #198754 = Finished, #ffc107 = On Hold
        $totalUserProjectsArr = [$arraykosongNoAss2[$idUserSesuaiArrayNoAss],$arraykosongOnProg2[$idUserSesuaiArrayOnProg],$arraykosongFinish2[$idUserSesuaiArrayFinished],$arraykosongOnHold2[$idUserSesuaiArrayOnHold]];

        $datasetUserProjectsArr = [
            [
                'label' => 'Projects',
                'data' => $totalUserProjectsArr,
                'backgroundColor' => ['#6c757d', '#0dcaf0', '#198754', '#ffc107', ]
            ]
        ];


        //dd($totalUserProjectsArr);

        //Number Of User Finished Projects
        $statusProjectsFinishedUser = $arraykosongFinish2[$idUserSesuaiArrayFinished];
        //dd($arraykosongFinish2[$idUserSesuaiArrayFinished]);

        //Number Of User On Progress Projects
        $statusProjectsOnProgUser = $arraykosongOnProg2[$idUserSesuaiArrayOnProg];

        //Number Of User OnHold Projects
        $statusProjectsOnHoldUser = $arraykosongOnHold2[$idUserSesuaiArrayOnHold];

        //Number Of User NoAss Projects
        $statusProjectsNoAssUser = $arraykosongNoAss2[$idUserSesuaiArrayNoAss];



        //dd($labelAktivitasIsi);

        return view('/staff/index', compact('messageDashboard', 'datasetAktivitas', 'labelAktivitasIsi', 'datasetprojects', 'labelsUserNya', 'statusProgNum', 'datasetFinished', 'datasetOnProg', 'datasetOnHold', 'datasetNoAss', 'datasetAktivTotal', 'labelsAktiv', 'statusProjectsFinishedUser', 'statusProjectsOnProgUser', 'statusProjectsOnHoldUser', 'statusProjectsNoAssUser', 'datasetUserProjectsArr'));
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



        //FOR THE CHART

        //New Joiners

        $tahunSekarangString = date('Y');
        $tahunSekarang = intval( $tahunSekarangString );
                    
        $tahunMin = collect(User::selectRaw('YEAR(Created_at) as tahunNya')
                    ->pluck('tahunNya')
                    ->toArray())->min();

        $tahunArray = [];
        $jaraktahun = $tahunSekarang - $tahunMin;
        //$jaraktahun = 10; //Tester
/*
        for ($tanggalAja3 = 0; $tanggalAja3 <= $jaraktahun; $tanggalAja3++) { 
            $hitungTahun = $tahunMin + $tanggalAja3;
            array_push($tahunArray, $hitungTahun);
        }
        $aTahun = [];
        for ($bTahun = 0; $bTahun <= $jaraktahun; $bTahun++) { 
            $cTahun = $tahunMin + $bTahun;
            /*
            $dataUser = collect(User::selectRaw('MONTH(Created_at) as month, COUNT(*) as count')
                        -> whereYear('created_at', $tahunMin + $bTahun)
                        -> groupBy ('month')
                        -> orderBy('month')
                        ->get();
            */
        /*
            $dataUser = collect(User::selectRaw('MONTH(Created_at) as month, COUNT(*) as count')
                        -> whereYear('created_at', $cTahun)
                        -> groupBy ('month')
                        -> orderBy('month'));

            array_push($aTahun, $dataUser);
        }
        */
        $dataUser = User::selectRaw('MONTH(Created_at) as month, COUNT(*) as count')
                    -> whereYear('created_at', date('Y'))
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


        //dd($labels);
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
        //dd($tahunArray);

        return view('/hr/index', compact('messageDashboard', 'dataset', 'labels', 'data', 'datasettitle1', 'labelstitle1', 'datasetBank', 'labelsBank', 'datasetdepartemen', 'labelsdepartemen', 'datasetlokasinya', 'labelslokasinya', 'datasetbrand', 'labelsbrand', 'dataStaff', 'dataadmin', 'datamanager', 'datahr','dataemployee', 'tahunArray'));

        //return view('/hr/index', compact('messageDashboard', 'dataUser','datasettitle1', 'labelstitle1', 'datasetBank', 'labelsBank', 'datasetdepartemen', 'labelsdepartemen', 'datasetlokasinya', 'labelslokasinya', 'datasetbrand', 'labelsbrand', 'dataStaff', 'dataadmin', 'datamanager', 'datahr','dataemployee', 'tahunArray'));
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

        //Bank
        $bankItung = banks::all();
        $dataBank2 = count($bankItung);

        //Title
        $title1Itung = title1s::all();
        $datatitle12 = count($title1Itung);

        //Brand
        $brandItung = brands::all();
        $databrand2 = count($brandItung);

        //Departments
        $departemenItung = departemens::all();
        $datadepartemen2 = count($departemenItung);

        //Location
        $lokasinyaItung = lokasinyas::all();
        $datalokasinya2 = count($lokasinyaItung);

        //Total
        $dataemployee = $datahr + $datamanager + $dataadmin +$dataStaff;


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


        //dd($messageDashboard);
        return view('/admin/index', compact('messageDashboard', 'dataStaff', 'dataadmin', 'datamanager', 'datahr', 'dataBank2', 'datalokasinya2', 'databrand2', 'datatitle12', 'datadepartemen2', 'datasettitle1', 'labelstitle1', 'datasetBank', 'labelsBank', 'datasetdepartemen', 'labelsdepartemen', 'datasetlokasinya', 'labelslokasinya', 'datasetbrand', 'labelsbrand'));
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

        //Warna Chart Donat
        
        $warnanyaChartDonat = [
            '#0fbb90', "#b91d47", "#00aba9", "#2b5797", "#e8c3b9", "#1e7145", '#1c110a', "#e4d6a7", "#e9b44c", "#9b2915", "#50a2a7", "#8d6a9f", '#dda448', "#bb342f", "#3ba99c", "#392f5a", "#a8c7bb", "#ddd8c4", '#fe64a3', "#b4656f", "#474350", "#a57548", "#5296a5", "#191102", '#731963', "#f1c40f", "#2274a5", "#00cc66", "#002a32", "#f78e69", '#fafaff', "#1e2749", "#da4167", "#083d77", "#f78764", "#8d98a7", '#2b5797', "#243119", "#00aba9", "#fe5f55", "#011627", "#f0b67f", '#731963', "#fafaff", "#f78e69", "#011627", "#ddd8c4", "#8d6a9f", '#002a32', "#dda448", "#9b2915", "#50a2a7", "#bb342f", "#00cc66", '#f78764', "#e9b44c", "#2274a5", "#8d98a7", "#373f47", "#fe5f55", '#f0b67f', "#392f5a", "#b4656f", "#191102", "#1e2749", "#1e7145", '#474350', "#083d77", "#16db65", "#f1c40f", "#243119", "#0fbb90", '#fe64a3', "#5296a5", "#3ba99c", "#da4167", "#a57548", "#a31621", '#f4afab', "#33658a", 
            ];

            

        //Dougnut - Aktivitas

        $labelAktivitasIsi = [
            'Not Assigned', 'ON Progress', 'Finished', 'On Hold'
        ];
        $warnanyaChartDonatAktivitas = [
            '#6c757d', "#0dcaf0", "#198754", "#ffc107"
            ];
        //#6c757d = Not Assigned, #0dcaf0 = On Progress, #198754 = Finished, #ffc107 = On Hold

        //select <NamaKolom>, COUNT(*) as <nama> from <tabel> group by <nama kolom>
            //0 = No Assigned, 1 = On Progress, 2 = Finished, 3 = On Hold

        $aktivitasArr = [];
        $statusProgNum = [];
        for ($aAktivitas = 0; $aAktivitas <= 3; $aAktivitas++) { 

            $aktivitasItung = aktivitas::where('status', $aAktivitas)->get();
            $dataAktivitas0 = count($aktivitasItung);
            
            array_push($aktivitasArr, $dataAktivitas0);
            array_push($statusProgNum, $aAktivitas);

        }

            //dd($aktivitasArr);
        $datasetAktivitas = [
            [
                'label' => 'Projects',
                'data' => $aktivitasArr,
                'backgroundColor' => $warnanyaChartDonatAktivitas

            ]
        ];


        //Chart for SUM of people finished projects
        $totalUser0 = User::all();
        $ambilUser = collect(User::selectRaw('name')
                        ->pluck('name')
                        ->toArray());

        $totalUser = count($totalUser0);

        $idUserTerkecil = collect(User::selectRaw('id')
                    ->pluck('id')
                    ->toArray())->min();

        $projectsArr = [];
        $labelsUserNya = [];


        /*
        $testernya = aktivitas::addSelect(['user_id' => User::select('name')
                            ->whereColumn('user_id', 'Users.id')
                            ->orderByDesc('status')
                            ->groupBy('name')
                        ])->get();

        $tester2 = count($testernya);
        */
        //dd($testernya);

            //0 = No Assigned, 1 = On Progress, 2 = Finished, 3 = On Hold
            //#6c757d = Not Assigned, #0dcaf0 = On Progress, #198754 = Finished, #ffc107 = On Hold
        //To Count Finished Projects for Each User

        //DONT DELETE THIS SCRIPT!!!!
        /*
        $data = Employee::select('id','created_at')->get()->groupBy(function($data) {
            return Carbon::parse($data->created_at)->format('M');
            });
            
        $bulan = [];
        $itungbulan = [];
        
        foreach($data as $dataNya=>$isinya) {
            $bulan[]=$dataNya;
        $itungbulan[] = count($isinya);
        }
                
        $users_count = User::select(DB::raw('DATE(created_at) as date'), DB::raw('COUNT(id) as total'))
        ->groupBy('date')
        ->get();

        $labels = [];
        $users_count_data = [];

        for($i=0; $i < 7; $i++) {
            $date = now()->subdays($i);
            $labels[] = $date->format('M-d');

            $users_count_tmp = collect($user_count)->where('date',$date->format('Y-m-D'))->first();
            $users_count_data[] = $users_count_tmp ? $users_count_tmp->total : 0;
        }
        */

        //This is used to check the array of the selected accurately
        $statusFinished1 = aktivitas::selectRaw('user_id, COUNT(*) as hitungStatus')
                        ->where('status', '2')
                        ->groupBy ('user_id')
                        ->orderBy('user_id')
                        ->get();
            
        $statusFinished = collect(aktivitas::selectRaw('user_id, COUNT(*) as hitungStatus')
                            ->where('status', '2')
                            ->groupBy ('user_id')
                            ->orderBy('user_id')
                            ->get());

        $statusFinishedPluck = $statusFinished1->pluck('user_id');

        $namaUserNya = collect(User::select('name')->get());
        $namaUserNyaPluck = $namaUserNya->pluck('name');
       
        $ambilItungDataFinish = $statusFinished->pluck('hitungStatus');
        $ambilItungDataFinish2 = $statusFinished->pluck('user_id');
        $ambilItungDataFinish3 = $ambilItungDataFinish2->combine($ambilItungDataFinish);

        $arraykosongFinish = [];
        $arraykosongFinish2 = [];
        $itungAjaArrayFinish = [];
        for ($isiarrayFinish=$idUserTerkecil; $isiarrayFinish <= $totalUser ; $isiarrayFinish++) {
            foreach ($statusFinished1 as $key=>$isinya) {
                if ($isinya->user_id == $isiarrayFinish) {
                    if (collect([$isinya->user_id])->isEmpty() != true) {
                        $itungAjaArrayFinish = $isinya->hitungStatus;
                        break;
                    }
                    else {
                        $itungAjaArrayFinish = 0;

                    }

                }
                else {
                    $itungAjaArrayFinish = 0;

                }
            }
            array_push($arraykosongFinish2, $itungAjaArrayFinish);
        }

        //dd([$idUserTerkecil, $arraykosongFinish2,$namaUserNyaPluck]);

        /* Memories
        $statusFinished = aktivitas::selectRaw('user_id, COUNT(*) as hitungStatus')
                        ->where('status', '2')
                        ->groupBy ('user_id')
                        ->orderBy('user_id')
                        ->get();

        $arrayBuatStatusFinished = [];
        $statusStatus0 = 0;
        for ($itesterStatusFinished=0; $itesterStatusFinished < $totalUser ; $itesterStatusFinished++) { 

            foreach ($statusFinished as $statusFinished0) {
                if ($statusFinished0 -> user_id == $itesterStatusFinished) {
                    $statusStatus0 = $statusFinished0->hitungStatus;
                    break;
                }
            }

            array_push($arrayBuatStatusFinished, $statusStatus0);
        }
*/
        $datasetFinished = [
            [
                'label' => 'Finished Projects',
                'data' => $arraykosongFinish2,
                'backgroundColor' => '#198754'
            ]
        ];
        //dd($datasetFinished);

        
        //dd($arrayBuatStatusFinished);
        //To Count On Progress Projects for Each User
        $statusOnProg1 = aktivitas::selectRaw('user_id, COUNT(*) as hitungStatus')
                        ->where('status', '1')
                        ->groupBy ('user_id')
                        ->orderBy('user_id')
                        ->get();
            
        $statusOnProg = collect(aktivitas::selectRaw('user_id, COUNT(*) as hitungStatus')
                            ->where('status', '1')
                            ->groupBy ('user_id')
                            ->orderBy('user_id')
                            ->get());

        $statusOnProgPluck = $statusOnProg1->pluck('user_id');

        $namaUserNya = collect(User::select('name')->get());
        $namaUserNyaPluck = $namaUserNya->pluck('name');
       
        $ambilItungDataOnProg = $statusOnProg->pluck('hitungStatus');
        $ambilItungDataOnProg2 = $statusOnProg->pluck('user_id');
        $ambilItungDataOnProg3 = $ambilItungDataOnProg2->combine($ambilItungDataOnProg);

        $arraykosongOnProg = [];
        $arraykosongOnProg2 = [];
        $itungAjaArrayOnProg = [];
        for ($isiarrayOnProg=$idUserTerkecil; $isiarrayOnProg <= $totalUser ; $isiarrayOnProg++) {
            foreach ($statusOnProg1 as $key=>$isinya) {
                if ($isinya->user_id == $isiarrayOnProg) {
                    if (collect([$isinya->user_id])->isEmpty() != true) {
                        $itungAjaArrayOnProg = $isinya->hitungStatus;
                        break;
                    }
                    else {
                        $itungAjaArrayOnProg = 0;

                    }

                }
                else {
                    $itungAjaArrayOnProg = 0;

                }
            }
            array_push($arraykosongOnProg2, $itungAjaArrayOnProg);
        }
        $datasetOnProg = [
            [
                'label' => 'On Progress Projects',
                'data' => $arraykosongOnProg2,
                'backgroundColor' => '#0dcaf0'
            ]
        ];

        //dd($arrayBuatStatusOnProg);
        //To Count On Hold Projects for Each User
        $statusOnHold1 = aktivitas::selectRaw('user_id, COUNT(*) as hitungStatus')
                        ->where('status', '3')
                        ->groupBy ('user_id')
                        ->orderBy('user_id')
                        ->get();
            
        $statusOnHold = collect(aktivitas::selectRaw('user_id, COUNT(*) as hitungStatus')
                            ->where('status', '3')
                            ->groupBy ('user_id')
                            ->orderBy('user_id')
                            ->get());

        $statusOnHoldPluck = $statusOnHold1->pluck('user_id');

        $namaUserNya = collect(User::select('name')->get());
        $namaUserNyaPluck = $namaUserNya->pluck('name');
       
        $ambilItungDataOnHold = $statusOnHold->pluck('hitungStatus');
        $ambilItungDataOnHold2 = $statusOnHold->pluck('user_id');
        $ambilItungDataOnHold3 = $ambilItungDataOnHold2->combine($ambilItungDataOnHold);

        $arraykosongOnHold = [];
        $arraykosongOnHold2 = [];
        $itungAjaArrayOnHold = [];
        for ($isiarrayOnHold=$idUserTerkecil; $isiarrayOnHold <= $totalUser ; $isiarrayOnHold++) {
            foreach ($statusOnHold1 as $key=>$isinya) {
                if ($isinya->user_id == $isiarrayOnHold) {
                    if (collect([$isinya->user_id])->isEmpty() != true) {
                        $itungAjaArrayOnHold = $isinya->hitungStatus;
                        break;
                    }
                    else {
                        $itungAjaArrayOnHold = 0;

                    }

                }
                else {
                    $itungAjaArrayOnHold = 0;

                }
            }
            array_push($arraykosongOnHold2, $itungAjaArrayOnHold);
        }

        $datasetOnHold = [
            [
                'label' => 'On Hold Projects',
                'data' => $arraykosongOnHold2,
                'backgroundColor' => '#ffc107'
            ]
        ];

        //To Count Not Assigned Projects for Each User
        $statusNoAss1 = aktivitas::selectRaw('user_id, COUNT(*) as hitungStatus')
                        ->where('status', '0')
                        ->groupBy ('user_id')
                        ->orderBy('user_id')
                        ->get();
            
        $statusNoAss = collect(aktivitas::selectRaw('user_id, COUNT(*) as hitungStatus')
                            ->where('status', '0')
                            ->groupBy ('user_id')
                            ->orderBy('user_id')
                            ->get());

        $statusNoAssPluck = $statusNoAss1->pluck('user_id');

        $namaUserNya = collect(User::select('name')->get());
        $namaUserNyaPluck = $namaUserNya->pluck('name');
       
        $ambilItungDataNoAss = $statusNoAss->pluck('hitungStatus');
        $ambilItungDataNoAss2 = $statusNoAss->pluck('user_id');
        $ambilItungDataNoAss3 = $ambilItungDataNoAss2->combine($ambilItungDataNoAss);

        $arraykosongNoAss = [];
        $arraykosongNoAss2 = [];
        $itungAjaArrayNoAss = [];
        for ($isiarrayNoAss=$idUserTerkecil; $isiarrayNoAss <= $totalUser ; $isiarrayNoAss++) {
            foreach ($statusNoAss1 as $key=>$isinya) {
                if ($isinya->user_id == $isiarrayNoAss) {
                    if (collect([$isinya->user_id])->isEmpty() != true) {
                        $itungAjaArrayNoAss = $isinya->hitungStatus;
                        break;
                    }
                    else {
                        $itungAjaArrayNoAss = 0;

                    }

                }
                else {
                    $itungAjaArrayNoAss = 0;

                }
            }
            array_push($arraykosongNoAss2, $itungAjaArrayNoAss);
        }

        $datasetNoAss = [
            [
                'label' => 'Not Assigned Projects',
                'data' => $arraykosongNoAss2,
                'backgroundColor' => '#6c757d'
            ]
        ];

        

        //To Total Projects Group By Month
        $totalAktivQuery = aktivitas::selectRaw('MONTH(Created_at) as monthAktiv, COUNT(*) as countAktiv')
                        -> whereYear('created_at', date('Y'))
                        -> groupBy ('monthAktiv')
                        -> orderBy('monthAktiv')
                        ->get();

        $arrayAktiv = [];
        $labelsAktiv = [];
        for ($aaAktiv=1; $aaAktiv <= 12 ; $aaAktiv++) { 
            $bulanAktiv = date('F', mktime(0,0,0,$aaAktiv,1));
            $Aktiv0 = 0;

            foreach ($totalAktivQuery as $aktivTotal) {
                if ($aktivTotal -> monthAktiv == $aaAktiv) {
                    $Aktiv0 = $aktivTotal->countAktiv;
                    break;
                }
            }

            array_push($labelsAktiv, $bulanAktiv);
            array_push($arrayAktiv, $Aktiv0);
        }

        $datasetAktivTotal = [
            [
                'label' => 'Projects',
                'data' => $arrayAktiv,
                'backgroundColor' => '#0fbb90'
            ]
        ];


        for ($aprojects = 0; $aprojects < $totalUser; $aprojects++) { 

            //$projectsItung = aktivitas::where('user_id', $aprojects)->get();
            $projectsItung = DB::table('aktivitas')
                                ->where('user_id', $aprojects)
                                ->orderBy('user_id')
                                ->get();
            $dataprojects0 = count($projectsItung);
            $labelUserKeArr = $ambilUser[$aprojects];
            
            array_push($projectsArr, $dataprojects0);
            array_push($labelsUserNya, $labelUserKeArr);

        }

        
        $dataUser = User::selectRaw('MONTH(Created_at) as month, COUNT(*) as count')
                    -> whereYear('created_at', date('Y'))
                    -> groupBy ('month')
                    -> orderBy('month')
                    ->get();
            
           // dd($cekarraydoang);
            //dd($arrayBuatStatusOnProg);
        $datasetprojects = [
            [
                'label' => 'Projects',
                'data' => $projectsArr,
                'backgroundColor' => '#0fbb90'
            ]
        ];




        //dd($labelAktivitasIsi);

        return view('/manager/index', compact('messageDashboard', 'dataStaff', 'dataadmin', 'datamanager', 'datahr', 'datasetAktivitas', 'labelAktivitasIsi', 'datasetprojects', 'labelsUserNya', 'statusProgNum', 'datasetFinished', 'datasetOnProg', 'datasetOnHold', 'datasetNoAss', 'datasetAktivTotal', 'labelsAktiv'));
    }
}