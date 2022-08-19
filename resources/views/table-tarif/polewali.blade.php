@extends('layouts.app', ['title' => 'Tarif Pengiriman Jakarta Ke Polewali'])
@section('cssDataTab')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
@endsection
@section('content')
<div class="container pt-4">

<h2>Jakata Ke Polewali</h2>
    <table class="table table-bordered" id="table-polewali">
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
            <tr><td>Polewali</td><td>8500</td><td>6-10 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
            <tr><td>Majene</td><td>9000</td><td>6-10 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
            <tr><td>Mamasa</td><td>8000</td><td>6-10 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
            <tr><td>Mamuju</td><td>9500</td><td>6-10 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
            <tr><td>Pasangkayu</td><td>9500</td><td>6-10 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
        </tbody>
      </table>


</div>
@endsection    
@section('jsDataTab')
<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<!-- Menu Toggle Script -->
<script>
$(document).ready( function () {
      $('#table-polewali').DataTable();
  } );
</script>
@endsection

