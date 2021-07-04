<?php

namespace App\Http\Controllers;

use App\Models\Categoryblog;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CategoryBlogController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'category_name_blog' => 'required'
        ]);

        $categoryblog = new Categoryblog([
            'categoryblog_name' => $request->get('category_name_blog')
        ]);
        $categoryblog->save();
        return redirect('/')->with('success', 'post added.');
    }
    // public function show($id)
    // {
    //     $cateId = Categoryblog::find($id)->Posts;
    //     return view('layouts.client.catePost', compact('cateId'));
    // }
    static public function edit($id)
    {
        $idBlog = Categoryblog::find($id);
        return view('layouts.admin.edit-cateblog', compact('idBlog'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category_name_blog' => 'required'
        ]);
        $category = Categoryblog::find($id);
        $category->categoryblog_name = $request->get('category_name_blog');
        $category->save();
        return redirect('/admin/list-cate')->with('success', 'Category updated.');
    }

    public function destroy($id)
    {
        $category = Categoryblog::find($id);
        $category->delete();
        return redirect('/admin/list-cateblog')->with('success', 'Deleted.');
    }
}
