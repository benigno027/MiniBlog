@extends('layout.master')

@section('title', 'Admin')

@section('blog_body')

    <h5>Admin Controller</h5>
    <hr>

    <div class="card-deck">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">User Setting</h5>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Crear User</li>
                <li class="list-group-item">Edit User</li>
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
                <li class="list-group-item">
                    <a href="{{ route('admins.categories') }}">Setting Category</a>
                </li>
                <li class="list-group-item">Setting Post</li>
            </ul>
          </div>
        </div>
        <div class="card">
          
          <div class="card-body">
            <h5 class="card-title">Blog Setting</h5>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Permissions</li>
                <li class="list-group-item">Edit User</li>
            </ul>
          </div>
        </div>
      </div>

@endsection
