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
        Schema::create('mju_students', function (Blueprint $table) {

            $table->string('student_code')->primary();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('first_name_en');
            $table->string('last_name_en')->nullable();
            $table->string('idcard')->unique();
            $table->date('birthdate')->nullable();
            $table->char('gender')->nullable();
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->timestamps();
            $table->unsignedBigInteger('major_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mju_students',function(Blueprint $table){
            $table->ropForeign(['major_id']);
        });

        Schema::dropIfExists('mju_students');

    }
};
