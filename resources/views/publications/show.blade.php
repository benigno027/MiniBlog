@extends('layouts.master')

@section('blog_body')

    <h3 class="card-title">
        {{ $publication->title }} 
        <br> 
        <small style="color: cadetblue;">{{ $publication->category->name }}</small>
    </h3>
    <small>{{ $publication->created_at }}</small>
    <hr>
    <p class="card-text">{{ $publication->description }}</p>

@endsection