@extends('layouts.admin')

@section('content')
    <div class="container">
        <img src="{{ $post->cover_img }}" alt="">
        <h2>{{ $post->title }}</h2>
        <div class="content">
            {{ $post->content }}
        </div>
    </div>
@endsection
