@extends('layouts.app', ['title' => 'Tarif Pengiriman Jakarta Ke Jayapura'])
@section('cssDataTab')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
@endsection
@section('content')
<div class="container pt-4">

<h2>Jakata Ke Jayapura</h2>
    <table class="table table-bordered" id="table-jayapura">
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
            <tr><td>Jayapura</td><td>9500</td><td>20-27 Hari Sejak keberangkatan</td><td>150 Kg</td><td>Via Laut</td></tr>
            <tr><td>Agats</td><td>19000</td><td>20-27 Hari Sejak keberangkatan</td><td>150 Kg</td><td>Via Laut</td></tr>
            <tr><td>Biak</td><td>10500</td><td>20-27 Hari Sejak keberangkatan</td><td>150 Kg</td><td>Via Laut</td></tr>
            <tr><td>Tanah Merah</td><td>Call</td><td>20-27 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
            <tr><td>Demta</td><td>Call</td><td>20-27 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
            <tr><td>Wamena</td><td>Call</td><td>20-27 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
            <tr><td>Waris</td><td>Call</td><td>20-27 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
            <tr><td>Kepi</td><td>Call</td><td>20-27 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
            <tr><td>Merauke</td><td>10000</td><td>20-27 Hari Sejak keberangkatan</td><td>150 Kg</td><td>Via Laut</td></tr>
            <tr><td>Monokwari</td><td>9500</td><td>20-27 Hari Sejak keberangkatan</td><td>150 Kg</td><td>Via Laut</td></tr>
            <tr><td>Oksibil</td><td>Call</td><td>20-27 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
            <tr><td>Mulia</td><td>Call</td><td>20-27 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
            <tr><td>Sarmi</td><td>Call</td><td>20-27 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
            <tr><td>Sorendiweri</td><td>Call</td><td>20-27 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
            <tr><td>Karubaga</td><td>Call</td><td>20-27 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
            <tr><td>Botawa</td><td>Call</td><td>20-27 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
            <tr><td>Sumohai</td><td>Call</td><td>20-27 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
            <tr><td>Serui</td><td>11500</td><td>20-27 Hari Sejak keberangkatan</td><td>150 Kg</td><td>Via Laut</td></tr>
            <tr><td>Burmeso</td><td>Call</td><td>20-27 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
        </tbody>
      </table>


</div>
@endsection    
@section('jsDataTab')
<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<!-- Menu Toggle Script -->
<script>
$(document).ready( function () {
      $('#table-jayapura').DataTable();
  } );
</script>
@endsection

