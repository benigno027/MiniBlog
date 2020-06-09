@extends('layouts.master')

@section('blog_body')

    <h3 class="card-title">{{ $publication->title }} <br> </h3>
    <small>{{ $publication->category->name }}</small>
    
    <p class="card-text">{{ $publication->article }}</p>

@endsection