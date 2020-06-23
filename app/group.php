<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class group_peserta extends Model
{
    protected $table = 'group_peserta';
    protected $fillable = ['nama_group'];

    public function peserta(){
        return $this->hasMany(peserta::class);
    }
}
