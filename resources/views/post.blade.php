@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>{{ $post->title }}</h2>
                <p>By. <a href="/authors/{{ $post->author->username }}"
                        class="text-decoration-none">{{ $post->author->name }}</a> | <a
                        href="/categories/{{ $post->category->slug }}"
                        class="text-decoration-none">{{ $post->category->nama }}</a>
                </p>

                <img src="https://source.unsplash.com/1200x500/?{{ $post->category->nama }}" alt="{{ $post->category->nama }}"
                    class="img-fluid" />

                <article class="my-3 fs-6">
                    {!! $post->body !!}

                </article>
                </article>

                <a href="/posts" class="d-block mt-3">Back to Posts</a>
            </div>
        </div>
    </div>

    <article>
    @endsection
