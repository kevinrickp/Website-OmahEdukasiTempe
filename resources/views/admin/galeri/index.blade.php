@extends('layouts.admin')

@section('content')
    <h2>Galeri Dokumentasi</h2>
    <div class="galeri-grid">
        @foreach($galeris as $galeri)
            <div class="galeri-item">
                <img src="{{ asset('storage/' . $galeri->image_path) }}" alt="{{ $galeri->title }}">
                <h3>{{ $galeri->title }}</h3>
                <form action="{{ route('admin.galeri.destroy', $galeri->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
                <a href="{{ route('admin.galeri.edit', $galeri->id) }}">Edit</a>
            </div>
        @endforeach
    </div>
    <a href="{{ route('admin.galeri.create') }}" class="btn btn-primary">Add New Image</a>
@endsection