@extends('layouts.master')

@section('title', 'About')

@section('main')
    <div class="text-center">
        <h1>Halaman About</h1>
        <h3>{{ $nama }}</h3>
        <p>{{ $email }}</p>
        <img src="images/{{ $gambar }}">
    </div>
@endsection
