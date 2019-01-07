<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Session;
class CategoryController extends Controller
{
    
    public function index()
    {
        $categories=Category::all();
        return view('admin.category.index')
                ->with('categories',$categories);
    }

    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $newCategory=new Category();
        $newCategory->name=$request->name;
        $newCategory->save();
        Session::flash('success','Create successfuly');
        return redirect()->back();
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
        $category=Category::find($id);
        return view('admin.category.edit')
                ->with('category',$category);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $category = Category::find($id);
        $category->name=$request->name;
        $category->save();
        Session::flash('success', 'Updated successfuly');
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();

        Session::flash('success', 'Deleted successfuly');
        return redirect()->route('category.index');
    }
}
