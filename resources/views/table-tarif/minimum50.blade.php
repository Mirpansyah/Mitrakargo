@extends('layouts.app', ['title' => 'Tarif Pengiriman Via Laut'])
@section('cssDataTab')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
@endsection
@section('content')
<div class="container pt-4">

<h2>Tarif Pengiriman Via Laut</h2>
    <table class="table table-bordered" id="table-laut">
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
           <tr><td>Kendari</td><td>10500</td><td>8-10 Hari Sejak keberangkatan</td><td>50 Kg</td><td>Via Laut</td></tr>
        <tr><td>Kupang</td><td>8000</td><td>12-14 Hari Sejak keberangkatan</td><td>50 Kg</td><td>Via Laut</td></tr>
        <tr><td>Ambon</td><td>11000</td><td>14-18 Hari Sejak keberangkatan</td><td>50 Kg</td><td>Via Laut</td></tr>
        <tr><td>Balik Papan</td><td>8000</td><td>8 Hari Sejak keberangkatan</td><td>50 Kg</td><td>Via Laut</td></tr>
        <tr><td>Banda Aceh</td><td>8000</td><td>8- 10 Hari Sejak keberangkatan</td><td>50 Kg</td><td>Via Darat</td></tr>
        <tr><td>Banjarmasin</td><td>7500</td><td>7-10Hari Sejak keberangkatan</td><td>50 Kg</td><td>Via Laut</td></tr>
        <tr><td>Batam</td><td>8000</td><td>8-10 Hari Sejak keberangkatan</td><td>50 Kg</td><td>Via Laut</td></tr>
        <tr><td>Biak</td><td>13000</td><td>20-27 Hari Sejak keberangkatan</td><td>50 Kg</td><td>Via Laut</td></tr>
        <tr><td>Bengkulu</td><td>8000</td><td>7 Hari Sejak keberangkatan</td><td>50 Kg</td><td>Via Darat</td></tr>
        <tr><td>Tanjung Redep</td><td>13000</td><td>12 Hari Sejak keberangkatan</td><td>50 Kg</td><td>Via Laut</td></tr>
        <tr><td>Denpasar</td><td>7500</td><td>5-6 Hari Sejak keberangkatan</td><td>50 Kg</td><td>Via Laut</td></tr>
        <tr><td>Gorontalo</td><td>10500</td><td>12-14 Hari Sejak keberangkatan</td><td>50 Kg</td><td>Via Laut</td></tr>
        <tr><td>Jambi</td><td>7500</td><td>4-5 Hari Sejak keberangkatan</td><td>50 Kg</td><td>Via Darat</td></tr>
        <tr><td>Jayapura</td><td>12000</td><td>20-27 Hari Sejak keberangkatan</td><td>50 Kg</td><td>Via Laut</td></tr>
        <tr><td>Yogyakarta</td><td>5500</td><td>1-2 Hari Sejak keberangkatan</td><td>50 Kg</td><td>Via Darat</td></tr>
        <tr><td>Makassar</td><td>6000</td><td>6-7 Hari Sejak keberangkatan</td><td>50 Kg</td><td>Via Laut</td></tr>
        <tr><td>Malang</td><td>7500</td><td>2-3 Hari Sejak keberangkatan</td><td>50 Kg</td><td>Via Darat</td></tr>
        <tr><td>Mataram</td><td>7500</td><td>7 -9 Hari Sejak keberangkatan</td><td>50 Kg</td><td>Via Laut</td></tr>
        <tr><td>Medan</td><td>7500</td><td>5-6 Hari Sejak keberangkatan</td><td>50 Kg</td><td>Via Darat</td></tr>
        <tr><td>Manado</td><td>11000</td><td>14-16 Hari Sejak keberangkatan</td><td>50 Kg</td><td>Via Laut</td></tr>
        <tr><td>Merauke</td><td>12500</td><td>20-27 Hari Sejak keberangkatan</td><td>50 Kg</td><td>Via Laut</td></tr>
        <tr><td>Nabire</td><td>12000</td><td>20-27 Hari Sejak keberangkatan</td><td>50 Kg</td><td>Via Laut</td></tr>
        <tr><td>Padang</td><td>7500</td><td>6-7 Hari Sejak keberangkatan</td><td>50 Kg</td><td>Via Darat</td></tr>
        <tr><td>Palangkaraya</td><td>9000</td><td>7-10Hari Sejak keberangkatan</td><td>50 Kg</td><td>Via Laut</td></tr>
        <tr><td>Palembang</td><td>7000</td><td>3-4 hari Sejak keberangkatan</td><td>50 Kg</td><td>Via Darat</td></tr>
        <tr><td>Palu</td><td>10000</td><td>10 Hari Sejak keberangkatan</td><td>50 Kg</td><td>Via Laut</td></tr>
        <tr><td>Pangkal Pinang</td><td>8000</td><td>6 hari Sejak keberangkatan</td><td>50 Kg</td><td>Via Laut</td></tr>
        <tr><td>Pekanbaru kota</td><td>7500</td><td>4 - 5 Hari Sejak keberangkatan</td><td>50 Kg</td><td>Via Darat</td></tr>
        <tr><td>Pontianak</td><td>7000</td><td>6-7Hari Sejak keberangkatan</td><td>50 Kg</td><td>Via Laut</td></tr>
        <tr><td>Semarang</td><td>5500</td><td>1-2 Hari Sejak keberangkatan</td><td>50 Kg</td><td>Via Darat</td></tr>
        <tr><td>Surakarta/Solo</td><td>5500</td><td>1-2 Hari Sejak keberangkatan</td><td>50 Kg</td><td>Via Darat</td></tr>
        <tr><td>Sorong</td><td>12000</td><td>20-27 Hari Sejak keberangkatan</td><td>50 Kg</td><td>Via Laut</td></tr>
        <tr><td>Surabaya</td><td>5500</td><td>1-2 Hari Sejak keberangkatan</td><td>50 Kg</td><td>Via Darat</td></tr>
        <tr><td>Tanjung Pinang</td><td>10000</td><td>11-14 Hari Sejak keberangkatan</td><td>50 Kg</td><td>Via Laut</td></tr>
        <tr><td>Tarakan</td><td>11500</td><td>12 Hari Sejak keberangkatan</td><td>50 Kg</td><td>Via Laut</td></tr>
        <tr><td>Ternate</td><td>10500</td><td>18-20 Hari Sejak keberangkatan</td><td>50 Kg</td><td>Via Laut</td></tr>
        <tr><td>Monokwari</td><td>12000</td><td>20-27 Hari Sejak keberangkatan</td><td>50 Kg</td><td>Via Laut</td></tr>
        <tr><td>Timika</td><td>12500</td><td>20-27 Hari Sejak keberangkatan</td><td>50 Kg</td><td>Via Laut</td></tr>
        <tr><td>Tanjung Pandan</td><td>9000</td><td>7-9 Hari Sejak keberangkatan</td><td>50 Kg</td><td>Via Laut</td></tr>
        <tr><td>Labuan Bajo</td><td>10000</td><td>14-16 Hari Sejak keberangkatan</td><td>50 Kg</td><td>Via Laut</td></tr>


        </tbody>
      </table>


</div>
@endsection    
@section('jsDataTab')
<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<!-- Menu Toggle Script -->
<script>
$(document).ready( function () {
      $('#table-laut').DataTable();
  } );
</script>
@endsection

