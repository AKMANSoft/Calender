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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('chain');
            $table->string('total_supply');
            $table->string('description');

            $table->string('twitter_link')->nullable();
            $table->string('discord_link')->nullable();
            $table->string('website_link')->nullable();

            $table->string('profile_image_path');
            $table->string('banner_image_path')->nullable();

            $table->string('pre_sale_timezone');
            $table->string('pre_sale_date')->nullable();
            $table->string('pre_sale_time')->nullable();
            $table->integer('pre_sale_price')->nullable();

            $table->string('mint_date')->nullable();
            $table->string('mint_time')->nullable();
            $table->integer('mint_price')->nullable();

            $table->string('founder_name')->nullable();
            $table->string('founder_email');
            $table->integer('founder_phone')->nullable();

            $table->string('status')->default('requested');
            
            $table->boolean('is_super_featured')->default(false);
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_link_verified')->default(false);
            $table->boolean('is_dooxed_kyc_verified')->default(false);

            $table->foreignId('project_category_id')->nullable();
            $table->foreign('project_category_id')->references('id')->on('project_categories')->onDelete('set null');

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