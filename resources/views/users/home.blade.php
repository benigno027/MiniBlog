@extends('layouts.master')

@section('title', 'Dashboard')

@section('blog_body')

    <div class="card-deck">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">User Setting</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <a href="{{ route('publications.create') }}">New Publication</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ route('users.profile') }}">Setting Profile</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">publications</h5>
            <table class="table table-hover table-inverse table-responsive">
                <thead class="thead-inverse">
                    <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Date</th>
                        <th>Link</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($publications as $publication)
                            <tr>
                                <td>{{ $publication->title }}</td>
                                <td>{{ $publication->category->name }}</td>
                                <td>{{ $publication->created_at }}</td>
                                <td>
                                    <a href="{{ route('publications.show', ['id' => $publication->id]) }}" target="blank_">
                                        See post
                                    </a>
                                </td>
                            </tr>    
                        @endforeach
                    </tbody>
            </table>
            </div>
        </div>
    </div>

@endsection
