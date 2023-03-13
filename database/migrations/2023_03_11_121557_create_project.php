<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Project;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_name');
            $table->string('proj_chain');
            $table->string('total_supply');
            $table->string('proj_description');
            $table->string('twitter');
            $table->string('discord');
            $table->string('url');
            $table->string('time_zone');
            $table->string('pre_sale_date');
            $table->string('pre_sale_time');
            $table->string('pre_sale_price');
            $table->string('date');
            $table->string('time');
            $table->string('price');
            $table->string('founder_name');
            $table->string('founder_email');
            $table->string('founder_phone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};