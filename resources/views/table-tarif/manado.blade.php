@extends('layouts.app', ['title' => 'Tarif Pengiriman Jakarta Ke Manado'])
@section('cssDataTab')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
@endsection
@section('content')
<div class="container pt-4">

<h2>Jakata Ke Manado</h2>
    <table class="table table-bordered" id="table-manado">
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
<tr><td>Manado</td><td>8500</td><td>14-16 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Kotamobagu</td><td>11500</td><td>14-16 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Boroko</td><td>12500</td><td>14-16 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Tahuna</td><td>13500</td><td>14-16 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Tondano</td><td>11500</td><td>14-16 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Airmadidi</td><td>12000</td><td>14-16 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Amurang</td><td>11500</td><td>14-16 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Ratahan</td><td>13500</td><td>15-20 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Bitung</td><td>10000</td><td>14-16 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Tomohon</td><td>10500</td><td>14-16 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
        </tbody>
      </table>


</div>
@endsection    
@section('jsDataTab')
<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<!-- Menu Toggle Script -->
<script>
$(document).ready( function () {
      $('#table-manado').DataTable();
  } );
</script>
@endsection

