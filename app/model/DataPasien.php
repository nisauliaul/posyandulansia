<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class DataPasien extends Model
{
    protected $table = 'data_pasien';
    protected $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_pasien', 'no_ktp', 'jenis_kelamin', 'alamat', 'tgl_lahir', 'gol_darah', 'riwayat_penyakit',
    ];

    
}
