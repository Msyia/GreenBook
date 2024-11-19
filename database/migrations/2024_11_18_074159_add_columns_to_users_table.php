<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToUsersTable extends Migration

{
    public function up()
{
    Schema::create('users', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('username');
        $table->string('email');
        $table->string('nomor_handphone');
        $table->string('password');
        $table->timestamps();
    });
}


    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('nama'); // Kolom Nama
            $table->string('username')->unique(); // Kolom Username
            $table->string('email')->unique(); // Kolom Email
            $table->string('nomor_handphone'); // Kolom Nomor Handphone
            $table->string('password'); // Kolom Password
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }
}
