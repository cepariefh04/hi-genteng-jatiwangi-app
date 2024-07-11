<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('product_categories')->cascadeOnDelete();
            $table->string('nama');
            $table->integer('harga');
            $table->text('foto');
            $table->string('bahan_baku')->nullable();
            $table->double('panjang')->nullable();
            $table->double('lebar')->nullable();
            $table->double('ketebalan')->nullable();
            $table->double('berat')->nullable();
            $table->double('jarak_reng')->nullable();
            $table->double('volume')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
