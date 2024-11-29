<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function view_category()
    {
        $data = Category::all();
        return view("admin.category", compact("data"));
    }

    public function add_category(Request $request)
    {

        $category = new Category;

        $category->category_name = $request->category;

        $category->save();

        toastr()->closeButton()->timeOut(5000)->addSuccess("Category Added Successfully");

        return redirect()->back();
    }
}
