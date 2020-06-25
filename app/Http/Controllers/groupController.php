<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\group;

class groupController extends Controller
{
    public function index(){
        $data_group = group::all();
        return view('Group.index',compact('data_group'));
    }

    public function create(Request $request){
        \App\group::create($request->all());
        return redirect('Group')->with('Sukses','Data Berhasil Ditambahakan');
    }

    public function Vedit($id){
        $data_group = group::find($id);
        $data=[ 
            'tittle'=> 'Group',
            'data_group'=>$data_group
        ];
        return view('group.edit',$data);
    }
    
    public function editgroup($id,Request $request){
        $data= group::find($id);
        $data->asal_donatur=$request->input('asal_donatur');
        $data->save();
        return redirect()->route('indexgroup');
    }

    public function deletegroup($id){
        $data = group::find($id);
        $data->delete();
        return redirect()->back();
    }
}
