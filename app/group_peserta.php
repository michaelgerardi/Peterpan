<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class group_peserta extends Model
{
    protected $table = 'group_peserta';
    protected $fillable = ['nama_group_peserta'];
    public function peserta(){
        return $this->hasMany('App\Peserta');
    }
}
