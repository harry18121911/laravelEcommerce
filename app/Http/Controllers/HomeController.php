<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index()
    {
        return view("admin.index");
    }

    public function home()
    {
        $product = Product::all();

        if (Auth::id()) {
            $user = Auth::user();

            $userid = $user->id;

            $count = Cart::where("user_id", $userid)->count();
        } else {
            $count = "";
        }




        return view("home.index", compact("product", "count"));
    }

    public function login_home()
    {
        $product = Product::all();

        if (Auth::id()) {
            $user = Auth::user();

            $userid = $user->id;

            $count = Cart::where('user_id', $userid)->count();
        }


        return view("home.index", compact("product", "count"));
    }

    public function product_details($id)
    {
        $product = Product::find($id);

        if (Auth::id()) {

            $user = Auth::user();

            $userid = $user->id;

            $count = Cart::where("user_id", $userid)->count();
        } else {
            $count = "";
        }



        return view("home.product_details", compact("product", "count"));
    }

    public function add_cart($id)
    {
        $product_id = $id;
        $user = Auth::user();
        $user_id = $user->id;

        $cart = new Cart;

        $cart->user_id = $user_id;
        $cart->product_id = $product_id;
        $cart->save();

        toastr()->timeOut(10000)->closeButton()->addSuccess("Product Added to the Cart Successfully");

        return redirect()->back();
    }
}
