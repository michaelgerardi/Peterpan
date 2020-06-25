<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\donatur;
use App\group;

class donaturController extends Controller
{
    public function index(){
        $data_donatur = donatur::all();
        $data_group = group::all();
        return view('Donatur.index',compact('data_donatur','data_group'));
    }

    public function create(Request $request){
        \App\donatur::create($request->all());
        return redirect('Donatur')->with('Sukses','data berhasil ditambahakan');
    }

    public function Vedit($id){
        $data_donatur = donatur::find($id);
        $data=[ 
            'tittle'=> 'Donatur',
            'data_donatur'=>$data_donatur
        ];
        return view('donatur.edit',$data);
    }
    public function editdonatur($id, Request $request){
        $data = donatur::find($id);
        $data->nama_donatur=$request->input('nama_donatur');
        $data->jenis_kelamin_donatur=$request->input('jenis_kelamin_donatur');
        $data->status=$request->input('status');
        $data->afiliasi=$request->input('afiliasi');
        $data->no_rekening=$request->input('no_rekening');
        $data->alamat_donatur=$request->input('alamat_donatur');
        $data->save();
        return redirect()->route('indexdonatur');
    }

    public function deletedonatur($id){
        $data = donatur::find($id);
        $data->delete();
        return redirect()->back();
    }
}
