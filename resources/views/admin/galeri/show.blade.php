@extends('layouts.admin')

@section('content')
    <h2>{{ $galeri->title }}</h2>
    <img src="{{ asset('storage/' . $galeri->image_path) }}" alt="{{ $galeri->title }}">
    <a href="{{ route('admin.galeri.index') }}">Back to Gallery</a>
@endsection