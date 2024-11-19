<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Kolom ID sebagai primary key
            $table->string('name'); // Kolom untuk nama
            $table->string('email')->unique(); // Kolom untuk email yang unik
            $table->timestamp('email_verified_at')->nullable(); // Kolom untuk timestamp verifikasi email
            $table->string('password'); // Kolom untuk password
            $table->string('no_hp', 15)->nullable(); // Kolom untuk nomor HP (dapat bernilai null)
            $table->rememberToken(); // Kolom untuk token "remember me"
            $table->timestamps(); // Kolom untuk created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users'); // Menghapus tabel jika migrasi di-rollback
    }
}
