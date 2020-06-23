@extends('layouts.layout')
@section('content')
<div class="panel">
    <div id="container">

    </div>
</div>
<script src="https://code.highcharts.com/highcharts.js"></script> 
<script>
    Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Laporan Jenis Perolehan'
    },
    xAxis: {
        categories: {!!json_encode($jenis_pemasukan)!!},
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Perolehan'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Ketogori Pemasukan',
        data: {!!json_encode($pemasukan)!!}

    }]
});
</script>

@endsection