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
    Schema::create('ppdbs', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('jenis_kelamin');
        $table->string('tempat_lahir');
        $table->string('nama_orang_tua');
        $table->string('no_telepon');
        $table->text('alamat');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ppdbs');
    }
};