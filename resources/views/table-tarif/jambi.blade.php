@extends('layouts.app', ['title' => 'Tarif Pengiriman Jakarta Ke Jambi'])
@section('cssDataTab')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
@endsection
@section('content')
<div class="container pt-4">


<h2>Jakata Ke Jambi</h2>
    <table class="table table-bordered" id="table-jambi">
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
        <tr><td>Jambi</td><td>4500</td><td>4-5 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Muara Bulian</td><td>7500</td><td>5-7 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Muara Bungo</td><td>7500</td><td>5-7 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Sungai Penuh</td><td>12500</td><td>5-7 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Bangko</td><td>8000</td><td>5-7 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Sengeti</td><td>7500</td><td>5-7 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Sarolangun</td><td>7500</td><td>5-7 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Muarasabak</td><td>8000</td><td>5-7 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Kualatungkal</td><td>8000</td><td>5-7 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Muara Tebo</td><td>8000</td><td>5-7 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        

        </tbody>
      </table>

</div>
@endsection    
@section('jsDataTab')
<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<!-- Menu Toggle Script -->
<script>
$(document).ready( function () {
      $('#table-jambi').DataTable();
  } );
</script>
@endsection

    
      
      
      
      
      
      