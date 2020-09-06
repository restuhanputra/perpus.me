<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->integer('id_kategori')->length(11)->unsigned();
            $table->text('name', 50);
            $table->text('pengarang', 50);
            $table->text('penerbit', 50);
            $table->text('kota', 20);
            $table->text('tahun_terbit', 5);
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
        Schema::dropIfExists('buku');
    }
}
