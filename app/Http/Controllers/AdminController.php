<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function view_category()
    {
        $category= Category::all();
        return view("admin.category", compact("category"));
    }

    public function add_category(Request $request)
    {

        $category = new Category;

        $category->category_name = $request->category;

        $category->save();

        toastr()->closeButton()->timeOut(5000)->addSuccess("Category Added Successfully");

        return redirect()->back();
    }

    public function delete_category($id){
        $category = Category::find($id);
        $category->delete();

        toastr()->closeButton()->timeOut(5000)->addSuccess("Category Deleted Successfully");

        return redirect()->back();
    }

    public function edit_view($id){
        $category = Category::find($id);
        return view("admin.edit",compact("category"));
    }

    public function update_category(Request $request, $id){
        $category = Category::find($id);
        $category->category_name= $request -> category;
        $category ->save();
        toastr()->closeButton()->timeOut(5000)->addSuccess("Category Updated Successfully");
        return redirect("/view_category");

    }

    public function add_product(){

        $category = Category::all();

        return view("admin.add_product", compact("category"));
    }

    public function upload_product(Request $request){
        $product = new Product;

        $product -> title = $request->title;
        $product -> description= $request->description;
        $product -> price= $request->price;
        $product -> quantity= $request->quantity;
        $product -> category = $request->category;

        $image = $request->image;

        if($image){
        $imagename=time().".".$image->getClientOriginalExtension();

        $request->image->move("products",$imagename);

        $product->image = $imagename;
        }

        $product->save();

        return redirect()->back();
    }

    public function view_product(){
        $product = Product::paginate(1);
        return view("admin.view_product", compact("product"));
    }

    public function delete_product($id){


        $product = Product::find($id);
        $image_path = public_path("products/" . $product->image);

        if(file_exists($image_path))
        {
            unlink($image_path);
        }

        $product->delete();
        toastr()->closeButton()->timeOut(5000)->addSuccess("Category Deleted Successfully");
        return redirect()->back();
    }

}
