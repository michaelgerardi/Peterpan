<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class group extends Model
{
    protected $table = 'group';
    protected $fillable = ['asal_donatur'];

    public function peserta(){
        return $this->hasMany(donatur::class);
    }
}
