@extends('layouts.app', ['title' => 'Tarif Pengiriman Jakarta Ke Jawa Tengah'])
@section('cssDataTab')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
@endsection
@section('content')
<div class="container pt-4">

<h2>Jakata Ke Jawa Tengah</h2>
    <table class="table table-bordered" id="table-jateng">
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
          <tr><td>Semarang</td><td>3000</td><td>1-2 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Surakarta/Solo</td><td>3000</td><td>1-2 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Tegal</td><td>4500</td><td>2-3 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Banjarnegara</td><td>4500</td><td>2-3 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Batang</td><td>4500</td><td>2-3 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Blora</td><td>4500</td><td>2-3 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Bojonegoro</td><td>4500</td><td>2-3 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Boyolali</td><td>4500</td><td>2-3 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Brebes</td><td>4500</td><td>2-3 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Cilacap</td><td>4500</td><td>2-3 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Demak</td><td>4500</td><td>2-3 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Jepara</td><td>4500</td><td>2-3 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Kajen</td><td>4500</td><td>2-3 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Karanganyar</td><td>4500</td><td>2-3 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Kebumen</td><td>4500</td><td>2-3 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Kendal</td><td>4500</td><td>2-3 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Klaten</td><td>4500</td><td>2-3 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Kudus</td><td>4500</td><td>2-3 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Magelang</td><td>4500</td><td>2-3 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Mungkid</td><td>4500</td><td>2-3 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Pati</td><td>4500</td><td>2-3 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Pekalongan</td><td>4500</td><td>2-3 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Pemalang</td><td>4500</td><td>2-3 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Purbalingga</td><td>4500</td><td>2-3 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Purwokerto</td><td>4500</td><td>2-3 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Purworejo</td><td>4500</td><td>2-3 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Rembang</td><td>4500</td><td>2-3 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Salatiga</td><td>4500</td><td>2-3 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Slawi</td><td>4500</td><td>2-3 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Sragen</td><td>4500</td><td>2-3 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Sukoharjo</td><td>4500</td><td>2-3 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Temanggung</td><td>4500</td><td>2-3 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Ungaran</td><td>4500</td><td>2-3 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Wonogiri</td><td>4500</td><td>2-3 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Wonosalam</td><td>4500</td><td>2-3 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Wonosobo</td><td>4500</td><td>2-3 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Yogyakarta</td><td>3000</td><td>1-2 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Bantul</td><td>4500</td><td>2-3 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Wonosari</td><td>4500</td><td>2-3 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Wates</td><td>4500</td><td>2-3 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Sleman</td><td>4500</td><td>2-3 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>

        </tbody>
      </table>
      


</div>
@endsection    
@section('jsDataTab')
<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<!-- Menu Toggle Script -->
<script>
$(document).ready( function () {
      $('#table-jateng').DataTable();
  } );
</script>
@endsection


    
      
      
      
      
      