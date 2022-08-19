@extends('layouts.app', ['title' => 'Tarif Pengiriman Jakarta Ke Bengkulu'])
@section('cssDataTab')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
@endsection
@section('content')
<div class="container pt-4">

<h2>Jakata Ke Bengkulu</h2>
    <table class="table table-bordered" id="table-bengkulu">
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
          <tr><td>Bengkulu</td><td>5000</td><td>7 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Manna</td><td>8500</td><td>8-10Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Arga Makmur</td><td>8500</td><td>8-10Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Kaur</td><td>8500</td><td>8-10Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Kepahiang</td><td>8500</td><td>8-10Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Lebong</td><td>8500</td><td>8-10Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Muko-muko</td><td>9000</td><td>8-10Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Curup</td><td>8500</td><td>8-10Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Tais</td><td>8500</td><td>8-10Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>

        </tbody>
      </table>


</div>
@endsection    
@section('jsDataTab')
<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<!-- Menu Toggle Script -->
<script>
$(document).ready( function () {
      $('#table-bengkulu').DataTable();
  } );
</script>
@endsection