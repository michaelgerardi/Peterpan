<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\peserta;
use App\kegiatan;
use DB;
use PDF;
class pesertaController extends Controller
{
    public function index(Request $request){
        $data_peserta = peserta::all();
        $data_kegiatan = kegiatan::all();
        $jumlah_peserta  = DB::table('peserta')->count();
        return view('Peserta.index',compact('data_peserta','data_kegiatan','jumlah_peserta'));
    }

    public function create(Request $request){
        \App\peserta::create($request->all());
        return redirect('Peserta')->with('Suskes','data berhasil ditambahaka');
    }

    public function vedit($id){
        $data_peserta = peserta::find($id);
        $data=[
            'title'=>'Peserta',
            'data_peserta'=>$data_peserta
        ];
        return view('peserta.edit',$data);
    }

    public function editpeserta($id, Request $request){
        $data = peserta::find($id);
        $data->nama_peserta= $request->input('nama_peserta');
        $data->jenis_kelamin = $request->input('jenis_kelamin');
        $data->no_hp = $request->input('no_hp');
        $data->alamat_peserta = $request->input('alamat_peserta');
        $data->save();
        return redirect()->route('indexpeserta');
    }

    public function deletepeserta($id){
        $data = peserta::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function export_peserta() {
        $data_peserta = peserta::all();
        $data_kegiatan = kegiatan::all();
        $jumlah_peserta  = DB::table('peserta')->count();
        $pdf = PDF::loadView('PDF.peserta',compact('data_peserta','data_kegiatan','jumlah_peserta'));
        return $pdf->download('Laporan peserta.pdf');
    }
}
