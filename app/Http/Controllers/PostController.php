<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use Illuminate\Http\Request;
use App\Models\Posts;
use Exception;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $post = Posts::all();
        return view('layouts.client.list-post', compact('post'));
    }
    public function viewCatePost()
    {
        $Post = Posts::all();
        return view('layouts.client.list-post', compact('Post'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'post_name' => 'required',
            'post_description' => 'required',
            'post_yeucau' => 'required',
            'post_quyenloi' => 'required',
            'category_name' => 'required',
            'noi_lam' => 'noilam',
            'bang_cap' => 'bangcap',
            'hinh_thuc' => 'hinhthuc',
            'kinh_nghiem' => 'kinhnghiem',
            'thu_nhap' => 'thunhap',
            'so_luong' => 'soluong',
            'han_nop' => 'hannop',
            'id_post' => 'id_post'
        ]);

        $postSave = [
            'post_name' => $request->get('post_name'),
            'post_description' => $request->get('post_description'),
            'post_yeucau' => $request->get('post_yeucau'),
            'post_quyenloi' => $request->get('post_quyenloi'),
            'categoryjob_id' => $request->get('category_name'),
        ];

        $detailSave = [
            'noi_lam' => $request->get('noilam'),
            'bang_cap' => $request->get('bangcap'),
            'hinh_thuc' => $request->get('hinhthuc'),
            'kinh_nghiem' => $request->get('kinhnghiem'),
            'thu_nhap' => $request->get('thunhap'),
            'so_luong' => $request->get('soluong'),
            'han_nop' => $request->get('hannop'),
        ];

        $idPost = Posts::instance()->insert($postSave, true);

        if ($idPost === false) {
            throw new Exception("Save Post Error!");
        }

        $detailSave['id_post'] = $idPost;

        $intIsOk = Detail::instance()->insert($detailSave);

        if ($intIsOk === false) {
            throw new Exception("Save Details Error!");
        }
        return redirect('/')->with('success', 'post added.');
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        // Lay ra 1 dong theo id
        $content = Posts::find($id);
        return view('layouts.admin.edit-post', compact('content'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'post_name' => 'required',
            'post_description' => 'required',
            'category_name' => 'required',
            'noi_lam' => 'noilam',
            'bang_cap' => 'bangcap',
            'hinh_thuc' => 'hinhthuc',
            'kinh_nghiem' => 'kinhnghiem',
            'thu_nhap' => 'thunhap',
            'so_luong' => 'soluong',
            'han_nop' => 'hannop',
            'id_post' => 'id_post'
        ]);
        $post = Posts::find($id);
        $postsave = [
            'post_name' => $request->get('post_name'),
            'post_description' => $request->get('post_description'),
            'categoryjob_id' => $request->get('category_name'),
            'noi_lam' => $request->get('noilam'),
            'bang_cap' => $request->get('bangcap'),
            'hinh_thuc' => $request->get('hinhthuc'),
            'kinh_nghiem' => $request->get('kinhnghiem'),
            'thu_nhap' => $request->get('thunhap'),
            'so_luong' => $request->get('soluong'),
            'han_nop' => $request->get('hannop'),
        ];
        $post = DB::table('posts')->join('details', 'posts.id', '=', 'details.id_post')->where('posts.id', '=', $post->id)->update($postsave);
        return redirect('/')->with('success', 'Post updated.');
    }
    public function destroy($id)
    {
        $post = Posts::find($id);
        $post->delete();
        return redirect('/')->with('success', 'Deleted.');
    }

    public function search(Request $request)
    {
        $search_text = $request->input('searchInput');
        if ($search_text != "") {
            $postName = DB::table('posts')
                ->join('categoryjobs', 'posts.categoryjob_id', '=', 'categoryjobs.id_cate_post')
                ->join('details', 'details.id_post', '=', 'posts.id')
                ->where('post_name', 'LIKE', '%' . $search_text . '%')->paginate(5);
            $postName->appends(['searchInput' => $search_text]);
        } else {
            $postName = DB::table('posts')
                ->join('details', 'posts.id', '=', 'details.id_post')->paginate(5);
        }
        return view('pages.client.job', compact('postName'));
    }
}
