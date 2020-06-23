@extends('layouts.layout')
@section('content')
  <br>
      <ul class="left">
        <h1>Data Peserta </h1>
      </ul>
    <br>
<div class="container">
  @if(session('sukses'))
      <div class="alert alert-success" role="alert">
       {{session('sukses')}}
      </div>
  @endif
    <div class="row">
        <div class="col-6">
             <!-- Button trigger modal -->
             <ul class="right">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Tambah Data
             </button>
             <a href="{{action('pesertaController@export_peserta')}}" class="btn">Download PDF</a>
             </ul>
        </div>
        
        <table class="table">
          <tr>

               <th>Nama Peserta</th>
               <th>Jenis Kelamin</th>
               <th>No Hp</th>
               <th>Alamat</th>
               <th>Nama Kegiatan</th>
               <th>Edit</th>
               <th>Delete</th>
               
          </tr>
          @foreach ($data_peserta as $peserta)
              <tr>
                  <td>{{$peserta->nama_peserta}}</td>
                  <td>{{$peserta->jenis_kelamin}}</td>
                  <td>{{$peserta->no_hp}}</td>
                  <td>{{$peserta->alamat_peserta}}</td>
                  <td>{{$peserta->kegiatan->nama_kegiatan}}</td>
                  <td><a href="/editpeserta/{{$peserta->id}}" class="btn btn-warning btn-sm">Edit</a></td>
                 <td><a href="/deletepeserta/{{$peserta->id}}" class="btn btn-danger btn-sm" >Delete</a></td>
              </tr>
          @endforeach
          <tr>
            <td colspan="5"> Jumlah Peserta</td>
            <td>{{$jumlah_peserta}}</td>
        </tr>
        
    </div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
  <h5 class="modal-title" id="exampleModalLabel">Tambah Data Employee</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
        <form action="/Peserta/create" method="POST">
          {{csrf_field()}}
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Peserta</label>
            <input name="nama_peserta"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang">
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
              <input name="no_hp"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama">
           </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Alamat</label>
            <textarea name="alamat_peserta"class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label for="exampleInputPegawai">Pilih Kegiatan</label>
            <select name="kegiatan_id" id="exampleInputPegawai">
              @foreach ($data_kegiatan as $kegiatan)
                <option value={{$kegiatan->id}}>{{$kegiatan->nama_kegiatan}}</option>
              @endforeach
            </select>
          </div>
      </div>
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

@endsection