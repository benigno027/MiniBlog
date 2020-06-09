<?php

namespace App\Http\Controllers;

use App\Category;
use App\Publication;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $publications = [];
        
        if( isset($request->category_id) && isset($request->order_by) ){

            $publications = Publication::where('category_id', '=', $request->category_id)->orderBy('created_at', $request->order_by)->paginate(5);

        }else if( isset($request->category_id) ){

            $publications = Publication::where('category_id', '=', $request->category_id)->paginate(5);

        }else if( isset($request->order_by) ){

            $publications = Publication::orderBy('created_at', $request->order_by)->paginate(5);

        }else{

            $publications = Publication::orderBy('created_at', 'DESC')->paginate(5);

        }
        
        return view('publications.index', compact('publications'));
    }

    public function listpublication(){
        $publications = Publication::all();
        return view('admins.publications', compact('publications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('publications.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $publication = $request->all();
        $publication["user_id"] = Auth::id();
        Publication::create($publication);
        
        return redirect( route('publications.index') );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $publication = Publication::where('id', $id)->first();
        return view('publications.show', compact('publication'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function edit(Publication $publication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publication $publication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Publication  $publication
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $publication_id)
    {
        $publication = Publication::find($publication_id);
        $publication->delete();
        return redirect( route('admins.publications') );
    }
}
