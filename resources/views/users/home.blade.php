@extends('layouts.master')

@section('title', 'Admin')

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
                        <a href="{{ route('admins.categories') }}">Setting Profile</a>
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
                        <th>Descripcion</th>
                        <th>Link</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row"></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
            </table>
            </div>
        </div>
    </div>

@endsection
