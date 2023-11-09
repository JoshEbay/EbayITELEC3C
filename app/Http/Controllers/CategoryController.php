<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::orderBy('id')->paginate('5');
        return view('admin.category.category', compact('categories'));
    }

    public function create(Request $request) {
        $validated = $request->validate([
            'cat_name' => 'required|unique:categories|max:255',
        ]);

        Category::create([
            'cat_name' => $request->cat_name,
            'user_id' => Auth::user()->id,
            'created_at' => Carbon::now()
        ]);
        
        return redirect()->back();
    }

    public function edit($id) {
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }

    public function edit_confirm(Request $request, $id) {
        $category = Category::find($id);

        $category->cat_name = $request->cat_name;
        $category->user_id = $request->user_id;

        $category->save();
        
        return redirect()->back();
    }

    public function delete($id) {
        $category = Category::find($id);
        $category->delete();
        return redirect()->back();
    }
}