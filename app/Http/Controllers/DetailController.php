<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    public function index()
    {
        $detailPost = DB::table('posts')->join('details', 'posts.id', '=', 'details.id_post')->get();
        return view('pages.client.list-blog', compact('detailPost'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
        $post  = Posts::find($id);
        $detailPost = DB::table('posts')->join('details', 'posts.id', '=', 'details.id_post')->where('posts.id', '=', $post->id)->get();
        return view('pages.client.detail-post', compact('detailPost'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
