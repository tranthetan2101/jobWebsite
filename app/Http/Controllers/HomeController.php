<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $getBlog = Blog::all();
        // get detail post
        $detailPost = DB::table('posts')->join('details', 'posts.id', '=', 'details.id_post')->get();
        return view('pages.client.index', compact('getBlog', 'detailPost'));
    }
}
