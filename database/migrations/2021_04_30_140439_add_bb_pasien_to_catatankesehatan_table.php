<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBbPasienToCatatankesehatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('catatankesehatan', function (Blueprint $table) {
            $table->char('bb_pasien', 25);
            $table->char('tb_pasien', 25);
            $table->char('imt_pasien', 25);
            $table->string('tensi_darah', 25);
            $table->char('kolesterol', 25);
            $table->char('gula_darah', 25);
            $table->string('asam_urat', 25);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('catatankesehatan', function (Blueprint $table) {
            $table->dropColumn('bb_pasien');
        });
    }
}
