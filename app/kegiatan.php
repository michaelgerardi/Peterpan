<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kegiatan extends Model
{
    protected $table ='kegiatan';
    protected $fillable=['donatur_id','nama_kegiatan','tempat_kegiatan','tanggal_kegiatan','jenis_kegiatan','jumlah_peserta'];
    public function donatur(){
        return $this->belongsTo('App\donatur');
    }
    
    public function detail(){
        return $this->hasMany(detail::class);
    }
}
