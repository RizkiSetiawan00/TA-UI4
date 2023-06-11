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
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('brandName', 255);
            $table->timestamps();
        });
        
        DB::table('brands')->insert([
            [ 'brandName' => 'Group'],
            [ 'brandName' => 'Mothercare'],
            [ 'brandName' => 'Early Learning Centre'],
            [ 'brandName' => 'The Entertainer'],
            [ 'brandName' => 'Gingersnaps'],
            [ 'brandName' => 'Justice'],
            [ 'brandName' => 'The Childrens Place'],
            [ 'brandName' => 'MoMaMi'],
            [ 'brandName' => 'Coach'],
            [ 'brandName' => 'Kate Spade New York'],
            [ 'brandName' => 'Stuart Weitzman'],
            [ 'brandName' => 'Thomas Sabo'],
            [ 'brandName' => 'Wilio'],
            [ 'brandName' => 'Havaianas'],
            [ 'brandName' => 'Cole Haan'],
            [ 'brandName' => 'Adidas'],
            [ 'brandName' => 'T3'],
            [ 'brandName' => 'Porsche Design'],
            [ 'brandName' => 'Shoe Gallery'],
            [ 'brandName' => 'Nespresso'],
            [ 'brandName' => 'Eversince'],


        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brands');
    }
};
