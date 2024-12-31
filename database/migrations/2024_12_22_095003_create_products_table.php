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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('name')->nullable();
            $table->longText('type'); // full-powered-hot-tubs / plug-and-play-hot-tubs / cold-spas
            $table->string('caption')->nullable();
            $table->string('long_caption')->nullable();
            $table->longText('short_description')->nullable();
            $table->longText('long_description')->nullable();
            $table->string('measurement')->nullable();
            $table->json('images')->nullable();
            $table->json('features')->nullable();
            $table->json('top_showcase')->nullable();
            $table->json('bottom_showcase')->nullable();
            $table->longText('about')->nullable();
            $table->longText('ambiance')->nullable();
            $table->longText('therapy')->nullable();
            $table->longText('water_care')->nullable();
            $table->longText('audio_system')->nullable();
            $table->json('specifications')->nullable();
            $table->json('warranty')->nullable();
            $table->boolean('new')->default(false);
            $table->boolean('free_delivery')->default(false);
            $table->boolean('free_cover')->default(false);
            $table->boolean('free_color_matching_step')->default(false);
            $table->boolean('free_starter_chemical_kit')->default(false);
            $table->string("person_capacity")->nullable();
            // $table->string("hydrotherapy_jet")->nullable();
            // $table->string("therapy_pump")->nullable();
            // $table->string("gallon_capacity")->nullable();
            $table->string("plug_and_play")->nullable();
            $table->string("chilled_temperature")->nullable();
            $table->string("fully_powered")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
