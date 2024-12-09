<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPhotoToTeachersTable extends Migration
{
    /**
     * Jalankan migration untuk menambah kolom 'photo'.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('teachers', function (Blueprint $table) {
            $table->string('photo')->nullable()->after('keterangan');  // Menambahkan kolom 'photo' setelah kolom 'keterangan'
        });
    }

    /**
     * Balikkan perubahan saat migration di roll-back.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('teachers', function (Blueprint $table) {
            $table->dropColumn('photo');  // Menghapus kolom 'photo'
        });
    }
}
