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
        Schema::create('lop_hocs', function (Blueprint $table) {
            $table->integer('ma_lop')->primary();
            $table->string('ten_lop');
            $table->integer('ma_mon_hoc');
            $table->integer('ma_giang_vien');
            $table->string('hoc_ky');
            $table->integer('nam_hoc');
            $table->integer('so_luong_sv_toi_da');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lop_hocs');
    }
};
