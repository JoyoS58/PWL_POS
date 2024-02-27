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
        Schema::create('t_stoks', function (Blueprint $table) {
            $table->id('stok_id');
            $table->unsignedBigInteger('barang_id')->index(); //untuk foreignkey
            $table->unsignedBigInteger('user_id')->index(); //untuk foreignkey
            $table->dateTime('stok_tanggal');
            $table->timestamps();

            // Mendefinisikan foreignkey
            $table->foreign('barang_id')->references('barang_id')->on('m_barangs');
            $table->foreign('user_id')->references('user_id')->on('m_users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_stoks');
    }
};
