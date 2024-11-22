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
    Schema::create('pengajuan', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id');
        $table->unsignedBigInteger('buku_id');
        $table->string('is_pengajuan');
        $table->string('nama_user');
        $table->string('judul');
        $table->string('penulis');
        $table->string('penerbit');
        $table->timestamp('tgl_pengajuan')->useCurrent();
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        $table->foreign('buku_id')->references('id')->on('buku')->onDelete('cascade');
        $table->timestamps();
    });
}


public function down()
{
    Schema::table('pengajuan', function (Blueprint $table) {
        $table->dropColumn('id_buku');
    });
}
};
