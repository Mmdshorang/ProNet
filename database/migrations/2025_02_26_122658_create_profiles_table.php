<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        // جدول پروفایل کارمندان
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained('employees')->onDelete('cascade');
            $table->text('skills')->nullable();
            $table->text('achievements')->nullable();
            $table->text('job_history')->nullable();
            $table->timestamps();
        });

    
    }

    public function down() {

        Schema::dropIfExists('profiles');
    }
};
