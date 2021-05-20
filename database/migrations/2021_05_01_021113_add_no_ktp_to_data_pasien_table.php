<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNoKtpToDataPasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_pasien', function (Blueprint $table) {
            $table->char('no_ktp', 50);
            $table->string('alamat', 100);
            $table->string('jenis_kelamin', 10);
            $table->date('tgl_lahir');
            $table->string('gol_darah', 10);
            $table->string('riwayat_penyakit', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_pasien', function (Blueprint $table) {
            $table->dropColumn('no_ktp');
        });
    }
}
