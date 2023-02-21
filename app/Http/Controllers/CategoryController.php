<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('categories.index',[
            'categories' => Category::latest()->paginate(4)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $category = new Category();
        $category['name'] = $request->name;
        $category->save();
        return redirect('/categories')->with('message', __('messages.Category created successfully!'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        
        return view('categories.show',['category' => $category]) ;
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('categories.edit',[
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->update([
            'name' => $request->name
        ]);
        return redirect('/categories')->with('message', __('messages.Category updated successfully!'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category): RedirectResponse
    {
        if(Product::whereBelongsTo($category)->get()->isEmpty()){
            $category->delete();
            $destroy_message = __('messages.Category_deleted_successfully');
        }else{
            $destroy_message = __('messages.Category_cant_be_deleted');
        }
        return redirect('/categories')->with('message', $destroy_message);
    }
}
