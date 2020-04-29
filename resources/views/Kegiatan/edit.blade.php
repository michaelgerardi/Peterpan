@extends('layouts.layout')
@section('judul',' Edit Data Kegiatan')

@section('content')

<div class="container">
  @if(session('sukses'))
      <div class="alert alert-success" role="alert">
       {{session('sukses')}}
      </div>
  @endif
    <div class="row">
    <form action="{{route('proseseditkegiatan',['id'=> $data_kegiatan->id])}}" method="GET">
        {{csrf_field()}}
     <div class="form-group">
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Kegiatan</label>
            <input name="nama_kegiatan"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Kegiatan" value="{{$data_kegiatan->nama_kegiatan}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Tempat Kegiatan</label>
            <input name="tempat_kegiatan"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tempat Kegiatan" value="{{$data_kegiatan->tempat_kegiatan}}">
         </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Tanggal Kegiatan</label>
            <input name="tanggal_kegiatan"type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data_kegiatan->tanggal_kegiatan}}">
         </div>
           <div class="form-group">
              <label for="exampleInputEmail1">Jenis Kegiatan</label>
              <input name="jenis_kegiatan"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jenis Kegiatan" value="{{$data_kegiatan->jenis_kegiatan}}">
           </div>
           <div class="form-group">
            <label for="exampleInputEmail1">Jumlah Peserta</label>
            <input name="jumlah_peserta"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jumlah Peserta" value="{{$data_kegiatan->jumlah_peserta}}">
         </div>
      </div>
     <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

@endsection