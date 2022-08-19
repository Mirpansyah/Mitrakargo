@extends('layouts.app', ['title' => 'Tarif Pengiriman Jakarta Ke Pangkal Pinang'])
@section('cssDataTab')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
@endsection
@section('content')
<div class="container pt-4">

<h2>Jakata Ke Pangkal Pinang</h2>
    <table class="table table-bordered" id="table-pangkalpinang">
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
            <tr><td>Pangkal Pinang</td><td>5500</td><td>6 hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
            <tr><td>Sungailiat</td><td>9500</td><td>7-9 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
            <tr><td>Kelapa</td><td>10500</td><td>7-9 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
            <tr><td>Koba</td><td>10500</td><td>7-9 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
            <tr><td>Toboali</td><td>10500</td><td>7-9 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
            <tr><td>Tanjung Pandan</td><td>6500</td><td>7-9 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
            <tr><td>Manggar</td><td>8500</td><td>7-9 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
        </tbody>
      </table>


</div>
@endsection    
@section('jsDataTab')
<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<!-- Menu Toggle Script -->
<script>
$(document).ready( function () {
      $('#table-pangkalpinang').DataTable();
  } );
</script>
@endsection

