<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('warisan_bumis', function (Blueprint $table) {
            $table->id();
            $table->string('section');
            $table->string('jenis')->nullable();
            $table->string('nama');
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->text('lokasi')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kota')->nullable();
            $table->decimal('x', 11, 7)->nullable();
            $table->decimal('y', 10, 7)->nullable();
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('warisan_bumis');
    }
};
