<style>
    #peserta {
      font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    
    #peserta td, #peserta th {
      border: 1px solid #000000;
      padding: 8px;
    }
    
    #peserta tr:nth-child(even){background-color: #f2f2f2;}
    
    #peserta tr:hover {background-color: #ddd;}
    
    #peserta th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #00BFFF;
      color: white;
    }
    </style>
    <center>
        <h1>Laporan Data Peserta </h1>
    </center>

<table class="table" id="peserta">
    <tr>

         <th>Nama Peserta</th>
         <th>Jenis Kelamin</th>
         <th>No Hp</th>
         <th>Alamat</th>
         <th>Nama Kegiatan</th>
         
    </tr>
    @foreach ($data_peserta as $peserta)
        <tr>
            <td>{{$peserta->nama_peserta}}</td>
            <td>{{$peserta->jenis_kelamin}}</td>
            <td>{{$peserta->no_hp}}</td>
            <td>{{$peserta->alamat_peserta}}</td>
            <td>{{$peserta->kegiatan->nama_kegiatan}}</td>
        </tr>
    @endforeach
    <tr>
        <td colspan="5"> Jumlah Peserta</td>
        <td>{{$jumlah_peserta}}</td>
    </tr>
    