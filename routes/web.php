<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Stevebauman\Location\Facades\Location;


// Homepage
Route::get('/', function () {
    $my_products = Product::select("slug", "images", "measurement", "specifications");
    return view('home', [
        "products_intro" => $my_products->take(5)->get(),
        "all_products" => $my_products->whereIn('slug', ['elephant', 'wolf', 'tiger', 'jaguar', 'hawk', 'falcon'])->get()
    ]);
})->name('home');

// List all Hot Tubs
Route::get('/hot-tubs', function () {
    return view("hottubs", [
        'fully_powered' => Product::select("slug", 'type', "images", "short_description", "new", "measurement", "specifications")->where('type', 'full-powered-hot-tubs')->get(),
        'plug_and_play' => Product::select("slug", 'type', "images", "short_description", "new", "measurement", "specifications")->where('type', 'plug-and-play-hot-tubs')->get(),
    ]);
})->name('hot-tubs');

// Learn more about hot tub product
Route::get('/learn-more/the-{slug}', function (string $slug) {
    $main_product = Product::where('slug', $slug)->first();
    if (!$main_product) {
        abort(404);
    }
    $similar_products = Product::where('type', $main_product->type)
        ->where('slug', '!=', $slug)
        ->select("slug", "name", "images", "short_description", "measurement", "specifications")
        ->take(rand(1, 4))
        ->get();
    return view("learnmore", [
        "product" => $main_product,
        "similar" => $similar_products
    ]);
})->name('learn-more')->whereIn('slug', ['elephant', 'bulldog', 'tiger', 'wolf', 'jaguar', 'hawk', 'falcon']);;

// Contact Us Page
Route::get('/contact-us', function () {
    return view("contactus", [
        "countrycode" => ""
    ]);
})->name('contact-us');


Route::get('test', function () {
    $position = Location::get();
    $countryCode = $position ? $position->countryCode : '';

    $ip = request()->ip(); // Get the user's IP address
    // $ip = "192.168.0.135"; // Get the user's IP address
    $url = "http://ip-api.com/json/{$ip}";
    $response = file_get_contents($url);
    // $data = json_decode($response, true);
    var_dump($response, $ip, $position, $countryCode);
    // return $data['countryCode'] ?? 'Unknown'; // Example: "US"

    try {
    } catch (\Exception $e) {
        return 'Unknown';
    }
});
