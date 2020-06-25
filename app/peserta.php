<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peserta extends Model
{
    protected $table='peserta';
    protected $fillable=['nama_peserta','jenis_kelamin','no_hp','alamat_peserta','kegiatan_id'];

    public function kegiatan(){
        return $this->belongsTo('App\kegiatan');
    }

    
}
