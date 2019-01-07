<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = ;
        // dd($posts);
        //$categories = Category::all();
        return view('admin.post.index')->with('posts', Post::all());
    }

    public function create()
    {
        $categories=Category::all();
        return view('admin.post.create')->with('categories',$categories);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'featured' => 'required|image',
            'content' => 'required',
            'category_id' => 'required',
        ]);
        //nhan hinh ma nguoii ta gui len
        $newFeatured=$request->featured;
        //doi ten sao cho khong bi trung trong database
        $newFeaturedName=time().$newFeatured->getClientOriginalName();
        //tien hanh luu file theo cach thu cong
        $newFeatured->move('uploads/post', $newFeaturedName);

        // $newPost=new Post();
        // $newPost->title=$request->title;
        // $newPost->featured = $newFeaturedName;
        // $newPost->content = $request->content;
        // $newPost->category_id = $request->category_id;

        //lam cach moi nhanh hon ne
        $post=Post::create([
            'title'=>$request->title,
            'featured' => 'uploads/post/'.$newFeaturedName,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'slug'=>str_slug($request->title)
        ]);

        Session::flash('success',"Post was created successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        
    }
}
