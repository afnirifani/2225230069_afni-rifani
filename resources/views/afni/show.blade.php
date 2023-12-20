@extends('afni.layout')
@section('content')

<div class="card">
    <div class="card-header"><h2>Tampil Data Observasi Mahasiswa</h2></div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Nama  : {{ $afni->nama }}</h5>
            <h5 class="card-title">NIM   : {{ $afni->nim }}</h5>
            <h5 class="card-title">Kelas : {{ $afni->kelas }}</h5>
            <h5 class="card-title">Kelompok : {{ $afni->kelompok }}</h5>
            <h5 class="card-title">Sekolah Tujuan : {{ $afni->lokasiobser }}</h5>

        </div>
    </div>