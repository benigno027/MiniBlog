@extends('layouts.master')

@section('title', 'New Post')

@section('blog_body')

    <div class="container my-3">
        <h4>New Post</h4>
        <hr/>
        <div class="row">
            <div class="col-lg-6">
                <form action="{{ route('publications.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="my-2">Title</label>
                        <input class="form-controller" type="text" name="title">
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                          <label for="category_id">category</label>
                          <select class="form-control" name="category_id">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                            
                          </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Article</label>
                        <hr>
                        <textarea class="form-controller" style="width:100%;" type="text" name="article" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection
