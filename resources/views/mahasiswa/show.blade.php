@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1>Tampilkan Data Pegawai</h1>
        <div class="jumbotron">
            <h2>{{ $Mahasiswa->nama }}</h2>
            <ul>
                <li>NIM : {{ $Mahasiswa->nim }}</li>
                <li>Jurusan : {{ $Mahasiswa->jurusan }}</li>
                <li>Alamat : {{ $Mahasiswa->alamat }}</li>
                <li>Telepon : {{ $Mahasiswa->telepon }}</li>
            </ul>
        </div>
    </div>
</div>
@stop