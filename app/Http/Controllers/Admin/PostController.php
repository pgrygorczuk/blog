<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $base_url = 'admin/posts';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //GET
    {
        return view($this->base_url.'/index')
            ->with( 'items', Post::with('user')->get() )
            ->with( 'fields', Post::fields );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() //GET
    {
        $post = new Post();
        $post->title = 'Default title';
        return view($this->base_url.'/form')
            ->with( 'item', $post )
            ->with( 'fields', Post::fields )
            ->with( 'form_action', url($this->base_url));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //POST
    {
        $validated = $request->validate(Post::getValidationRules());
        Post::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post) //GET
    {
        return view($this->base_url.'/show')
            ->with( 'item', $post );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post) //GET
    {
        return view($this->base_url.'/form')
            ->with( 'item', $post )
            ->with( 'fields', Post::fields )
            ->with( 'users', User::all() )
            ->with( 'form_action', url($this->base_url.'/'.$post->id))
            ->with( 'form_method', 'PATCH');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post) //PUT/PATCH
    {
        $validated = $request->validate(Post::getValidationRules());
        $post->update($request->all());
        return redirect($this->base_url);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post) //DELETE
    {
        $post->delete();
        return redirect($this->base_url);
    }
}
