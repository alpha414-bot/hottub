<?php

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Stevebauman\Location\Facades\Location;


// Homepage
Route::get('/', function () {
    // $animals = array_map(function ($animal) {
    //     return Str::slug($animal["slug"]);
    // }, $animals->toArray());
    return view('home', [
        "products_intro" => Product::select("slug", "name", "images", "measurement", "specifications")->take(5)->get(),
        "all_products" => Product::select("slug", "name", "images", "measurement", "specifications")->get(),
        "animals" => Product::select("slug", "name", "images")->get()
    ]);
})->name('home');

// List all Hot Tubs
Route::get('/hot-tubs', function () {
    return view("hottubs", [
        'fully_powered' => Product::select("slug", "name", 'type', "images", "short_description", "new", "measurement", "specifications")->where('type', 'full-powered-hot-tubs')->get(),
        'plug_and_play' => Product::select("slug", "name", 'type', "images", "short_description", "new", "measurement", "specifications")->where('type', 'plug-and-play-hot-tubs')->get(),
        'cold_spas' => Product::select("slug", "name", 'type', "images", "short_description", "new", "measurement", "specifications")->where('type', 'cold-spas')->get(),
    ]);
})->name('hot-tubs');

// Learn more about hot tub product
Route::get('/learn-more/{name}', function (string $name) {
    $main_product = Product::where('name', $name)->first();
    if (!$main_product) {
        abort(404);
    }
    $similar_products = Product::where('type', $main_product->type)
        ->where('name', '!=', $name)
        ->select("slug", "name", "images", "short_description", "measurement", "specifications")
        ->take(rand(1, 4))
        ->get();
    return view("learnmore", [
        "product" => $main_product,
        "similar" => $similar_products
    ]);
})->name('learn-more');

// Contact Us Page
Route::get('/contact-us', function () {
    return view("contactus", [
        "countrycode" => ""
    ]);
})->name('contact-us');

Route::post("/contact-us", function (Request $request) {
    $name = getenv('APP_NAME');
    $request->validate([
        'subject' => 'required|string',
        'name' => 'required|string',
        'phone' => 'string',
        'email' => 'required|email',
        'question' => 'required|string',
    ]);
    // Send email
    $data = $request->all();
    Mail::send('mail', $data, function ($message) use ($data, $name) {
        $message->to(getenv('MAIL_TO_ADDRESS'), getenv('APP_NAME'))
            ->subject("New Message Request | " . $data['name']);
        // ->subject($name . " warehouse - " . $data['subject'] . " from " . $data['name']);
    });
    return redirect()->back()->with('success', 'Your message has been sent successfully');
})->name("submit-contact-us");

// Warranty Page
Route::get("/warranty", function () {
    return view("warranty");
})->name("warranty");

// About Us Page
Route::get('/about-us', function () {
    return view("aboutus");
})->name('about-us');

// Privacy Policy Page
Route::get('/privacy-policy', function () {
    $name = getenv('APP_NAME');
    $termsOfService = file_get_contents(resource_path('terms_of_service.txt'));
    $termsOfService = str_replace('{{$name}}', $name, $termsOfService);
    $howwecollectAndUse = file_get_contents(resource_path('how_we_collect_and_use_your_personal_information.txt'));
    $howwecollectAndUse = str_replace('{{$name}}', $name, $howwecollectAndUse);
    $useOfCookies = file_get_contents(resource_path('use_of_cookies.txt'));
    $useOfCookies = str_replace('{{$name}}', $name, $useOfCookies);
    $thirdPartyWebsites = file_get_contents(resource_path('third_party_websites.txt'));
    $thirdPartyWebsites = str_replace('{{$name}}', $name, $thirdPartyWebsites);
    $yourRightsAndChoice = file_get_contents(resource_path('your_rights_and_choice.txt'));
    $yourRightsAndChoice = str_replace('{{$name}}', $name, $yourRightsAndChoice);
    return view("privacypolicy", [
        "policies" => [
            "Terms of service" => $termsOfService,
            "How we collect and use your personal information" => $howwecollectAndUse,
            "Use of Cookies" => $useOfCookies,
            "Third party websites and links" => $thirdPartyWebsites,
            "Your rights and choice" => $yourRightsAndChoice
        ]
    ]);
})->name('privacy-policy');
