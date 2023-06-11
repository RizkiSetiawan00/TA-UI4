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
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBiginteger('bank_id')->unsigned();
            $table->unsignedBiginteger('brand_id')->unsigned();
            $table->unsignedBiginteger('departemen_id')->unsigned();
            $table->unsignedBiginteger('title1_id')->unsigned();
            $table->unsignedBiginteger('lokasinya_id')->unsigned();
    
            $table->foreign('bank_id')->references('id')->on('banks')->onDelete('cascade');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
            $table->foreign('departemen_id')->references('id')->on('departemens')->onDelete('cascade');
            $table->foreign('title1_id')->references('id')->on('title1s')->onDelete('cascade');
            $table->foreign('lokasinya_id')->references('id')->on('lokasinyas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }

    
};
