<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\detail;

class detailController extends Controller
{
    public function index(){
        $data_detail = detail::all();
        return view('Detail.index',compact('data_detail'));
    }

    public function create( Request $request){
        \App\detail::create($request->all());
        return redirect('Detail')->with('Sukses','data berhasil ditambahkan');
    }

    public function Vedit($id){
        $data_detail= detail::find($id);
        $data=[
            'tittle'=>'Detail',
            'data_detail'=>$data_detail
        ];
        return view('detail.edit',$data);
    }

    public function editdetail($id,Request $request){
        $data = detail::find($id);
        $data->jenis_perolehan= $request->input('jenis_perolehan');
        $data->tanggal_perolehan=$request->input('tanggal_perolehan');
        $data->nilai_ekuivalen=$request->input('nilai_ekuivalen');
        $data->jumlah_perolehan=$request->input('jumlah_perolehan');
        $data->save();
        return redirect()->route('indexdetail');
    }

    public function deletedetail($id){
        $data = detail::find($id);
        $data->delete();
        return redirect()->back();
    }
}
