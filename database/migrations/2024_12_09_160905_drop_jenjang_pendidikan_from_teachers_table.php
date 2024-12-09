<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropJenjangPendidikanFromTeachersTable extends Migration
{
    /**
     * Jalankan migration untuk menghapus kolom.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('teachers', function (Blueprint $table) {
            $table->dropColumn('jenjang_pendidikan');  // Menghapus kolom 'jenjang_pendidikan'
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
            $table->string('jenjang_pendidikan')->default('Tidak Tersedia');  // Menambahkan kolom 'jenjang_pendidikan' kembali
        });
    }
}
