<?php

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Stevebauman\Location\Facades\Location;


// Homepage
Route::get('/', function () {
    return view('home', [
        "products_intro" => Product::select("slug", "name", "images", "measurement", "specifications")->take(5)->get(),
        "all_products" => Product::select("slug", "name", "images", "measurement", "specifications")->where("type", "!=", "generation-hottubs")->get(),
        "animals" => Product::select("slug", "name", "images")->get()
    ]);
})->name('home');

// List all Hot Tubs
Route::get('/hot-tubs', function () {
    return view("hottubs", [
        'fully_powered' => Product::select("slug", "name", "long_caption", 'type', "images", "short_description", "new", "measurement", "specifications")->where('type', 'full-powered-hot-tubs')->get(),
        'plug_and_play' => Product::select("slug", "name", "long_caption", 'type', "images", "short_description", "new", "measurement", "specifications")->where('type', 'plug-and-play-hot-tubs')->get(),
        'cold_spas' => Product::select("slug", "name", "long_caption", 'type', "images", "short_description", "new", "measurement", "specifications")->where('type', 'cold-spas')->get(),
    ]);
})->name('hot-tubs');

// List all Earth Spas
Route::get('/earth-spas', function () {
    return view("earthspas", [
        'fully_powered' => Product::where('type', 'earth-spas')->get(),
    ]);
})->name('earth-spas');
Route::get('/generation-hottubs', function () {
    return view("generationhottubs", [
        'products' => Product::where('type', 'generation-hottubs')->get(),
    ]);
})->name('generation-hottubs');

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
    $name = config('app.name');
    $mail_to_address = config("app.mail_to_address");
    $request->validate([
        'subject' => 'required|string',
        'name' => 'required|string',
        'phone' => 'string',
        'email' => 'required|email',
        'question' => 'required|string',
    ]);
    // Send email
    $data = $request->all();
    Mail::send('mail', $data, function ($message) use ($data, $mail_to_address, $name) {
        $message->to($mail_to_address, $name)
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
    $name = config('app.name');
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

// Database Migrating
Route::get('/server/database', function () {
    Artisan::call('migrate:fresh');
    Artisan::call('db:seed');
    return response()->json(['message' => 'Database refreshed and seeded successfully']);
})->name('refresh-database');
