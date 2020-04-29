<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail extends Model
{
    protected $table ='detail_kegiatan';
    protected $fillable=['jenis_perolehan','tanggal_perolehan','nilai_ekuivalen','jumlah_perolehan'];
    
}
