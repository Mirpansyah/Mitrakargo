@extends('layouts.app', ['title' => 'Tarif Pengiriman Jakarta Ke Kendari'])
@section('cssDataTab')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
@endsection
@section('content')
<div class="container pt-4">

<h2>Jakata Ke Kendari</h2>
    <table class="table table-bordered" id="table-kendari">
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
            <tr><td>Kendari</td><td>8000</td><td>8-10 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Rumbia</td><td>11000</td><td>13-14 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Pasar Wajo</td><td>13500</td><td>13-14 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Kolaka</td><td>10000</td><td>13-14 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Lasusua</td><td>12500</td><td>13-14 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Unaaha</td><td>12500</td><td>13-14 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Wanggodo/Andolo</td><td>12500</td><td>13-14 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Raha</td><td>12500</td><td>13-14 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Wangi-Wangi</td><td>17500</td><td>13-14 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Bau-Bau</td><td>13000</td><td>13-14 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
            
        </tbody>
      </table>


</div>
@endsection    
@section('jsDataTab')
<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<!-- Menu Toggle Script -->
<script>
$(document).ready( function () {
      $('#table-kendari').DataTable();
  } );
</script>
@endsection

