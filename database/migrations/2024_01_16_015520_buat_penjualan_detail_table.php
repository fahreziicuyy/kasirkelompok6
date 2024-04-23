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
        Schema::create('penjualan_detail', function (Blueprint $table) {
            $table->Increments('id_penjualan_detail');
            $table->integer('id_penjualan');
            $table->integer('id_produk');
            $table->integer('harga_jual');
            $table->integer('jumlah');
            $table->tinyInteger('diskon')->default(0);
            $table->integer('subtotal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropIfExists('penjualan_detail');
    }
};
