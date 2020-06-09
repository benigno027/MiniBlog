@extends('layouts.master')

@section('title', 'Admin|Blog Users')

@section('blog_body')

    <h5>
        List blog users
    </h5>

    <hr>
    <div class="row">
        <div class="col-12">

            <table class="table table-hover table-inverse table-responsive" style="with:100%;">
                <thead class="thead-inverse">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Date</th>
                        <th>Option</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td>
                                    @if( $user->rol != 'admin' )
                                        <form action="{{ route('user.destroy', ['id' => $user->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
            </table>
        </div>
    </div>

@endsection

@section('js_script')

    <script>
        
    </script>

@endsection