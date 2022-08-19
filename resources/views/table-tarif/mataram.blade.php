@extends('layouts.app', ['title' => 'Tarif Pengiriman Jakarta Ke Mataram'])
@section('cssDataTab')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
@endsection
@section('content')
<div class="container pt-4">

<h2>Jakata Ke Mataram</h2>
    <table class="table table-bordered" id="table-mataram">
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
            <tr><td>Mataram</td><td>5000</td><td>7 -9 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Woha</td><td>10500</td><td>8-10 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Dompu</td><td>11000</td><td>8-10 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Gerung</td><td>9500</td><td>8-10 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Praya</td><td>9500</td><td>8-10 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Selong</td><td>9500</td><td>8-10 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Sumbawa besar</td><td>10500</td><td>8-10 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Taliwang</td><td>10500</td><td>8-10 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Bima</td><td>9500</td><td>8-10 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
        </tbody>
      </table>


</div>
@endsection    
@section('jsDataTab')
<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<!-- Menu Toggle Script -->
<script>
$(document).ready( function () {
      $('#table-mataram').DataTable();
  } );
</script>
@endsection

