<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail extends Model
{
    protected $table ='detail_kegiatan';
    protected $fillable=['kegiatan_id','jenis_perolehan','tanggal_perolehan','dana_ekuivalen','dana_perolehan'];
    
    public function kegiatan(){
        return $this->belongsTo(kegiatan::class);
    }
}
