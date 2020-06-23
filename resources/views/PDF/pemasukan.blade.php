<style>
    #table {
      font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    
    #table td, #table th {
      border: 1px solid #000000;
      padding: 8px;
    }
    
    #table tr:nth-child(even){background-color: #f2f2f2;}
    
    #table tr:hover {background-color: #ddd;}
    
    #table th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #00BFFF;
      color: white;
    }
    </style>
<h1>Laporan Pemasukan </h1>
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