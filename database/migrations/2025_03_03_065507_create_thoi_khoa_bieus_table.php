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
        Schema::create('thoi_khoa_bieus', function (Blueprint $table) {
            $table->integer('ma_thoi_khoa_bieu')->primary();
            $table->integer('ma_lop');
            $table->integer('thu_trong_tuan')->comment('0: chủ nhật, 1: thứ 2, 2: thứ 3, 3: thứ 4, 4: thứ 5, 5: thứ 6, 6: thứ 7');
            $table->integer('tiet_bat_dau');
            $table->integer('so_tiet');
            $table->integer('ma_phong');
            $table->longText('ghi_chu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thoi_khoa_bieus');
    }
};
