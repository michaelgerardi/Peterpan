@extends('layouts.layout')
@section('content')
<br>
      <ul class="left">
        <h1>Data Donatur</h1>
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
             </ul>
        </div>
        <br>
        <table class="table">
          <tr>
               <th>ID Donatur</th>
               <th>Nama Donatur</th>
               <th>Jenis Kelamin</th>
               <th>Status</th>
               <th>Afiliasi</th>
               <th>No Rekening</th>
               <th>Alamat</th>
               <th>Jenis Donatur</th>
               <th>Edit</th>
               <th>Delete</th>
          </tr>
          @foreach ($data_donatur as $donatur)
              <tr>
                  <td>{{$donatur->id}}</td>
                  <td>{{$donatur->nama_donatur}}</td>
                  <td>{{$donatur->jenis_kelamin_donatur}}</td>
                  <td>{{$donatur->status}}</td>
                  <td>{{$donatur->afiliasi}}</td>
                  <td>{{$donatur->no_rekening}}</td>
                  <td>{{$donatur->alamat_donatur}}</td>
                  <td>{{$donatur->group->asal_donatur}}</td>
                  <td><a href="/editdonatur/{{$donatur->id}}" class="btn btn-warning btn-sm">Edit</a></td>
                 <td><a href="/deletedonatur/{{$donatur->id}}" class="btn btn-danger btn-sm" >Delete</a></td>
              </tr>
          @endforeach
          
    </div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
  <h5 class="modal-title" id="exampleModalLabel">Tambah Data Donatur</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
        <form action="/Donatur/create" method="POST">
          {{csrf_field()}}
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Donatur</label>
            <input name="nama_donatur"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Donatur">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
            <select name="jenis_kelamin_donatur"class="form-control" id="exampleFormControlSelect1">
              <option value="Laki - laki">Laki - Laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Status</label>
            <input name="status"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Status">
         </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Afiliasi</label>
            <input name="afiliasi"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Afiliasi">
         </div>
           <div class="form-group">
              <label for="exampleInputEmail1">No Rekening</label>
              <input name="no_rekening"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Rekening">
           </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Alamat</label>
            <textarea name="alamat_donatur"class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label for="exampleInputPegawai">Pilih Kegiatan</label>
            <select name="group_id" id="exampleInputPegawai">
              @foreach ($data_group as $group)
                <option value={{$group->id}}>{{$group->asal_donatur}}</option>
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
