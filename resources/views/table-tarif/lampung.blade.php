@extends('layouts.app', ['title' => 'Tarif Pengiriman Jakarta Ke Lampung'])
@section('cssDataTab')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
@endsection
@section('content')
<div class="container pt-4">


<h2>Jakata Ke Lampung</h2>
    <table class="table table-bordered" id="table-lampung">
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
        <tr><td>Bandar Lampung</td><td>4000</td><td>3-4 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Liwa</td><td>7500</td><td>3-5 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Kalianda</td><td>7000</td><td>3-5 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Gunung Sugih</td><td>7000</td><td>3-5 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Sukadana</td><td>7000</td><td>3-5 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Kotabumi</td><td>7000</td><td>3-5 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Blambangan umpu</td><td>7000</td><td>3-5 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Kota Agung</td><td>7000</td><td>3-5 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Menggala</td><td>7000</td><td>3-5 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Gedong Tataan</td><td>7000</td><td>3-5 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Metro</td><td>7000</td><td>3-5 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        </tbody>
      </table>

</div>
@endsection    
@section('jsDataTab')
<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<!-- Menu Toggle Script -->
<script>
$(document).ready( function () {
      $('#table-lampung').DataTable();
  } );
</script>
@endsection

    
      
      
      
      
      
      