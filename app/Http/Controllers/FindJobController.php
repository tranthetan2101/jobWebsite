<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FindJobController extends Controller
{
    public function index()
    {
        return view('pages.client.job', ['post', 'postName' => DB::table('posts')->join('details', 'posts.id', '=', 'details.id_post')->paginate(5)]);
    }
}
