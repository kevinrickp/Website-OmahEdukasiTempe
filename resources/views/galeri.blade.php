@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="{{ asset('css/galeri.css') }}">
@endsection

@section('content')
    <h2>Galeri Dokumentasi</h2>
    <div class="galeri-grid">
        @foreach($galeris as $galeri)
            <div class="galeri-item">
                < img src="{{ asset('storage/' . $galeri->image_path) }}" alt="{{ $galeri->title }}">
                <h3>{{ $galeri->title }}</h3>
            </div>
        @endforeach
    </div>
</div>
@endsection