@extends('layouts.app', ['title' => 'Tarif Pengiriman Jakarta Ke Batam'])
@section('cssDataTab')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
@endsection
@section('content')
<div class="container pt-4">

<h2>Jakata Ke Batam</h2>
    <table class="table table-bordered" id="table-batam">
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
            <tr><td>Batam</td><td>5500</td><td>8-10 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
            <tr><td>Tanjung Pinang</td><td>7500</td><td>11-14 Hari Sejak keberangkatan</td><td>150 Kg</td><td>Via Laut</td></tr>
            <tr><td>Tanjung Balai Karimun</td><td>10500</td><td>11-14 Hari Sejak keberangkatan</td><td>300 Kg</td><td>Via Laut</td></tr>
            <tr><td>Bandar Seri Bintan</td><td>9500</td><td>11-14 Hari Sejak keberangkatan</td><td>150 Kg</td><td>Via Laut</td></tr>
            <tr><td>Daik</td><td>15500</td><td>11-14 Hari Sejak keberangkatan</td><td>300 Kg</td><td>Via Laut</td></tr>
            <tr><td>Ranai</td><td>12500</td><td>11-14 Hari Sejak keberangkatan</td><td>250 Kg</td><td>Via Laut</td></tr>
        </tbody>
      </table>


</div>
@endsection    
@section('jsDataTab')
<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<!-- Menu Toggle Script -->
<script>
$(document).ready( function () {
      $('#table-batam').DataTable();
  } );
</script>
@endsection
