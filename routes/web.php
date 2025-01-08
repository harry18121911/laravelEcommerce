<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get("/",[HomeController::class,"home"]);
Route::get("/shop",[HomeController::class,"shop"]);
Route::get("/whyus",[HomeController::class,"whyus"]);


Route::get('/dashboard',[HomeController::class,"login_home"])->middleware(['auth', 'verified'])->name('dashboard');

Route::get("/myorders",[HomeController::class,"myorders"])->
    middleware(["auth","verified"]);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get("admin/dashboard",[HomeController::class,"index"])->
    middleware(["auth","admin"]);

Route::get("view_category",[AdminController::class,"view_category"])->
    middleware(["auth","admin"]);

Route::post("add_category",[AdminController::class,"add_category"])->
    middleware(["auth","admin"]);

Route::delete("delete_category/{id}",[AdminController::class,"delete_category"])->
    middleware(["auth","admin"]);

Route::get("edit_category/{id}",[AdminController::class,"edit_view"])->
    middleware(["auth","admin"]);

Route::put("update_category/{id}",[AdminController::class,"update_category"])->
    middleware(["auth","admin"]);

Route::get("add_product",[AdminController::class,"add_product"])->
    middleware(["auth","admin"]);

Route::post("upload_product",[AdminController::class,"upload_product"])->
    middleware(["auth","admin"]);

Route::get("view_product",[AdminController::class,"view_product"])->
    middleware(["auth","admin"]);

Route::delete("delete_product/{id}",[AdminController::class,"delete_product"])->
    middleware(["auth","admin"]);

Route::get("edit_product/{id}",[AdminController::class,"edit_product"])->
    middleware(["auth","admin"]);

Route::put("update_product/{id}",[AdminController::class,"update_product"])->
    middleware(["auth","admin"]);

Route::get("product_search",[AdminController::class,"product_search"])->
    middleware(["auth","admin"]);

Route::get("product_details/{id}",[HomeController::class,"product_details"]);

Route::get("add_cart/{id}",[HomeController::class,"add_cart"])->
    middleware(["auth","verified"]);

Route::get("mycart",[HomeController::class,"mycart"])->
    middleware(["auth","verified"]);

Route::delete("delete_cart/{id}",[HomeController::class,"delete_cart"])->
    middleware(["auth","verified"]);

Route::post("confirm_order",[HomeController::class,"confirm_order"])->
    middleware(["auth","verified"]);

Route::get("view_order",[AdminController::class,"view_order"])->
    middleware(["auth","verified"]);

Route::post("on_the_way/{id}",[AdminController::class,"on_the_way"])->
    middleware(["auth","verified"]);

Route::post("delivered/{id}",[AdminController::class,"delivered"])->
    middleware(["auth","verified"]);

Route::post("print_pdf/{id}",[AdminController::class,"print_pdf"])->
    middleware(["auth","verified"]);





