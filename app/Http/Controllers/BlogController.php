<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          $datas = Blog::get();
        return view('admin.blogs.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->all();
        $path = $request->file('image')->store('images', 'public');
        $validate['image'] = $path;
        Blog::create($validate);
        return redirect()->route('blogpage');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $data=Blog::find($id);
         return view('admin.blogs.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Blog::find($id);
        return view('admin.blogs.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $blog = Blog::find($id);
       
        $blog->update($request->all());
        return redirect()->route('blogpage');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect()->route('blogpage');
    }
}
