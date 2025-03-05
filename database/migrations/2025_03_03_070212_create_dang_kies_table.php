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
        Schema::create('dang_kys', function (Blueprint $table) {
            $table->integer('ma_dang_ky')->primary();
            $table->integer('ma_sinh_vien');
            $table->integer('ma_mon_hoc');
            $table->date('ngay_dang_ky');
            $table->string('hoc_ky');
            $table->string('ten_mon_hoc');
            $table->string('nam_hoc');
            $table->string('ten_mon_hoc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dang_kys');
    }
};
