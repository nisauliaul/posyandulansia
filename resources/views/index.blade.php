@extends('layouts.master')
@section('title', 'Posyandu Lansia')
@section('content')
<div class="section-body">
</div>
<div class="panel">
    <div id="chartLansia"></div>
</div>

@endsection

@push('page-scripts')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
  Highcharts.chart('chartLansia', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Data Lansia di Posyandu Lansia Bugar'
    },
    xAxis: {
        categories: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah Lansia'
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
        name: 'Umur 60-69',
        data: [17, 15, 15, 16, 17, 18, 19, 15, 17, 16, 15, 19]

    }, {
        name: 'Umur >70',
        data: [15, 12, 14, 8, 12, 10, 10, 8, 10, 14, 12, 10]

    }]
});
</script>
@endpush