<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddKeluhanToCatatankeluhanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('catatankeluhan', function (Blueprint $table) {
            $table->date('tgl');
            $table->string('keluhan', 100);
            $table->string('tindak_lanjut', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('catatankeluhan', function (Blueprint $table) {
            $table->dropColumn('keluhan');
        });
    }
}
