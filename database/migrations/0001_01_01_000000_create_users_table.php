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
            $table->string('name')->default('');
            $table->string('first_name')->default('');
            $table->string('company_name')->default('LAB2VIEW')->nullable();
            $table->string('company_location')->default('DOUALA')->nullable();
            $table->string('representative_name')->default('William')->nullable();
            $table->string('representative_address')->default('Kotto')->nullable();
            $table->integer('representative_tel')->default('659452067')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->default('');
            $table->string('tel')->default('');
            $table->string('speciality')->default('');
            $table->string('date_of_birth')->default('');
            $table->string('job_description')->default('Software_Developper')->nullable();
            $table->string('salary_wages')->default('50.000k')->nullable();
            $table->string('enterprise_domain')->default('Software')->nullable();
            $table->string('enterprise_location')->default('B.sadi')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
