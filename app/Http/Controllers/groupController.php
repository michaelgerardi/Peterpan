<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\group_peserta;

class groupController extends Controller
{
    public function index(){
        $data_group = group_peserta::all();
        return view('Group.index',compact('data_group'));
    }

    public function create(Request $request){
        \App\group_peserta::create($request->all());
        return redirect('Group')->with('Sukses','Data Berhasil Ditambahakan');
    }

    public function Vedit($id){
        $data_group = group_peserta::find($id);
        $data=[ 
            'tittle'=> 'Group',
            'data_group'=>$data_group
        ];
        return view('group.edit',$data);
    }
    
    public function editgroup($id,Request $request){
        $data= group_peserta::find($id);
        $data->nama_group_peserta=$request->input('nama_group_peserta');
        $data->save();
        return redirect()->route('indexgroup');
    }

    public function deletegroup($id){
        $data = group_peserta::find($id);
        $data->delete();
        return redirect()->back();
    }
}
