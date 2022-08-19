@extends('layouts.app', ['title' => 'Tarif Pengiriman Jakarta Ke Ambon'])
@section('cssDataTab')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
@endsection
@section('content')
<div class="container pt-4">

<h2>Jakata Ke Ambon</h2>
    <table class="table table-bordered" id="table-ambon">
        <thead>
          <tr>
            <th>Tujuan</th>
            <th>Tarif</th>
            <th>Estimasi</th>
            <th>Min Charge</th>
            <th>Layanan</th>
          </tr>
        </thead>
      
        <tbody>
            <tr><td>Ambon</td><td>8500</td><td>14-18 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Namlea</td><td>18000</td><td>14-18 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Dobo</td><td>16500</td><td>14-18 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Masohi</td><td>17500</td><td>14-18 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Tual</td><td>11500</td><td>14-18 Hari Sejak keberangkatan</td><td>200 Kg</td><td>Via Laut</td></tr>
<tr><td>Saumlaki</td><td>21500</td><td>14-18 Hari Sejak keberangkatan</td><td>200 Kg</td><td>Via Laut</td></tr>
<tr><td>Piru</td><td>22500</td><td>14-18 Hari Sejak keberangkatan</td><td>200 Kg</td><td>Via Laut</td></tr>
<tr><td>Dataran Hunimoa</td><td>24500</td><td>14-18 Hari Sejak keberangkatan</td><td>200 Kg</td><td>Via Laut</td></tr>
        </tbody>
      </table>


</div>
@endsection    
@section('jsDataTab')
<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<!-- Menu Toggle Script -->
<script>
$(document).ready( function () {
      $('#table-ambon').DataTable();
  } );
</script>
@endsection

