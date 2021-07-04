<?php

namespace App\Http\Controllers;

use App\Models\CV;
use Illuminate\Http\Request;
use App\Models\Posts;

class CVController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }
    public function getidCV($id)
    {
        // Lay ra 1 dong theo id
        $content = Posts::find($id);
        return view('pages.client.upload-cv', compact('content'));
    }
    public function addCV(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'namsinh' => 'required',
            'cmnd' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'diachi' => 'required',
            'gioitinh' => 'required',
            'giadinh' => 'required',
            'gioithieu' => 'required',
            'image_cv' => 'required',
            'CV' => 'required',
            'bangcap' => 'required',
            'id_post' => 'required',
        ]);
        $CV = new CV([
            'fullname' => $request->get('fullname'),
            'namsinh' => $request->get('namsinh'),
            'cmnd' => $request->get('cmnd'),
            'phone' => $request->get('phone'),
            'email' => $request->get('email'),
            'diachi' => $request->get('diachi'),
            'gioitinh' => $request->get('gioitinh'),
            'giadinh' => $request->get('giadinh'),
            'gioithieu' => $request->get('gioithieu'),
            'image_cv' => basename($request->file('image_cv')->store('public/photo')),
            'CV' => basename($request->file('CV')->store('public/photo')),
            'bangcap' => $request->get('bangcap'),
            'id_post' => $request->get('id_post'),
        ]);
        $CV->save();

        return redirect('/')->with('success', 'Post updated.');
    }

    public function show($id)
    {
        //
    }
}
