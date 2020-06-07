@extends('layout.master')

@section('blog_body')

    <h3 class="card-title">{{ $publication->title }}</h3>
    <p class="card-text">{{ $publication->article }}</p>

@endsection