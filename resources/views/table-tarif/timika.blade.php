@extends('layouts.app', ['title' => 'Tarif Pengiriman Jakarta Ke Timika'])
@section('cssDataTab')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
@endsection
@section('content')
<div class="container pt-4">

<h2>Jakata Ke Timika</h2>
    <table class="table table-bordered" id="table-timika">
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
            <tr><td>Timika</td><td>10000</td><td>20-27 Hari Sejak keberangkatan</td><td>150 Kg</td><td>Via Laut</td></tr>
<tr><td>Sorong</td><td>9500</td><td>20-27 Hari Sejak keberangkatan</td><td>150 Kg</td><td>Via Laut</td></tr>
<tr><td>Fak-Fak</td><td>9500</td><td>20-27 Hari Sejak keberangkatan</td><td>150 Kg</td><td>Via Laut</td></tr>
<tr><td>Kaimana</td><td>16500</td><td>20-27 Hari Sejak keberangkatan</td><td>150 Kg</td><td>Via Laut</td></tr>
<tr><td>Waisai</td><td>Call</td><td>20-27 Hari Sejak keberangkatan</td><td>150 Kg</td><td>Via Laut</td></tr>
<tr><td>Abun</td><td>Call</td><td>20-27 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Teminabuan</td><td>Call</td><td>20-27 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Bintuni</td><td>Call</td><td>20-27 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Rasei</td><td>Call</td><td>20-27 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Nabire</td><td>9500</td><td>20-27 Hari Sejak keberangkatan</td><td>150 Kg</td><td>Via Laut</td></tr>
<tr><td>Enarotari</td><td>Call</td><td>20-27 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
        </tbody>
      </table>


</div>
@endsection    
@section('jsDataTab')
<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<!-- Menu Toggle Script -->
<script>
$(document).ready( function () {
      $('#table-timika').DataTable();
  } );
</script>
@endsection

