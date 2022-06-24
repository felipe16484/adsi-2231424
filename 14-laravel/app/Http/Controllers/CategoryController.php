<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Exports\CategoryExport;
use App\Imports\CategoryImport;
use PDF;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /*  $categories = Category::all(); */
        $categories = Category::paginate(5);

        return view('categories.index')->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $category = new Category();
        $category->name         = $request->name;
        $category->description  = $request->description;        
        if ($request->hasFile('image')) {
            $file = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $file);
            $category->image = 'images/' . $file;
        }
        if ($category->save()) {
            return redirect('categories')   
                     ->with('message', 'The category: ' . $category->name . ' was successfully updated!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */ 
    public function show(Category $category)
    {
        return view('categories.show')->with('category', $category);        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('categories.edit')->with('category', $category);
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, Category $category)
    {

        $category->name         = $request->name;
        $category->description  = $request->description;        
        if ($request->hasFile('image')) {
            $file = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $file);
            $category->image = 'images/' . $file;
        }
        if ($category->save()) {
            return redirect('categories')   
                     ->with('message', 'The category: ' . $category->name . ' was successfully edited!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if($category->delete()){
            return redirect('categories')->with('message', 'The category: '.$category->name.' was successfully deleted!');
        }
    }

    public function search(Request $request)
    {
        $categories = Category::names($request->q)->orderBy('id')->paginate(5);
        return view('categories.search')->with('categories', $categories);
    }

    public function pdf() {
        $categories = Category::all();
        $pdf = PDF::loadView('categories.pdf', compact('categories'));
        return $pdf->download('allcategories.pdf');
    }

    public function excel() {
        return \Excel::download(new CategoryExport, 'allcategories.xlsx');
    }

    public function import(Request $request) {
        $file = $request->file('file');
        \Excel::import(new CategoryImport, $file);
        return redirect()->back()->with('message', 'Users were imported successfully!');
    }
}
