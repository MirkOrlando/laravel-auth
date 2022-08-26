@extends('layouts.admin')

@section('content')
    <div class="container">
        <div style="max-height: 50vh">
            <img class="img_jumbo" style="width: 100%; max-height: 50vh; object-fit:cover" class="mb-3 shadow-lg"
                src="{{ asset('/storage/' . $post->cover_img) }}" alt="">
        </div>
        <h2 class="pt-3">{{ $post->title }}</h2>
        <div class="content">
            {{ $post->content }}
        </div>
    </div>
@endsection
