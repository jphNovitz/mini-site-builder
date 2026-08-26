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
        Schema::create('business_cards', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('company_name');
            $table->string('logo_path')->nullable();
            $table->string('tagline')->nullable();
            $table->string('vat_number')->nullable();
            $table->string('company_number')->nullable();
            $table->string('address')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->json('social_media_links')->nullable();
            $table->string('accent_color')->nullable();
            $table->string('slug')->unique();
            $table->string('status')->default('pending');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_cards');
    }
};
