@extends('adminlte::page')
@section('content')
<div class="container text-center mt-5">
    <h2>Daftar sebagai apa?</h2>
    <div class="mt-4">
        <!-- Arahkan ke form register dengan parameter role -->
        <a href="{{ route('register') }}?role=guru" class="btn btn-primary btn-lg">Saya Guru</a>
        <a href="{{ route('register') }}?role=siswa" class="btn btn-success btn-lg">Saya Siswa</a>
    </div>
</div>
@stop