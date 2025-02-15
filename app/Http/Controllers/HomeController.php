<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index()
    {

        $user = User::where("usertype","user")->get()->count();
        $product = Product::all()->count();
        $order= Order::all()->count();
        $delivered= Order::where("status","Delivered")->get()->count();
        return view("admin.index",compact("user","product","order","delivered"));
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

    public function mycart(){
        if(Auth::id()){
            $user= Auth::user();
            $userid = $user->id;
            $count = Cart::where("user_id",$userid)->count();

            $cart = Cart::where("user_id", $userid)->get();
        }

        return view("home.mycart",compact("count","cart"));
    }

    public function delete_cart($id)
    {
        $cart = Cart::find($id);

        $cart->delete();

        toastr()->timeOut(10000)->closeButton()->addSuccess("Product Removed of Cart Successfully");

        return redirect()->back();
    }

    public function confirm_order(Request $request){
        $name = $request->name;
        $address= $request->address;
        $phone= $request->phone;
        $userid = Auth::user()->id;
        $cart= Cart::where("user_id", $userid)->get();

        foreach($cart as $carts){
            $order = new Order;

            $order ->name = $name;

            $order ->rec_address= $address;

            $order ->phone = $phone;

            $order->user_id= $userid;

            $order->product_id= $carts->product_id;
            $order->save();

        }
        $cart_remove= Cart::where("user_id",$userid)->get();

        foreach($cart_remove as $remove){
            $data = Cart::find($remove->id);

            $data ->delete();
        }

        toastr()->timeOut(10000)->closeButton()->addSuccess("Product Remove from the Cart Successfully");

        return redirect()->back();
    }

    public function myorders(){
        if(Auth::id()){
            $user= Auth::user();
            $userid = $user->id;
            $count = Cart::where("user_id",$userid)->count();
            $order= Order::where("user_id",$userid)->get();
            $cart = Cart::where("user_id", $userid)->get();
        }

        return view("home.orders",compact("count","cart","order"));
    }

    public function shop(){
        $product = Product::all();

        if (Auth::id()) {
            $user = Auth::user();

            $userid = $user->id;

            $count = Cart::where("user_id", $userid)->count();
        } else {
            $count = "";
        }

        return view("home.shopHeader", compact("product", "count"));
    }

    public function whyus(){
        $product = Product::all();

        if (Auth::id()) {
            $user = Auth::user();

            $userid = $user->id;

            $count = Cart::where("user_id", $userid)->count();
        } else {
            $count = "";
        }

        return view("home.whyus", compact("product", "count"));
    }

    public function testimonials(){
        $product = Product::all();

        if (Auth::id()) {
            $user = Auth::user();

            $userid = $user->id;

            $count = Cart::where("user_id", $userid)->count();
        } else {
            $count = "";
        }

        return view("home.testimonials", compact("product", "count"));
    }



    public function contactus(){
        $product = Product::all();

        if (Auth::id()) {
            $user = Auth::user();

            $userid = $user->id;

            $count = Cart::where("user_id", $userid)->count();
        } else {
            $count = "";
        }

        return view("home.contactus", compact("product", "count"));
    }

}
