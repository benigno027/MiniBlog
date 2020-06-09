@extends('layouts.master')
@section('title', 'Publications')
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
                {{ $publications->appends(request()->input())->links() }}

                <form id="form_orderBy" class="form-inline" method="GET" action="{{ route('publications.index') }}">
                    <div class="form-group" style="width: 20%;">
                        <label for="">Order by</label>
                        <select class="form-control" name="order_by" id="orderBy" style="width: 60%; margin-left: 5%;">
                            <option value="DESC">DESC</option>
                            @if( isset( $_GET['order_by'] ) )
                                <option {{ $_GET['order_by'] == 'ASC' ? 'selected' : '' }} value="ASC">ASC</option>
                            @else
                                <option value="ASC">ASC</option>
                            @endif
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('js_script')

    <script>

        $('#orderBy').on('change', function(){
            let url = $('#form_orderBy').attr('action');
            let category = '';

            @if( isset( $_GET['category_id'] ) )
                category = `?category_id={{ $_GET['category_id'] }}`;
            @endif

            if(category != ""){
                $('#form_orderBy').attr('action', url + category + `&order_by=` +  $('#orderBy').val() );
            }else{
                $('#form_orderBy').attr('action', url + `?order_by=` + $('#orderBy').val() );
            }
            
            $('#form_orderBy').submit();
        });

    </script>

@endsection
