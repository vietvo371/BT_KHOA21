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
        Schema::create('phong_hocs', function (Blueprint $table) {
            $table->integer('ma_phong')->primary();
            $table->string('ten_phong');
            $table->string('dia_chi');
            $table->integer('loai_phong')->comment('0: phòng học, 1: phòng thực hành, 2: phòng lab', '3: hội trường', '4: khác');
            $table->integer('suc_chua');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phong_hocs');
    }
};
