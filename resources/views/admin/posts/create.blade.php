@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Create a New Post</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('admin.posts.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                    aria-describedby="titleHelper" placeholder="Title" value="{{ old('title') }}">
                <small id="titleHelper" class="form-text text-muted">Post's title here</small>
            </div>
            <div class="mb-3">
                <label for="cover_img" class="form-label">Cover Image</label>
                <input type="text" class="form-control @error('cover_img') is-invalid @enderror" name="cover_img"
                    id="cover_img" aria-describedby="coverHelper"
                    placeholder="https://gametimers.it/wp-content/uploads/2022/02/naruto-scaled.jpg"
                    {{ old('cover_img') }}>
                <small id="coverHelper" class="form-text text-muted">Post's cover image urls here</small>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control @error('contemt') is-invalid @enderror" name="content" id="content" rows="4">
                {{ old('content') }}
              </textarea>
            </div>
            <button type="submit" class="btn btn-primary">Confirm</button>
        </form>
    </div>
@endsection
