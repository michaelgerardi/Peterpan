<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kegiatan;
use App\donatur;

class kegiatanController extends Controller
{
    public function index(){
        $data_kegiatan = kegiatan::all();
        $data_donatur = donatur::all();
        return view('Kegiatan.index',compact('data_kegiatan','data_donatur'));
    }

    public function create(Request $request){
        \App\kegiatan::create($request->all());
        return redirect('Kegiatan')->with('Sukses','Data berhasil ditambahkan');
    }

    public function vedit($id){
        $data_kegiatan = kegiatan::find($id);
        $data=[
            'tittle'=>'Kegiatan',
            'data_kegiatan'=>$data_kegiatan
        ];
        return view('kegiatan.edit',$data);
    }

    public function editkegiatan($id, Request $request){
        $data = kegiatan::find($id);
        $data->nama_kegiatan=$request->input('nama_kegiatan');
        $data->tempat_kegiatan=$request->input('tempat_kegiatan');
        $data->tanggal_kegiatan=$request->input('tanggal_kegiatan');
        $data->jenis_kegiatan=$request->input('jenis_kegiatan');
        $data->jumlah_peserta=$request->input('jumlah_peserta');
        $data->save();
        return redirect()->route('indexkegiatan');
    }

    public function deletekegiatan($id){
        $data = kegiatan::find($id);
        $data->delete();
        return redirect()->back();
    }
}
