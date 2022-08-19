@extends('layouts.app', ['title' => 'Tarif Pengiriman Jakarta Ke Jawa Barat'])
@section('cssDataTab')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
@endsection
@section('content')
<div class="container pt-4">
    <div class="divider-2"></div><!-- divider -->
    <h1>Tarif Pengiriman Jakarta ke Jawa Barat</h1>
    <div class="divider-2"></div><!-- divider -->
    <table class="table table-bordered" id="table-jabar">
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
            <tr><td>Bandung</td><td>3000</td><td>2-4 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
            <tr><td>Cikarang</td><td>3500</td><td>2-4 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
            <tr><td>Cibinong</td><td>3500</td><td>2-4 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
            <tr><td>Sukabumi</td><td>3500</td><td>2-4 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
            <tr><td>Cianjur</td><td>3500</td><td>2-4 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
            <tr><td>Sukabumi</td><td>3500</td><td>2-4 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
            <tr><td>Sumber</td><td>3500</td><td>2-4 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
            <tr><td>Indramayu</td><td>4500</td><td>2-4 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
            <tr><td>Kuningan</td><td>4500</td><td>2-4 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
            <tr><td>Majalengka</td><td>4500</td><td>2-4 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
            <tr><td>Cirebon</td><td>4500</td><td>2-4 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
            <tr><td>Karawang</td><td>4500</td><td>2-4 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
            <tr><td>Purwakarta</td><td>4500</td><td>2-4 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
            <tr><td>Subang</td><td>5500</td><td>2-4 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
            <tr><td>Soreang</td><td>4500</td><td>2-4 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
            <tr><td>Ngamprah</td><td>4500</td><td>2-4 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
            <tr><td>Sumedang</td><td>5500</td><td>2-4 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
            <tr><td>Singaparna</td><td>4500</td><td>2-4 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
            <tr><td>Tasikmalaya</td><td>4500</td><td>2-4 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
            <tr><td>Garut</td><td>6500</td><td>2-4 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
            <tr><td>Ciamis</td><td>3500</td><td>2-4 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
            <tr><td>Cimahi</td><td>3500</td><td>2-4 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
            <tr><td>Banjar</td><td>3500</td><td>2-4 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
            <tr><td>Bekasi</td><td>3500</td><td>1-2 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
            <tr><td>Bogor</td><td>3500</td><td>1-2 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
            <tr><td>Depok</td><td>3500</td><td>1-2 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        </tbody>
      </table>
    

</div>
@endsection    

@section('jsDataTab')
<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<!-- Menu Toggle Script -->
<script>
$(document).ready( function () {
      $('#table-jabar').DataTable();
  } );
</script>
@endsection 
    
      
      
      
      
      
      