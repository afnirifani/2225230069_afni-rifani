@extends('afni.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Perbaiki Data</div>
  <div class="card-body">
      
      <form action="{{ url('afni/' .$afni->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$afni->id}}" id="id" />
        <label>Nama</label></br>
        <input type="text" name="name" id="name" value="{{$afni->nama}}" class="form-control"></br>
        <label>NIM</label>
        <input type="text" name="nim" id="nim" value="{{$afni->nim}}" class="form-control"></br>
        <label>Kelas</label>
        <input type="text" name="kelas" id="kelas" value="{{$afni->kelas}}" class="form-control"></br>
        <label>Kelompok</label>
        <input type="text" name="kelompok" id="kelompok" value="{{$afni->kelompok}}" class="form-control"></br>
        <label>Sekolah Tujuan</label>
        <input type="text" name="lokasiobser" id="lokasiobser" value="{{$afni->lokasiobser}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop