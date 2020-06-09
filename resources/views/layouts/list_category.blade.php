<div class="nav-scroller py-1 mb-2">
    <nav id="nav-categories" class="nav d-flex justify-content-between">
        @foreach (App\Category::all() as $item)
            <h4>
                <a class="p-2 text-muted" href="{{ route('publications.index', ['category_id' => $item->id]) }}">{{ $item->name }}</a>    
            </h4>
        @endforeach
    </nav>
</div>