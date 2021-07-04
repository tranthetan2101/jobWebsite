<?php

namespace App\Http\Controllers;

use App\Models\Categoryjob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Categoryjob::all();
        return view('layouts.admin.list-cate', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required'
        ]);

        $category = new Categoryjob([
            'category_name' => $request->get('category_name')
        ]);
        $category->save();
        return redirect('/')->with('success', 'post added.');
    }
    public function show($id)
    {
        // $cateId = DB::table('posts')
        //     ->join('categoryjobs', 'posts.categoryjob_id', '=', 'categoryjobs.id_cate_post')
        //     ->join('details', 'details.id_post', '=', 'posts.id')->where('posts.categoryjob_id', '=', $id)->get();
        return view('pages.client.catePost', ['cateId' => DB::table('posts')
            ->join('categoryjobs', 'posts.categoryjob_id', '=', 'categoryjobs.id_cate_post')
            ->join('details', 'details.id_post', '=', 'posts.id')->where('posts.categoryjob_id', '=', $id)->paginate(5)]);
    }
    public function edit($id)
    {
        $content = Categoryjob::find($id);
        return view('layouts.admin.edit-cate', compact('content'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category_name' => 'required'
        ]);
        $category = Categoryjob::find($id);
        $category->category_name = $request->get('category_name');
        $category->save();
        return redirect('/admin/list-cate')->with('success', 'Category updated.');
    }

    public function destroy($id_category)
    {
        $category = Categoryjob::find($id_category);
        $category->delete();
        return redirect('/admin/list-cate')->with('success', 'Deleted.');
    }
}
