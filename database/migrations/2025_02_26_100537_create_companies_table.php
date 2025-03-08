<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up() {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('website')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });

   
        Schema::create('company_ratings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained('companies')->onDelete('cascade');
           // $table->foreignId('rater_id')->constrained('employees')->onDelete('cascade');
            $table->integer('professionalism')->default(0);
            $table->integer('teamwork')->default(0);
            $table->integer('management')->default(0);
            $table->timestamps();
        });
    }

    public function down() {
       
        Schema::dropIfExists('company_ratings');
        Schema::dropIfExists('companies');

    }
};
