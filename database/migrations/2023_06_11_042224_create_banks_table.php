<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('banks', function (Blueprint $table) {
            $table->id();
            $table->string('bankName', 255);
            $table->timestamps();
        });
        
        DB::table('banks')->insert([
            ['id' =>1, 'bankName' => 'Bank Indonesia (Bank Sentral)'],
            ['id' =>2, 'bankName' => 'Bank Negara Indonesia'],
            ['id' =>3, 'bankName' => 'Bank Rakyat Indonesia'],
            ['id' =>4, 'bankName' => 'Bank Tabungan Negara'],
            ['id' =>5, 'bankName' => 'Bank Mandiri'],
            ['id' =>6, 'bankName' => 'Bank Agroniaga, Tbk.'],
            ['id' =>7, 'bankName' => 'Bank Antardaerah'],
            ['id' =>8, 'bankName' => 'Bank Artha Graha Internasional, Tbk.'],
            ['id' =>9, 'bankName' => 'Bank BNI Syariah'],
            ['id' =>10, 'bankName' => 'Bank Bukopin, Tbk'],
            ['id' =>11, 'bankName' => 'Bank Bumi Arta, Tbk'],
            ['id' =>12, 'bankName' => 'Bank Central Asia Tbk.(BCA)'],
            ['id' =>13, 'bankName' => 'Bank Cimb Niaga, Tbk'],
            ['id' =>14, 'bankName' => 'Bank Danamon Indonesia Tbk'],
            ['id' =>15, 'bankName' => 'Bank Ekonomi Raharja, Tbk'],
            ['id' =>16, 'bankName' => 'Bank Ganesha'],
            ['id' =>17, 'bankName' => 'Bank Hana'],
            ['id' =>18, 'bankName' => 'Bank Himpunan Saudara 1906, Tbk'],
            ['id' =>19, 'bankName' => 'Bank ICB Bumiputera Tbk'],
            ['id' =>20, 'bankName' => 'Bank ICBC Indonesia'],
            ['id' =>21, 'bankName' => 'Bank Index Selindo'],
            ['id' =>22, 'bankName' => 'Bank Internasional Indonesia Tbk'],
            ['id' =>23, 'bankName' => 'Bank Maspion Indonesia'],
            ['id' =>24, 'bankName' => 'Bank Mayapada International Tbk'],
            ['id' =>25, 'bankName' => 'Bank Mega, Tbk'],
            ['id' =>26, 'bankName' => 'Bank Mestika Dharma'],
            ['id' =>27, 'bankName' => 'Bank Metro Express'],
            ['id' =>28, 'bankName' => 'Bank Muamalat Indonesia'],
            ['id' =>29, 'bankName' => 'Bank Mutiara, Tbk'],
            ['id' =>30, 'bankName' => 'Bank Nusantara Parahyangan,Tbk'],
            ['id' =>31, 'bankName' => 'Bank OCBC NISP, Tbk'],
            ['id' =>32, 'bankName' => 'Bank Of India Indonesia, Tbk'],
            ['id' =>33, 'bankName' => 'Bank Permata Tbk'],
            ['id' =>34, 'bankName' => 'Bank SBI Indonesia'],
            ['id' =>35, 'bankName' => 'Bank Sinarmas, Tbk'],
            ['id' =>36, 'bankName' => 'Bank Syariah Mandiri'],
            ['id' =>37, 'bankName' => 'Bank Syariah Mega Indonesia'],
            ['id' =>38, 'bankName' => 'Bank UOB Indonesia (Dahulu Uob Buana)'],
            ['id' =>39, 'bankName' => 'Pan Indonesia Bank, Tbk'],
            ['id' =>40, 'bankName' => 'QNB Bank Kesawan Tbk'],
            ['id' =>41, 'bankName' => 'Anglomas Internasional Bank'],
            ['id' =>42, 'bankName' => 'Bank Andara'],
            ['id' =>43, 'bankName' => 'Bank Artos Indonesia'],
            ['id' =>44, 'bankName' => 'Bank Bca Syariah'],
            ['id' =>45, 'bankName' => 'Bank Bisnis Internasional'],
            ['id' =>46, 'bankName' => 'Bank Fama Internasional'],
            ['id' =>47, 'bankName' => 'Bank Harda Internasional'],
            ['id' =>48, 'bankName' => 'Bank Ina Perdana'],
            ['id' =>49, 'bankName' => 'Bank Jabar Banten Syariah'],
            ['id' =>50, 'bankName' => 'Bank Jasa Jakarta'],
            ['id' =>51, 'bankName' => 'Bank Kesejahteraan Ekonomi'],
            ['id' =>52, 'bankName' => 'Bank Mayora'],
            ['id' =>53, 'bankName' => 'Bank Mitraniaga'],
            ['id' =>54, 'bankName' => 'Bank Multi Arta Sentosa'],
            ['id' =>55, 'bankName' => 'Bank Panin Syariah'],
            ['id' =>56, 'bankName' => 'Bank Pundi Indonesia, Tbk'],
            ['id' =>57, 'bankName' => 'Bank Royal Indonesia'],
            ['id' =>58, 'bankName' => 'Bank Sahabat Purba Danarta'],
            ['id' =>59, 'bankName' => 'Bank Sahabat Sampoerna'],
            ['id' =>60, 'bankName' => 'Bank Sinar Harapan Bali'],
            ['id' =>61, 'bankName' => 'Bank Syariah Bukopin'],
            ['id' =>62, 'bankName' => 'Bank Tabungan Pensiunan Nasional, Tbk'],
            ['id' =>63, 'bankName' => 'Bank Victoria International, Tbk'],
            ['id' =>64, 'bankName' => 'Bank Victoria Syariah'],
            ['id' =>65, 'bankName' => 'Bank Yudha Bhakti'],
            ['id' =>66, 'bankName' => 'Bank Aceh'],
            ['id' =>67, 'bankName' => 'BPD Bengkulu'],
            ['id' =>68, 'bankName' => 'Bank DKI'],
            ['id' =>69, 'bankName' => 'Bank Jabar Banten, Tbk (BJB)'],
            ['id' =>70, 'bankName' => 'BPD Jambi'],
            ['id' =>71, 'bankName' => 'Bank Kalimantan Tengah'],
            ['id' =>72, 'bankName' => 'Bank Lampung'],
            ['id' =>73, 'bankName' => 'BPD Maluku'],
            ['id' =>74, 'bankName' => 'BPD Riau Dan Kepulauan Riau'],
            ['id' =>75, 'bankName' => 'BPD Sulawesi Selatan Dan Sulawesi Barat'],
            ['id' =>76, 'bankName' => 'BPD Sumatera Barat'],
            ['id' =>77, 'bankName' => 'Bank Jateng ( dahulu BPD Jawa Tengah )'],
            ['id' =>78, 'bankName' => 'Bank Jatim (dahulu bernama BPD Jawa Timur)'],
            ['id' =>79, 'bankName' => 'BPD Kalimantan Barat'],
            ['id' =>80, 'bankName' => 'BPD Nusa Tenggara Barat'],
            ['id' =>81, 'bankName' => 'BPD Nusa Tenggara Timur'],
            ['id' =>82, 'bankName' => 'BPD Sulawesi Tengah'],
            ['id' =>83, 'bankName' => 'BPD Sulawesi Utara'],
            ['id' =>84, 'bankName' => 'BPD Bali'],
            ['id' =>85, 'bankName' => 'BPD Kalimantan Selatan'],
            ['id' =>86, 'bankName' => 'BPD Papua'],
            ['id' =>87, 'bankName' => 'BPD Sumatera Selatan Dan Bangka Belitung'],
            ['id' =>88, 'bankName' => 'BPD Sumatera Utara'],
            ['id' =>89, 'bankName' => 'BPD Sulawesi Tenggara'],
            ['id' =>90, 'bankName' => 'BPD Yogyakarta'],
            ['id' =>91, 'bankName' => 'BPD Kalimantan Timur'],
            ['id' =>92, 'bankName' => 'Bank Syariah Indonesia (BSI)'],
            ['id' =>93, 'bankName' => 'PT. Bank Syariah Muamalat Indonesia'],
            ['id' =>94, 'bankName' => 'PT. Bank Syariah Mega Indonesia'],
            ['id' =>95, 'bankName' => 'PT Bank Jabar dan Banten'],
            ['id' =>96, 'bankName' => 'PT Bank Panin Syariah'],
            ['id' =>97, 'bankName' => 'PT Bank Syariah Bukopin'],
            ['id' =>98, 'bankName' => 'PT Bank Victoria Syariah'],
            ['id' =>99, 'bankName' => 'PT BCA Syariah'],
            ['id' =>100, 'bankName' => 'PT Maybank Indonesia Syariah'],
            ['id' =>101, 'bankName' => 'Bank Of America, N.A'],
            ['id' =>102, 'bankName' => 'Bank Of China Limited'],
            ['id' =>103, 'bankName' => 'Citibank N.A.'],
            ['id' =>104, 'bankName' => 'Deutsche Bank AG.'],
            ['id' =>105, 'bankName' => 'JP. Morgan Chase Bank, N.A.'],
            ['id' =>106, 'bankName' => 'Standard Chartered Bank'],
            ['id' =>107, 'bankName' => 'The Bangkok Bank Comp. Ltd'],
            ['id' =>108, 'bankName' => 'The Bank Of Tokyo Mitsubishi UFJ Ltd'],
            ['id' =>109, 'bankName' => 'The Hongkong & Shanghai Banking Corp'],
            ['id' =>110, 'bankName' => 'The Royal Bank Of Scotland N.V.'],
            ['id' =>111, 'bankName' => 'Bank Commonwealth'],
            ['id' =>112, 'bankName' => 'Bank Agris'],
            ['id' =>113, 'bankName' => 'Bank ANZ Indonesia'],
            ['id' =>114, 'bankName' => 'Bank BNP Paribas Indonesia'],
            ['id' =>115, 'bankName' => 'Bank Capital Indonesia, Tbk'],
            ['id' =>116, 'bankName' => 'Bank DBS Indonesia'],
            ['id' =>117, 'bankName' => 'Bank KEB Indonesia'],
            ['id' =>118, 'bankName' => 'Bank Maybank Syariah Indonesia'],
            ['id' =>119, 'bankName' => 'Bank Mizuho Indonesia'],
            ['id' =>120, 'bankName' => 'Bank Rabobank International Indonesia'],
            ['id' =>121, 'bankName' => 'Bank Resona Perdania'],
            ['id' =>122, 'bankName' => 'Bank Windu Kentjana International, Tbk'],
            ['id' =>123, 'bankName' => 'Bank Woori Indonesia'],
            ['id' =>124, 'bankName' => 'Bank China Trust Indonesia'],
            ['id' =>125, 'bankName' => 'Bank Sumitomo Mitsui Indonesia']
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banks');
    }
};
