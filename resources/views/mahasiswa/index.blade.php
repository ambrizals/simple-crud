@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1>Daftar Mahasiswa</h1>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ URL('mahasiswa/create') }}" class="btn btn-primary">Tambah Mahasiswa</a>
            </div>
        </div>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <td>NIM</td>
                    <td>Nama</td>
                    <td>Jurusan</td>
                    <td>Alamat</td>
                    <td>Telepon</td>
                    <td>Aksi</td>
                </tr>
            </thead>
            <tbody>
            @foreach($Mahasiswa as $key => $value)
                <tr>
                    <td>{{ $value->nim  }}</td>
                    <td>{{ $value->nama }}</td>
                    <td>{{ $value->jurusan }}</td>
                    <td>{{ $value->alamat }}</td>
                    <td>{{ $value->telepon }}</td>
                    <td>
                        <a href="{{ URL('mahasiswa/'. $value->nim) }}" class="btn btn-default">Tampilkan Data</a>
                        <a href="{{ URL('mahasiswa/'. $value->nim). '/edit' }}" class="btn btn-primary">Ubah Data</a>
                        {!! Form::open(['url' => 'mahasiswa/' . $value->nim, 'class' => 'pull-right']) !!}
                        {!! Form::hidden('_method', 'DELETE') !!}
                        {!! Form::submit('Hapus Data', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>         
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop