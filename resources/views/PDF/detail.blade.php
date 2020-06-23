<style>
    #pemasukan {
      font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    
    #pemasukan td, #pemasukan th {
      border: 1px solid #000000;
      padding: 8px;
    }
    
    #pemasukan tr:nth-child(even){background-color: #f2f2f2;}
    
    #pemasukan tr:hover {background-color: #ddd;}
    
    #pemasukan th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #00BFFF;
      color: white;
    }
    </style>
<h1>Laporan Detail Kegiatan</h1>
<table class="table" id="pemasukan" >
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
            <td>{{$detail->dana_ekuivalen}}</td>
            <td>{{$detail->dana_perolehan}}</td>
            <td>{{$detail->dana_ekuivalen + $detail->dana_perolehan}}</td>
        </tr>
    @endforeach
