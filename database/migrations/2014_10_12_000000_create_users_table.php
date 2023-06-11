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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->bigInteger('idNumb');
            $table->date('joinDate');
            $table->date('birth');
            $table->integer('nip');
            $table->bigInteger('phoneNumb');
            $table->text('alamat');
            $table->text('jobDesc');
            $table->text('jobPurpose');
            $table->string('accName', 50);
            $table->bigInteger('accNumb');
            $table->bigInteger('npwp');
            $table->bigInteger('health');
            $table->bigInteger('bpjsKerja');
            $table->bigInteger('bpjsSehat');
            $table->boolean('type')->default(false);
            
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
