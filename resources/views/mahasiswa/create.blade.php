@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1>Tambah Mahasiswa</h1>
        @if ($errors->any())
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        @endif
        
        {!! Form::open(['url'=>'mahasiswa']) !!}
        <div class="form-group">
            {!! Form::label('nim', 'NIM') !!}
            {!! Form::text('nim', null, ['class' => 'form-control', 'placeholder' => 'masukan nim']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('nama', 'Nama Lengkap') !!}
            {!! Form::text('nama', null, ['class' => 'form-control', 'placeholder' => 'masukan nama']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('jurusan', 'Jurusan') !!}
            {!! Form::text('jurusan', null, ['class' => 'form-control', 'placeholder' => 'masukan jurusan']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('telepon', 'Telepon') !!}
            {!! Form::text('telepon', null, ['class' => 'form-control', 'placeholder' => 'masukan telepon']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('alamat', 'Alamat') !!}
            {!! Form::text('alamat', null, ['class' => 'form-control', 'placeholder' => 'masukan alamat']) !!}
        </div>
        {!! Form::submit('Tambah Mahasiswa', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>
@stop