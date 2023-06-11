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
        Schema::create('lokasinyas', function (Blueprint $table) {
            $table->id();
            $table->string('lokasiName', 30);
            $table->timestamps();
        });
        
        DB::table('lokasinyas')->insert([
            ['id' =>1, 'lokasiName' => 'HO'],
            ['id' =>2, 'lokasiName' => 'HOB'],
            ['id' =>3, 'lokasiName' => 'Warehouse'],
            ['id' =>4, 'lokasiName' => 'Store'],
            ['id' =>5, 'lokasiName' => 'Bazaar']
        

        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lokasis');
    }
};
