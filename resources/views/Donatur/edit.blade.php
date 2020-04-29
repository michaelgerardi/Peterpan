@extends('layouts.layout')
@section('judul',' Edit Data Donatur')

@section('content')

<div class="container">
  @if(session('sukses'))
      <div class="alert alert-success" role="alert">
       {{session('sukses')}}
      </div>
  @endif
    <div class="row">
    <form action="{{route('proseseditdonatur',['id'=> $data_donatur->id])}}" method="GET">
        {{csrf_field()}}
     <div class="form-group">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Donatur</label>
                <input name="nama_donatur"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="waktu gaji" value="{{$data_donatur->nama_donatur}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                    <select name="jenis_kelamin_donatur"class="form-control" id="exampleFormControlSelect1">
                      <option value="Laki - laki">Laki - Laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Status</label>
                        <input name="status"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Status" value="{{$data_donatur->status}}">
                     </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Afiliasi</label>
                        <input name="afiliasi"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Afiliasi" value="{{$data_donatur->afiliasi}}">
                     </div>
                       <div class="form-group">
                          <label for="exampleInputEmail1">No Rekening</label>
                          <input name="no_rekening"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Rekening" value="{{$data_donatur->no_rekening}}">
                       </div>
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Alamat</label>
                        <textarea name="alamat_donatur"class="form-control" id="exampleFormControlTextarea1" rows="3" value="{{$data_donatur->alamat_donatur}}"></textarea>
                      </div>
     <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

@endsection