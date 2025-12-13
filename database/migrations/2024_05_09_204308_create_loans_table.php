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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('loan_id')->nullable();
            $table->string('loan_amount')->nullable();
            $table->string('loan_facility')->nullable();
            $table->string('loan_tenure')->nullable();
            $table->string('loan_purpose')->nullable();
            $table->string('loan_status')->default('0')->comment('0=pending, 1 = approved'); 
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
