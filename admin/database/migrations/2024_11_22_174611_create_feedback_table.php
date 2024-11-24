<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migration untuk membuat tabel feedback.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->id(); // Primary key auto increment
            $table->string('nama'); // Kolom nama
            $table->string('email'); // Kolom email
            $table->text('feedback'); // Kolom feedback
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Rollback migration.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feedback');
    }
};
