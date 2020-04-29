@extends('layouts.layout')
@section('judul',' Edit Data Peserta')

@section('content')

<div class="container">
  @if(session('sukses'))
      <div class="alert alert-success" role="alert">
       {{session('sukses')}}
      </div>
  @endif
    <div class="row">
    <form action="{{route('proseseditpeserta',['id'=> $data_peserta->id])}}" method="GET">
        {{csrf_field()}}
     <div class="form-group">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Peserta</label>
                <input name="nama_peserta"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="waktu gaji" value="{{$data_peserta->nama_peserta}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                    <select name="jenis_kelamin"class="form-control" id="exampleFormControlSelect1">
                      <option value="Laki - laki">Laki - Laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                   <div class="form-group">
                      <label for="exampleInputEmail1">No Hp</label>
                      <input name="no_hp"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama" value="{{$data_peserta->no_hp}}">
                   </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Alamat</label>
                  <textarea name="alamat_peserta"class="form-control" id="exampleFormControlTextarea1" rows="3" value="{{$data_peserta->alamat_peserta}}"></textarea>
                  </div>
     <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

@endsection