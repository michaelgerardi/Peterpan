<?php

namespace App\Http\Controllers;


use App\Kegiatan;
use App\detail;
use PDF;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LaporankeuanganController extends Controller
{
    public function index(){
        
        $data_detail = detail::all();
        $data_kegiatan = kegiatan::all();
        $jumlah_perolehan = detail::select(detail::raw('sum(dana_ekuivalen + dana_perolehan) as total'))->first();
        return view('Laporan.keuangan',compact('data_detail','jumlah_perolehan','data_kegiatan'));
    
    }

    public function cari(Request $request){
        // menangkap data pencarian
		$cari = $request->cari;
 
        // mengambil data dari table pegawai sesuai pencarian data
    $data_detail = DB::table('detail_kegiatan')
    ->where('jenis_perolehan','like',"%".$cari."%")
    ->paginate();

        // mengirim data pegawai ke view index
    return redirect('/Keuangan');
    }

    public function download_pemasukan() {
        $data_detail = detail::all();
        $data_kegiatan = kegiatan::all();
        $jumlah_perolehan = detail::select(detail::raw('sum(dana_ekuivalen + dana_perolehan) as total'))->first();
        $pdf = PDF::loadView('PDF.pemasukan',compact('data_detail','jumlah_perolehan','data_kegiatan'));
        return $pdf->download('Laporan Pemasukan.pdf');
    }
   

    
    
    
       
    
    
}
