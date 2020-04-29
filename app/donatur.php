<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class donatur extends Model
{
    protected $table='donatur';
    protected $fillable=['nama_donatur','jenis_kelamin_donatur','status','afiliasi','no_rekening','alamat_donatur'];
    public function peserta(){
        return $this->hasMany('App\peserta');
    }
}
