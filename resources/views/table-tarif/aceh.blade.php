@extends('layouts.app', ['title' => 'Tarif Pengiriman Jakarta Ke Aceh'])
@section('cssDataTab')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
@endsection
@section('content')
<div class="container pt-4">
<h2>Jakata Ke Aceh</h2>
    <table class="table table-bordered" id="table-aceh">
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
         <tr><td>Banda Aceh</td><td>5500</td><td>8- 10 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Meulaboh</td><td>8500</td><td>10-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Blangpidie</td><td>8500</td><td>10-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Jantho</td><td>8000</td><td>10-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Krueng Sabee</td><td>8500</td><td>10-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Tapak Tuan</td><td>8500</td><td>10-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Singkil</td><td>8000</td><td>10-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Kuala Simpang</td><td>7500</td><td>10-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Takengon</td><td>8500</td><td>10-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Kutacane</td><td>8500</td><td>10-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Idi Rayeuk</td><td>7500</td><td>10-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Lhoksukon</td><td>7500</td><td>10-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Simpang Tiga Redelon</td><td>8500</td><td>10-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Bireuen</td><td>7500</td><td>10-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Blang Kejeren</td><td>8500</td><td>10-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Suka Makmue</td><td>8500</td><td>10-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Sigli</td><td>7500</td><td>10-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Meureudu</td><td>7500</td><td>10-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Sinabang</td><td>9500</td><td>10-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Langsa</td><td>7500</td><td>10-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Lhokseumawe</td><td>7500</td><td>10-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Sabang</td><td>9500</td><td>10-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Subulussalam</td><td>8000</td><td>10-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        </tbody>
      </table>
      </div>
@endsection    
@section('jsDataTab')
<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<!-- Menu Toggle Script -->
<script>
$(document).ready( function () {
      $('#table-aceh').DataTable();
  } );
</script>
@endsection
    
      
      
      
      
      
      