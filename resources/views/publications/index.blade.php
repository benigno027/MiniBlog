@extends('layout.master')

@section('blog_body')

    <div class="container">
        <div class="row">
            <div class="col-8">
                
                @foreach ($publications as $publication)
                    
                    <div class="card py-4 my-4" style="cursor: pointer;" onclick="window.location='{{ route('publications.show', ['id' => $publication->id]) }}';">
                        <div class="card-body" >
                            <h3 class="card-title">{{ $publication->title }}</h3>
                            <p class="card-text">{{ substr($publication->article, 0, 250) }}...</p>
                        </div>
                    </div>
                    
                @endforeach
                
            </div>
            <div class="col-2">
            
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                {{ $publications->links() }}
            </div>
        </div>
    </div>

@endsection
