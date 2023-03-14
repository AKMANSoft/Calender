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
        //
        Schema::create('rejected_projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_name');
            $table->string('proj_chain');
            $table->string('total_supply');
            $table->string('proj_description');
            $table->string('twitter')->nullable();
            $table->string('discord')->nullable();
            $table->string('url')->nullable();
            $table->string('time_zone');
            $table->string('pre_sale_date')->nullable();
            $table->string('pre_sale_time')->nullable();
            $table->string('pre_sale_price')->nullable();
            $table->string('date');
            $table->string('time');
            $table->string('price');
            $table->string('founder_name')->nullable();
            $table->string('founder_email');
            $table->string('founder_phone')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('rejected_projects');
    }
};
