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
        Schema::create('supplier_person_positions', function (Blueprint $table) {
            $table->id();
            $table->string('position');
            $table->unsignedBigInteger('contact_person_id');
            $table->foreign('contact_person_id')->references('id')->on('supplier_contact_people')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supplier_person_positions');
    }
};