<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\peserta;
class pesertaController extends Controller
{
    public function index(){
        $data_peserta = peserta::all();
        return view('Peserta.index',compact('data_peserta'));
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
}
