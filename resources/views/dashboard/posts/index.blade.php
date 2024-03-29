@extends('dashboard.layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">My Posts</h1>
        </div>

        <div class="table-responsive small">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Category</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->category->nama }}</td>
                            <td class="">
                                <a href="/dashboard/posts/{{ $post->slug }}" class="bg-info text-dark">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <a href="" class="bg-warning text-dark">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <a href="" class="bg-danger text-white">
                                    <i class="bi bi-x-circle"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </main>
@endsection
