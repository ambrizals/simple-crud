@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1>Edit {{ $Mahasiswa->Nama }}</h1>
        <!-- jika terjadi error, akan menampilkan pesan -->
        @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
        {!! Form::model($Mahasiswa, ['route' => ['mahasiswa.update', $Mahasiswa->nim], 'method' => 'PUT']) !!}
        <div class="form-group">
            {!! Form::label('nim', 'NIM') !!}
            {!! Form::text('nim', null, ['class' => 'form-control', 'placeholder' => 'masukan nama']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('nama', 'Nama Lengkap') !!}
            {!! Form::text('nama', null, ['class' => 'form-control', 'placeholder' => 'masukan nama']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('jurusan', 'Jurusan') !!}
            {!! Form::text('jurusan', null, ['class' => 'form-control', 'placeholder' => 'masukan nama']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('telepon', 'Telepon') !!}
            {!! Form::text('telepon', null, ['class' => 'form-control', 'placeholder' => 'masukan nama']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('alamat', 'Alamat') !!}
            {!! Form::text('alamat', null, ['class' => 'form-control', 'placeholder' => 'masukan nama']) !!}
        </div>
        {!! Form::submit('Edit Data', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>
@stop