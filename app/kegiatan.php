<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kegiatan extends Model
{
    protected $table ='kegiatan';
    protected $fillable=['nama_kegiatan','tempat_kegiatan','tanggal_kegiatan','jenis_kegiatan','jumlah_peserta'];
    public function donatur(){
        return $this->hasMany('App\donatur');
    }
}
