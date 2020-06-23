<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\detail;
use App\kegiatan;
use PDF;

class detailController extends Controller
{
    public function index(){
        $data_detail = detail::all();
        $data_kegiatan= kegiatan::all();
        return view('Detail.index',compact('data_detail','data_kegiatan'));
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
        $data->dana_ekuivalen=$request->input('dana_ekuivalen');
        $data->dana_perolehan=$request->input('dana_perolehan');
        $data->save();
        return redirect()->route('indexdetail');
    }

    public function deletedetail($id){
        $data = detail::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function downloadPDF() {
        $data_detail = detail::all();
        $data_kegiatan= kegiatan::all();
        $pdf = PDF::loadView('PDF.detail',compact('data_detail','data_kegiatan'));
        return $pdf->download('Laporan Detail.pdf');
    }
   
}
