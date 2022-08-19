@extends('layouts.app', ['title' => 'Tarif Pengiriman Jakarta Ke Sumatera Utara'])
@section('cssDataTab')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
@endsection
@section('content')
<div class="container pt-4">

<h2>Jakata Ke Sumatera Utara</h2>
    <table class="table table-bordered" id="table-sumut">
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
          
        <tr><td>Medan</td><td>4500</td><td>5-6 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Kisaran</td><td>8500</td><td>8-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Limapuluh</td><td>9000</td><td>8-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Sidikalang</td><td>9500</td><td>8-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Sumbul</td><td>9500</td><td>8-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Lubuk Pakam</td><td>7500</td><td>8-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Tanjung Morawa</td><td>7500</td><td>8-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Batang Kuis</td><td>7500</td><td>8-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Percut Sei Tuan</td><td>7500</td><td>8-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Deli Tua</td><td>7500</td><td>8-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Pancur Batu</td><td>7500</td><td>8-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Patumbak</td><td>7500</td><td>8-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Bandar Baru</td><td>8500</td><td>8-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Dolok Sangggul</td><td>9000</td><td>8-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Kabanjahe</td><td>9000</td><td>8-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Berastagi</td><td>9000</td><td>8-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Tigapanah</td><td>9500</td><td>8-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Merek</td><td>9500</td><td>8-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Rantau Prapat</td><td>9000</td><td>8-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Tandem</td><td>9000</td><td>8-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Stabat</td><td>9000</td><td>8-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Pangkalan Brandan</td><td>9000</td><td>8-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Pangkalan Susu</td><td>11000</td><td>8-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Panyabungan</td><td>12500</td><td>8-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Gunung Sitoli</td><td>12500</td><td>8-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Teluk Dalam</td><td>13000</td><td>8-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Sibuhuan</td><td>11000</td><td>8-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Gunung Tua</td><td>11000</td><td>8-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Salak</td><td>11000</td><td>8-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Pangururan</td><td>11000</td><td>8-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Sei Rampah</td><td>9500</td><td>8-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Pematangsiantar</td><td>9500</td><td>8-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Padang Sidempuan</td><td>10000</td><td>8-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Sibolga</td><td>10500</td><td>8-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Tarutung</td><td>10500</td><td>8-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Balige</td><td>9500</td><td>8-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Binjai</td><td>7500</td><td>8-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Belawan</td><td>7000</td><td>6-7 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Marelan</td><td>7000</td><td>6-7 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Tembung</td><td>7000</td><td>6-7 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Tuntungan</td><td>7500</td><td>6-7 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Padang Sidempuan</td><td>10000</td><td>8-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Pematangsiantar</td><td>10000</td><td>8-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Sibolga</td><td>11000</td><td>8-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Tanjung Balai</td><td>10000</td><td>8-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>
        <tr><td>Tebing Tinggi</td><td>10000</td><td>8-12 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Darat</td></tr>

        </tbody>
      </table>


</div>
@endsection    
@section('jsDataTab')
<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<!-- Menu Toggle Script -->
<script>
$(document).ready( function () {
      $('#table-sumut').DataTable();
  } );
</script>
@endsection

    
      
      
      
      
      
      