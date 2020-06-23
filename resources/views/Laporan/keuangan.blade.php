@extends('layouts.layout')
@section('content')
    <br>
      <ul class="left">
        <h1>Laporan Pemasukan </h1>
      </ul>
    <br>
    <div class="container"  id="test">
        <br>
        <div class="row">
            <ul class="right">
            <form class="form-inline my-2 my-lg-0" method="GET" action="/perolehan/cari">
                <input name="cari" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </ul>
            </div>
        
        <table id="table" class="table" ref="content">
          <tr>
               <th>Nama Kegiatan</th>
               <th>Jenis Perolehan</th>
               <th>Tanggal Perolehan</th>
               <th>Dana Ekuivalen</th>
               <th>Dana Perolehan</th>
               <th>Jumlah Dana</th>
               
               
          </tr>
          
             @foreach ($data_detail as $detail)
              <tr>
                  <td>{{$detail->Kegiatan->nama_kegiatan}}</td>
                  <td>{{$detail->jenis_perolehan}}</td>
                  <td>{{$detail->tanggal_perolehan}}</td>
                  <td>@currency($detail->dana_ekuivalen)</td>
                  <td>@currency($detail->dana_perolehan)</td>
                  <td>@currency($detail->dana_ekuivalen + $detail->dana_perolehan)</td>
              </tr>
          
            @endforeach
            
           <tr>
               <td colspan="5"> Total Pemasukan</td>
               <td>@currency($jumlah_perolehan->total)</td>
           </tr>
        </table> 
         <a href="{{action('LaporankeuanganController@download_pemasukan')}}" class="btn">Download PDF</a>
    </div>
    
   

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

@endsection

