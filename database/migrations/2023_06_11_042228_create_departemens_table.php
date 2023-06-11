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
        Schema::create('departemens', function (Blueprint $table) {
            $table->id();
            $table->string('departemenName', 255);
            $table->timestamps();
        });
        
        DB::table('departemens')->insert([
            ['id' =>1, 'departemenName' => 'Adidas'],
            ['id' =>2, 'departemenName' => 'Amped'],
            ['id' =>3, 'departemenName' => 'Bazaar'],
            ['id' =>4, 'departemenName' => 'Bazaar DIS'],
            ['id' =>5, 'departemenName' => 'Bazaar MTI'],
            ['id' =>6, 'departemenName' => 'Brand Management'],
            ['id' =>7, 'departemenName' => 'Brand Management (Gingersnaps)'],
            ['id' =>8, 'departemenName' => 'Brand Management (MC & ELC)'],
            ['id' =>9, 'departemenName' => 'Brand Official'],
            ['id' =>10, 'departemenName' => 'Business Development'],
            ['id' =>11, 'departemenName' => 'Coach'],
            ['id' =>12, 'departemenName' => 'Cole Haan'],
            ['id' =>13, 'departemenName' => 'CRM'],
            ['id' =>14, 'departemenName' => 'CRM & Data Loyalty'],
            ['id' =>15, 'departemenName' => 'Digital & Omnichannel'],
            ['id' =>16, 'departemenName' => 'Distribution'],
            ['id' =>17, 'departemenName' => 'E-Commerce'],
            ['id' =>18, 'departemenName' => 'E-Commerce, Trade & Digital Marketing'],
            ['id' =>19, 'departemenName' => 'ELC'],
            ['id' =>20, 'departemenName' => 'Finance'],
            ['id' =>21, 'departemenName' => 'Gingersnaps'],
            ['id' =>22, 'departemenName' => 'Havaianas'],
            ['id' =>23, 'departemenName' => 'Havaianas AEON Sentul'],
            ['id' =>24, 'departemenName' => 'Havaianas Bali'],
            ['id' =>25, 'departemenName' => 'Human Resources Department'],
            ['id' =>26, 'departemenName' => 'Human Resources'],
            ['id' =>27, 'departemenName' => 'Information Technology'],
            ['id' =>28, 'departemenName' => 'IT'],
            ['id' =>29, 'departemenName' => 'Justice'],
            ['id' =>30, 'departemenName' => 'Kanmo Airport'],
            ['id' =>31, 'departemenName' => 'Kanmo Group System'],
            ['id' =>32, 'departemenName' => 'Karen Millen'],
            ['id' =>33, 'departemenName' => 'Kate Spade'],
            ['id' =>34, 'departemenName' => 'KRI Bazaar'],
            ['id' =>35, 'departemenName' => 'Legal'],
            ['id' =>36, 'departemenName' => 'Legal & Compliance'],
            ['id' =>37, 'departemenName' => 'Management'],
            ['id' =>38, 'departemenName' => 'Marcom'],
            ['id' =>39, 'departemenName' => 'Marketing'],
            ['id' =>40, 'departemenName' => 'Marketing & Brand Startegy'],
            ['id' =>41, 'departemenName' => 'Mothercare'],
            ['id' =>42, 'departemenName' => 'MTI Bazaar'],
            ['id' =>43, 'departemenName' => 'Nespresso'],
            ['id' =>44, 'departemenName' => 'Nike'],
            ['id' =>45, 'departemenName' => 'Official Brand'],
            ['id' =>46, 'departemenName' => 'Project & Maintenance'],
            ['id' =>47, 'departemenName' => 'Pumpkin Patch'],
            ['id' =>48, 'departemenName' => 'Retail Operation'],
            ['id' =>49, 'departemenName' => 'Shipping'],
            ['id' =>50, 'departemenName' => 'Store Colehaan'],
            ['id' =>51, 'departemenName' => 'Stuart Weitzman'],
            ['id' =>52, 'departemenName' => 'Thomas Sabo'],
            ['id' =>53, 'departemenName' => 'TM Lewin'],
            ['id' =>54, 'departemenName' => 'Training'],
            ['id' =>55, 'departemenName' => 'Warehouse'],
            ['id' =>56, 'departemenName' => 'Wilio'],
            ['id' =>57, 'departemenName' => 'Women Secret'],
            ['id' =>58, 'departemenName' => 'Yo Panino']

        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departemens');
    }
};
