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
        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText("description");
            $table->string("location");
            $table->string('image')->default("https://acko-cms.ackoassets.com/places_to_visit_in_egypt_2_46151d1196.png");
            $table->integer("fees_egyptian")->default(0);
            $table->integer("fees_foreigners")->default(0);
            $table->time("start_work")->default(0);
            $table->time("end_work")->default(0);
            $table->decimal('lat', 10, 7)->nullable();
            $table->decimal('ing', 10, 7)->nullable();
            $table->unsignedBigInteger("governorate_id");
            $table->foreign('governorate_id')->references('id')->on('governorates')->onDelete('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('places');
    }
};
