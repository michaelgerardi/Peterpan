<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\detail;
use App\Kegiatan;
use Charts;
Use DB;

class GrafikController extends Controller
{

    public function grafik(Request $req){
        $data = detail::find($req->id);
        $data_detail = detail::all();
        $jenis_pemasukan = [];
        $pemasukan = [];
            foreach ($data_detail as $detail){
                $jenis_pemasukan [] = $detail->jenis_perolehan;
                $pemasukan [] = $detail->dana_perolehan;
            }
           // dd(json_encode($jenis_pemasukan));
           //dd($pemasukan);
        return view('PDF.grafik',compact('jenis_pemasukan','pemasukan'));
    }
}
