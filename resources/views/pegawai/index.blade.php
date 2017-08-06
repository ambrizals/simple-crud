@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1>Daftar Pegawai</h1>
        <!-- digunakan untuk menampilkan pesan -->
        @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif
        <div class="row">
            <div class="col-md-4">
                <a href="{{ URL('pegawai/create') }}" class="btn btn-info">Tambah Pegawai</a>
            </div>
        </div>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nama</td>
                    <td>Email</td>
                    <td>Level</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
                @foreach($pegawai as $key => $value)
                <tr>
                    <td>{{ $value->ID }}</td>
                    <td>{{ $value->Nama }}</td>
                    <td>{{ $value->Email }}</td>
                    <td>{{ $value->level }}</td>
                    <!-- untuk menambahkan tombol tampil, edit, dan hapus -->
                    <td>
                        <a class="btn btn-small btn-success" href="{{ URL('pegawai/' . $value->ID) }}">Tampilkan Data</a>
                        <a class="btn btn-small btn-warning" href="{{ URL('pegawai/' . $value->ID . '/edit') }}">Ubah Data</a>
                        {!! Form::open(['url' => 'pegawai/' . $value->ID, 'class' => 'pull-right']) !!}
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