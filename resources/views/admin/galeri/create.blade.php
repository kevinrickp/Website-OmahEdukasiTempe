@extends('layouts.admin ')

@section('content')
    <h2>Add New Image</h2>
    <form action="{{ route('admin.galeri.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" required>
        </div>
        <div>
            <label for="image">Image:</label>
            <input type="file" name="image" id="image" required>
        </div>
        <button type="submit">Submit</button>
    </form>
    <a href="{{ route('admin.galeri.index') }}">Back to Gallery</a>
@endsection