@extends('layout.master')

@section('title', 'Admin|Publications')

@section('blog_body')

    <h5>All Publications</h5>
    <hr>
    <div class="row">
        <div class="col-12">

            <table class="table table-hover table-inverse table-responsive" style="with:100%;">
                <thead class="thead-inverse">
                    <tr>
                        <th>Author</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Link</th>
                        <th>Date</th>
                        <th>Option</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($publications as $publication)
                            <tr>
                                <td>{{ $publication->author }}</td>
                                <td>{{ $publication->title }}</td>
                                <td>{{ $publication->category }}</td>
                                <td>
                                    <a href="{{ route('admins.publications') }}">See Post</a>
                                </td>
                                <td>{{ $publication->created_at }}</td>
                                <td>
                                    
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