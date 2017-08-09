@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1>Arsip Mahasiswa</h1>
        <br/>
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
                        {!! Form::open(['url' => 'mahasiswa/' . $value->nim . '/restore', 'class' => 'pull-left']) !!}
                        {!! Form::hidden('_method', 'DELETE') !!}
                        {!! Form::submit('Kembalikan Data', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>         
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop