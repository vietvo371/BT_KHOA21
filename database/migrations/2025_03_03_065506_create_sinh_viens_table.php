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
        Schema::create('sinh_viens', function (Blueprint $table) {
            $table->id();
            $table->integer('ma_sinh_vien')->unique();
            $table->string('ho_ten');
            $table->date('ngay_sinh');
            $table->integer('gioi_tinh')->comment('0: nữ, 1: nam', '2: khác');
            $table->string('dia_chi');
            $table->string('email')->unique();
            $table->string('so_dien_thoai');
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sinh_viens');
    }
};
