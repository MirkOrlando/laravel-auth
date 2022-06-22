@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="top mb-2 d-flex justify-content-between align-items-center">
            <h1>All Posts</h1>
            <div class="action">
                <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">New Post</a>
            </div>
        </div>
        <table class="table table-striped table-inverse table-responsive">
            <thead class="thead-inverse">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Crated At</th>
                    <th>Cover Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($posts as $post)
                    <tr>
                        <td scope="row">{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->slug }}</td>
                        <td>{{ $post->created_at->format('d/m/Y') }}</td>
                        <td><img width="100px" src="{{ $post->cover_img }}" alt="cover img {{ $post->title }}"></td>
                        <td>
                            <a href="{{ route('admin.posts.show', $post->slug) }}" class="btn btn-primary btn-sm">View</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td scope="row">
                            <p>No posts to show yet. Create your first post!</p>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>
@endsection
