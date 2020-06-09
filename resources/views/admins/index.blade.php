@extends('layouts.master')

@section('title', 'Admin')

@section('blog_body')

    <h5>Admin Controller</h5>
    <hr>

    <div class="card-deck">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">User Setting</h5>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <a href="{{ route('admins.users') }}">List User</a>
                </li>
            </ul>
          </div>
        </div>
        <div class="card">
          
          <div class="card-body">
            <h5 class="card-title">Post</h5>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <a href="{{ route('publications.create') }}">New Publication</a>
                </li>
                <li class="list-group-item">
                  <a href="{{ route('admins.publications') }}">List Publications</a>
                </li>
            </ul>
          </div>
        </div>
      </div>

@endsection
