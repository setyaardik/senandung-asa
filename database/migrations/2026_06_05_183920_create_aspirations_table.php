<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('aspirations', function (Blueprint $table) {
            $table->id();

            $table->string('name')->nullable(); // Nama/Inisial
            $table->integer('age')->nullable();

            $table->string('gender')->nullable();

            $table->string('region')->nullable(); // Kabupaten/Kota

            $table->longText('message');

            $table->enum('status', [
                'baru',
                'diproses',
                'selesai',
            ])->default('baru');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('aspirations');
    }
};