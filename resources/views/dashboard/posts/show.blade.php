@extends('dashboard.layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2>{{ $post->title }}</h2>

                    <a href="/dashboard/posts" class="btn btn-success">
                        <i class="bi bi-arrow-left"></i>Back to All Posts
                    </a>
                    <a href="" class="btn btn-warning">
                        <i class="bi bi-pencil"></i>Edit
                    </a>
                    <a href="" class="btn btn-danger">
                        <i class="bi bi-x-circle"></i>Delete
                    </a>

                    <img src="https://source.unsplash.com/1200x500/?{{ $post->category->nama }}"
                        alt="{{ $post->category->nama }}" class="img-fluid mt-3" />

                    <article class="my-3 fs-6">
                        {!! $post->body !!}
                    </article>
                </div>
            </div>
        </div>
    </main>
@endsection
