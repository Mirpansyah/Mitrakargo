@extends('layouts.app', ['title' => 'Tarif Pengiriman Jakarta Ke Ternate'])
@section('cssDataTab')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
@endsection
@section('content')
<div class="container pt-4">

<h2>Jakata Ke Ternate</h2>
    <table class="table table-bordered" id="table-ternate">
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
            <tr><td>Ternate</td><td>8000</td><td>18-20 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Sofifi</td><td>11000</td><td>18-20 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Jailolo</td><td>11000</td><td>18-20 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Kao</td><td>11000</td><td>18-20 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Tobelo</td><td>11000</td><td>18-20 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Morotai</td><td>16000</td><td>18-20 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Tidore</td><td>10500</td><td>18-20 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Labuha</td><td>15500</td><td>18-20 Hari Sejak keberangkatan</td><td>200 Kg</td><td>Via Laut</td></tr>
<tr><td>Bacan</td><td>15500</td><td>18-20 Hari Sejak keberangkatan</td><td>200 Kg</td><td>Via Laut</td></tr>
<tr><td>Weda</td><td>11500</td><td>18-20 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Subaim</td><td>22500</td><td>18-20 Hari Sejak keberangkatan</td><td>200 Kg</td><td>Via Laut</td></tr>
<tr><td>Maba</td><td>22500</td><td>18-20 Hari Sejak keberangkatan</td><td>200 Kg</td><td>Via Laut</td></tr>
<tr><td>Subaim</td><td>23500</td><td>18-20 Hari Sejak keberangkatan</td><td>200 Kg</td><td>Via Laut</td></tr>
<tr><td>Wasile</td><td>20500</td><td>18-20 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Sanana</td><td>20500</td><td>18-20 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Bobong</td><td>8000</td><td>18-20 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
        </tbody>
      </table>


</div>
@endsection    
@section('jsDataTab')
<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<!-- Menu Toggle Script -->
<script>
$(document).ready( function () {
      $('#table-ternate').DataTable();
  } );
</script>
@endsection

