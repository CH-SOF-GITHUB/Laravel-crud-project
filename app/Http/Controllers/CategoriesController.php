<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = Category::all();
        //dd($categories);
        return view("backoffice.categories.index", compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("backoffice.categories.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $inputs = $request->all();
        // vérification de control (validate)
        Category::create($inputs);
        return redirect()->route("categories.index")->with(['success' => 'Category added with success']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
        return view("backoffice.categories.show", compact("Category"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
        return view("backoffice.categories.edit", compact("Category"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
        $input = $request->all();
        $category->update($input);
        return redirect()->route("categories.index")->with(['success' => 'Category updated with success']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
        $category->delete();
        return redirect()->route("categories.index")->with(['success' => 'Category deleted with success']);
    }
}
