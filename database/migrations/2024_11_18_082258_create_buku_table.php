<?php 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukuTable extends Migration
{
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->id('id_buku');  // Kolom primary key
            $table->string('judul'); // Kolom untuk judul buku
            $table->string('penulis'); // Kolom untuk penulis buku
            $table->string('penerbit'); // Kolom untuk penerbit buku
            $table->date('tgl_terbit'); // Kolom untuk tanggal terbit buku
            $table->string('bahasa'); // Kolom untuk bahasa buku
            $table->string('genre'); // Kolom untuk genre buku
            $table->integer('halaman'); // Kolom untuk jumlah halaman
            $table->decimal('berat', 5, 2); // Kolom untuk berat buku (misal: 5.2 untuk berat dalam kg)
            $table->text('deskripsi'); // Kolom untuk deskripsi buku
            $table->timestamps(); // Kolom untuk created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('buku');
    }
}


?>