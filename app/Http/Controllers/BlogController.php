<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getBlog = Blog::all();
        // get detail post
        $detailPost = DB::table('posts')->join('details', 'posts.id', '=', 'details.id_post')->get();
        return view('pages.client.list-blog', compact('getBlog', 'detailPost'));
    }
    public function getBlogAdmin()
    {
        $getBlog = DB::table('blogs')->join('categoryblogs','blogs.cateblog_id','=','categoryblogs.id')->get();
        return view('pages.admin.list-blog', compact('getBlog'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'blog_title' => 'required',
            'blog_image' => 'required',
            'blog_content' => 'required',
            'categoryblog_name' => 'required'
        ]);
        $Blog = new Blog([
            'title_blog' => $request->get('blog_title'),
            'image_blog' => basename($request->file('blog_image')->store('public/photo')),
            'content_blog' => $request->get('blog_content'),
            'cateblog_id' => $request->get('categoryblog_name'),
        ]);
        $Blog->save();
        return redirect('/')->with('success', 'post added.');
    }
    public function uploadImage(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('images'), $fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/' . $fileName);
            $msg = 'upload thành công hé he he he';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $getBlogbyId = Blog::where('id', $id)->get();
        $getBlog = Blog::all();
        $detailPost = DB::table('posts')->join('details', 'posts.id', '=', 'details.id_post')->get();
        return view('pages.client.show-blog', compact('getBlogbyId', 'detailPost', 'getBlog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteBlog = Blog::find($id);
        $deleteBlog->delete();
    }
}
