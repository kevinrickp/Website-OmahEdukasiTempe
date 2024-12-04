@extends('layouts.admin')

@section('content')
    <h2>Edit Image</h2>
    <form action="{{ route('admin.galeri.update', $galeri->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{ $galeri->title }}" required>
        </div>
        <div>
            <label for="image">Image:</label>
            <input type="file" name="image" id="image">
            <img src="{{ asset('storage/' . $galeri->image_path) }}" alt="{{ $galeri->title }}" width="100">
        </div>
        <button type="submit">Update</button>
    </form>
    <a href="{{ route('admin.galeri.index') }}">Back to Gallery</a>
@endsection