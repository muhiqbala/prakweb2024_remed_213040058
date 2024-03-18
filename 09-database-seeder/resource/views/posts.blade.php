@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Halaman Blog Posts</h1>

    @foreach ($posts as $post)
        <article class="mb-5 border-bottom pb-3">
            <h3><a href="/post/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h3>
            <p>Ditulis oleh <a href="" class="text-decoration-none">{{ $post->user->name }}</a> dalam <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>            
            <p>{{ $post->excerpt }}</p>
            <a href="/post/{{ $post->slug }}" class="text-decoration-none">Baca selengkapnya</a>
        </article>
    @endforeach

@endsection
