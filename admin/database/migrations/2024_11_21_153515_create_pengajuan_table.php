<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan', function (Blueprint $table) {
            $table->id('id_pengajuan');
            $table->unsignedBigInteger('user_id'); // ID User
            $table->unsignedBigInteger('buku_id'); // ID Buku
            $table->string('nama_user'); // Nama User
            $table->string('judul'); // Judul Buku
            $table->string('penulis'); // Penulis Buku
            $table->string('penerbit'); // Penerbit Buku
            $table->timestamp('tgl_pengajuan')->useCurrent(); // Tanggal Pengajuan
            $table->timestamps();

            // Relasi ke tabel users
            $table->foreign('user_id')->references('id_user')->on('users')->onDelete('cascade');
            // Relasi ke tabel buku
            $table->foreign('buku_id')->references('id_buku')->on('buku')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengajuan');
    }
}
