@extends('layouts.main')

@section('container')
<h1>INI ABOUT</h1>
<h3>{{ $name }}</h3>
<p>{{ $email }}</p>
<img src="img/{{ $image }}" alt="Placeholder Image">
@endsection