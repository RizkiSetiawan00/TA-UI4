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
        Schema::create('title1s', function (Blueprint $table) {
            $table->id();
            $table->string('title1Name', 255);
            $table->timestamps();
        });
        
        DB::table('title1s')->insert([
            ['id' =>1, 'title1Name' => 'Admin Merchandiser Intern'],
            ['id' =>2, 'title1Name' => 'Administrator'],
            ['id' =>3, 'title1Name' => 'Administrator, Group'],
            ['id' =>4, 'title1Name' => 'Area Manager'],
            ['id' =>5, 'title1Name' => 'Area Sales Executive (Kalimantan)'],
            ['id' =>6, 'title1Name' => 'Assistant'],
            ['id' =>7, 'title1Name' => 'Associate Manager'],
            ['id' =>8, 'title1Name' => 'Associate Manager, Group'],
            ['id' =>9, 'title1Name' => 'Associate Technical Director'],
            ['id' =>10, 'title1Name' => 'Brand Manager'],
            ['id' =>11, 'title1Name' => 'Business Development Intern'],
            ['id' =>12, 'title1Name' => 'Business Process Control Executive'],
            ['id' =>13, 'title1Name' => 'Business Process Intern'],
            ['id' =>14, 'title1Name' => 'Business Process Internship'],
            ['id' =>15, 'title1Name' => 'C - Level'],
            ['id' =>16, 'title1Name' => 'Chief Security'],
            ['id' =>17, 'title1Name' => 'Consultant'],
            ['id' =>18, 'title1Name' => 'Content Development Internship'],
            ['id' =>19, 'title1Name' => 'CRC Hotline Assistant'],
            ['id' =>20, 'title1Name' => 'CRM Intern'],
            ['id' =>21, 'title1Name' => 'Customer Experience Intern'],
            ['id' =>22, 'title1Name' => 'Digital Marketing Performance Manager'],
            ['id' =>23, 'title1Name' => 'Director'],
            ['id' =>24, 'title1Name' => 'Director, Group'],
            ['id' =>25, 'title1Name' => 'E-commerce Assistant'],
            ['id' =>26, 'title1Name' => 'E-Commerce Intern'],
            ['id' =>27, 'title1Name' => 'E-commerce Internship'],
            ['id' =>28, 'title1Name' => 'Executive'],
            ['id' =>29, 'title1Name' => 'Executive - KFL Squad'],
            ['id' =>30, 'title1Name' => 'Executive Manager'],
            ['id' =>31, 'title1Name' => 'Executive Store Manager'],
            ['id' =>32, 'title1Name' => 'Executives'],
            ['id' =>33, 'title1Name' => 'Expert'],
            ['id' =>34, 'title1Name' => 'External Auditor'],
            ['id' =>35, 'title1Name' => 'Finance Account Receivable Internship'],
            ['id' =>36, 'title1Name' => 'Finance Administrator (Temporary)'],
            ['id' =>37, 'title1Name' => 'General Manager'],
            ['id' =>38, 'title1Name' => 'Graphic Design Intern'],
            ['id' =>39, 'title1Name' => 'Graphic Design Internship'],
            ['id' =>40, 'title1Name' => 'Graphic Designer Freelance'],
            ['id' =>41, 'title1Name' => 'Group Managing Director'],
            ['id' =>42, 'title1Name' => 'Hot Line'],
            ['id' =>43, 'title1Name' => 'Intern'],
            ['id' =>44, 'title1Name' => 'Internship'],
            ['id' =>45, 'title1Name' => 'IT Security Senior Executive'],
            ['id' =>46, 'title1Name' => 'Kanmo Circle Brand Executive'],
            ['id' =>47, 'title1Name' => 'Legal Temporary'],
            ['id' =>48, 'title1Name' => 'Magento Senior Developer'],
            ['id' =>49, 'title1Name' => 'Manager'],
            ['id' =>50, 'title1Name' => 'Managing Director'],
            ['id' =>51, 'title1Name' => 'Marcomm Internship Nespresso'],
            ['id' =>52, 'title1Name' => 'Marketing Communication Intern'],
            ['id' =>53, 'title1Name' => 'Marketing Communication Internship'],
            ['id' =>54, 'title1Name' => 'Marketing Intern'],
            ['id' =>55, 'title1Name' => 'Marketing Internship'],
            ['id' =>56, 'title1Name' => 'Marketplace Intern'],
            ['id' =>57, 'title1Name' => 'Marketplace Specialist'],
            ['id' =>58, 'title1Name' => 'Merchandising Associate Manager'],
            ['id' =>59, 'title1Name' => 'Merchandising Executive (Mothercare)'],
            ['id' =>60, 'title1Name' => 'Merchandising Intern (ELC)'],
            ['id' =>61, 'title1Name' => 'Multimedia'],
            ['id' =>62, 'title1Name' => 'Online Trading Nespresso'],
            ['id' =>63, 'title1Name' => 'PR Internship'],
            ['id' =>64, 'title1Name' => 'Recruitment & Empolyee Branding Assistant'],
            ['id' =>65, 'title1Name' => 'Senior Administrator, Group'],
            ['id' =>66, 'title1Name' => 'Senior Executive'],
            ['id' =>67, 'title1Name' => 'Senior Manager'],
            ['id' =>68, 'title1Name' => 'Senior Specialist'],
            ['id' =>69, 'title1Name' => 'Senior Vice President'],
            ['id' =>70, 'title1Name' => 'Service Team'],
            ['id' =>71, 'title1Name' => 'Social Media Intern'],
            ['id' =>72, 'title1Name' => 'Specialist'],
            ['id' =>73, 'title1Name' => 'Store'],
            ['id' =>74, 'title1Name' => 'Store Bazaar'],
            ['id' =>75, 'title1Name' => 'Store Manager'],
            ['id' =>76, 'title1Name' => 'Store Manager Nespresso'],
            ['id' =>77, 'title1Name' => 'Support'],
            ['id' =>78, 'title1Name' => 'Tax Intern'],
            ['id' =>79, 'title1Name' => 'Vice President'],
            ['id' =>80, 'title1Name' => 'Warehouse']        

        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('title1s');
    }
};
