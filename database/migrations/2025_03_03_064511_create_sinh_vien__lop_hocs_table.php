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
        Schema::create('sinh_vien_lop_hocs', function (Blueprint $table) {
            $table->integer('ma_dang_ky')->primary();
            $table->integer('ma_sinh_vien');
            $table->integer('ma_lop');
            $table->date('ngay_dang_ky');
            $table->integer('trang_thai')->comment("trạng thái : 0 Đang học, 1 Đã hoàn thành, 2 Đã hủy");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sinh_vien_lop_hocs');
    }
};
