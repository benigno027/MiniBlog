@extends('layout.master')

@section('title', 'Admin|Categories')

@section('blog_body')

    <h5>Categories</h5>
    <hr>
    <div class="row">
        <div class="col-4">
            <div class="container">
                <h6>Create new category</h6>
                <form action="{{ route('categories.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="ct_name">Name</label>
                        <input type="text" class="form-control" id="ct_name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="ct_description">Description</label>
                        <input type="text" class="form-control" id="ct_description" name="description">
                    </div>
                    <button type="submit" class="btn btn-info btn-sm">Save</button>
                </form>
            </div>
        </div>
        <div class="col-8">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Opcion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->description }}</td>
                            <td>
                                <form action="{{ route('categories.destroy', ['id' => $category->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
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