<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('buku', function (Blueprint $table) {
        $table->id('id_buku');
        $table->string('judul');
        $table->string('penulis');
        $table->string('penerbit');
        $table->date('tgl_terbit');
        $table->string('bahasa');
        $table->string('genre');
        $table->integer('halaman');
        $table->decimal('berat', 5, 2); // Berat dengan 2 desimal
        $table->text('deskripsi')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};
