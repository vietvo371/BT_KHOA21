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
        Schema::create('diem_sos', function (Blueprint $table) {
            $table->integer('ma_diem')->primary();
            $table->integer('ma_dang_ky');
            $table->float('diem_giua_ky');
            $table->float('diem_cuoi_ky');
            $table->float('diem_chuyen_can');
            $table->float('diem_tong_ket');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diem_sos');
    }
};
