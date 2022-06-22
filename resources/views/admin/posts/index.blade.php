@extends('layouts.admin')

@section('content')
    <div class="container">
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
                        <td>View - Edit - Delete</td>
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
