<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToTeachersTable extends Migration
{
    /**
     * Jalankan migration untuk menambah kolom.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('teachers', function (Blueprint $table) {
            $table->string('nama')->after('id');  // Menambahkan kolom 'nama'
            $table->string('jabatan')->after('nama');  // Menambahkan kolom 'jabatan'
            $table->string('jenjang_pendidikan')->default('Tidak Tersedia')->after('jabatan');  // Menambahkan kolom 'jenjang_pendidikan' dengan default 'Tidak Tersedia'
            $table->date('tanggal_bergabung')->nullable()->after('jenjang_pendidikan');  // Menambahkan kolom 'tanggal_bergabung'
            $table->text('keterangan')->nullable()->after('tanggal_bergabung');  // Menambahkan kolom 'keterangan'
            $table->text('motto')->nullable()->after('keterangan');
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
            $table->dropColumn(['nama', 'jabatan', 'jenjang_pendidikan', 'tanggal_bergabung', 'keterangan']);
        });
    }
}
