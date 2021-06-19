<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::with('subCategory')->get();
        return view('category.index', compact('category'));
    }

    public function create(Request $request)
    {

        $category = Category::with('subCategory')->get();
        return view('category.create', compact('category'));

    }

    public function store(CategoryRequest $categoryRequest)
    {

        $categoryFormData = $categoryRequest->all();
        $subCategoryId = $categoryFormData['sub_category'];

        $category = Category::create([
            'name' => $categoryFormData['cat_name'],
            'parent_id' => (empty($subCategoryId) ? 0 : $subCategoryId)
        ]);

        return back()->with('success', 'Category Created Successfully (Id:' . $category->id . ')');
    }
}
