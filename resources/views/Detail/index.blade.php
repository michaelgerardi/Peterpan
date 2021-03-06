@extends('layouts.layout')
@section('content')
<br>
      <ul class="left">
        <h1>Data Group Peserta</h1>
      </ul>
    <br>
<div class="page-break">
  @if(session('sukses'))
      <div class="alert alert-success" role="alert">
       {{session('sukses')}}
      </div>
  @endif
    <div class="row">
        <div class="col-6">
             <!-- Button trigger modal -->
             <ul class="right">
        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
            Tambah Data
         </button>
         <a href="{{action('detailController@downloadPDF')}}" class="btn">Download PDF</a>
         <br>
             </ul>
        </div>
        <br>
        <table class="table" >
          <tr>
               <th>Nama Kegiatan</th>
               <th>Jenis Perolehan</th>
               <th>Tanggal Perolehan</th>
               <th>Dana Ekuivalen</th>
               <th>Dana Perolehan</th>
               <th>Jumlah Dana</th>
               <th>Edit</th>
               <th>Delete</th>
          </tr>
          @foreach ($data_detail as $detail)
              <tr>
                  <td>{{$detail->Kegiatan->nama_kegiatan}}</td>
                  <td>{{$detail->jenis_perolehan}}</td>
                  <td>{{$detail->tanggal_perolehan}}</td>
                  <td>{{$detail->dana_ekuivalen}}</td>
                  <td>{{$detail->dana_perolehan}}</td>
                  <td>{{$detail->dana_ekuivalen + $detail->dana_perolehan}}</td>
                  <td><a href="/editdetail/{{$detail->id}}" class="btn btn-warning btn-sm">Edit</a></td>
                 <td><a href="/deletedetail/{{$detail->id}}" class="btn btn-danger btn-sm" >Delete</a></td>
              </tr>
          @endforeach

          
          
    </div>
    
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
  <h5 class="modal-title" id="exampleModalLabel">Tambah Data Detail</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
        <form action="/Detail/create" method="POST">
          {{csrf_field()}}
          <div class="form-group">
            <label for="exampleInputPegawai">Pilih Kegiatan</label>
            <select name="kegiatan_id" id="exampleInputPegawai">
              @foreach ($data_kegiatan as $kegiatan)
                <option value={{$kegiatan->id}}>{{$kegiatan->nama_kegiatan}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Jenis Perolehan</label>
            <select name="jenis_perolehan"class="form-control" id="exampleFormControlSelect1">
              <option value="Uang">Uang</option>
              <option value="Barang">Barang</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Tanggal Perolehan</label>
            <input name="tanggal_perolehan"type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Donatur">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Dana Ekuivalen</label>
            <input name="dana_ekuivalen"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Donatur">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Dana Perolehan</label>
            <input name="dana_perolehan"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Afiliasi">
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
