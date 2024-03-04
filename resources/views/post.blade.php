@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post->title }}</h2>
        <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> | <a
                href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->nama }}</a>
        </p>
        {!! $post->body !!}
    </article>

    <a href="/posts" class="dispplay-blok mt-3">Back to Posts</a>
@endsection
