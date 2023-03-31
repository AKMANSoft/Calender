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
            $table->string('chain')->nullable();
            $table->string('total_supply');
            $table->longText('description');

            $table->string('twitter_link')->nullable();
            $table->string('discord_link')->nullable();
            $table->string('website_link')->nullable();

            $table->string('profile_image_path');
            $table->string('banner_image_path')->nullable();

            $table->string('pre_sale_timezone');
            $table->string('pre_sale_date')->nullable();
            $table->string('pre_sale_time')->nullable();
            $table->decimal('pre_sale_price', $precision = 8, $scale = 2)->nullable();

            $table->date('mint_date')->nullable();
            $table->dateTime('mint_time')->nullable();
            $table->decimal('mint_price', $precision = 8, $scale = 2)->nullable();

            $table->string('founder_name')->nullable();
            $table->string('founder_email');
            $table->string('founder_phone')->nullable();

            $table->string('status')->default('requested');

            $table->boolean('is_super_featured')->default(false);
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_link_verified')->default(false);
            $table->boolean('is_dooxed_kyc_verified')->default(false);
            $table->unsignedBigInteger('page_views')->default(0);

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
