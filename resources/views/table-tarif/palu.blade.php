@extends('layouts.app', ['title' => 'Tarif Pengiriman Jakarta Ke Palu'])
@section('cssDataTab')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
@endsection
@section('content')
<div class="container pt-4">

<h2>Jakata Ke Palu</h2>
    <table class="table table-bordered" id="table-palu">
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
        <tr><td>Palu</td><td>7500</td><td>10 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
        <tr><td>Luwuk banggai</td><td>10000</td><td>14 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
        <tr><td>Banggai</td><td>15500</td><td>14 Hari Sejak keberangkatan</td><td>150 Kg</td><td>Via Laut</td></tr>
        <tr><td>Buol</td><td>9500</td><td>14 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
        <tr><td>Banawa</td><td>8500</td><td>14 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
        <tr><td>Bungku</td><td>10500</td><td>14 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
        <tr><td>Parigi</td><td>9500</td><td>14 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
        <tr><td>Poso</td><td>9500</td><td>10 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
        <tr><td>Ampana</td><td>9500</td><td>14 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
        <tr><td>Tolitoli</td><td>9500</td><td>14 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
        </tbody>
      </table>


</div>
@endsection    
@section('jsDataTab')
<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<!-- Menu Toggle Script -->
<script>
$(document).ready( function () {
      $('#table-palu').DataTable();
  } );
</script>
@endsection

