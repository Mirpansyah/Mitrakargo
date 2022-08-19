@extends('layouts.app', ['title' => 'Tarif Pengiriman Jakarta Ke Kupang'])
@section('cssDataTab')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
@endsection
@section('content')
<div class="container pt-4">

<h2>Jakata Ke Kupang</h2>
    <table class="table table-bordered" id="table-kupang">
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
            <tr><td>Kupang</td><td>5500</td><td>12-14 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Kalabahi</td><td>11500</td><td>14-16 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Atambua</td><td>9500</td><td>14-16 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Ende</td><td>7500</td><td>14-16 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Larantuka</td><td>8500</td><td>14-16 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Oelamasi</td><td>6000</td><td>14-16 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Lewoleba</td><td>11500</td><td>14-16 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Ruteng</td><td>8500</td><td>14-16 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Labuan Bajo</td><td>7500</td><td>14-16 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Borong</td><td>9000</td><td>14-16 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Mbay</td><td>10000</td><td>14-16 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Bajawa</td><td>9000</td><td>14-16 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Baa</td><td>10500</td><td>14-16 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Maumere</td><td>8500</td><td>14-16 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Waikabubak</td><td>8500</td><td>14-16 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Tambolaka</td><td>9000</td><td>14-16 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Waibakul</td><td>9000</td><td>14-16 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Waingapu</td><td>8500</td><td>14-16 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Soe</td><td>9000</td><td>14-16 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>
<tr><td>Kafamenanu</td><td>9500</td><td>14-16 Hari Sejak keberangkatan</td><td>100 Kg</td><td>Via Laut</td></tr>

        </tbody>
      </table>


</div>
@endsection    
@section('jsDataTab')
<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<!-- Menu Toggle Script -->
<script>
$(document).ready( function () {
      $('#table-kupang').DataTable();
  } );
</script>
@endsection

