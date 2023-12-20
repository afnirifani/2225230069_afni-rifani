@extends('afni.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Silahkan Isi Data Dibawah Ini</div>
  <div class="card-body">
      
      <form action="{{ url('afni') }}" method="post">
        {!! csrf_field() !!}
        <label>Nama</label></br>
        <input type="text" name="nama" id="nama" class="form-control"></br>
        <label>NIM</label></br>
        <input type="text" name="nim" id="nim" class="form-control"></br>
        <label>Kelas</label></br>
        <input type="text" name="kelas" id="kelas" class="form-control"></br>
        <label>Kelompok</label></br>
        <input type="text" name="kelompok" id="kelompok" class="form-control"></br>
        <label>Sekolah Tujuan</label></br>
        <input type="text" name="lokasiobser" id="lokasiobser" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop