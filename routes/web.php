<?php

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Stevebauman\Location\Facades\Location;


// Homepage
Route::get('/', function () {
    $my_products = Product::select("slug", "images", "measurement", "specifications");
    $animals = Product::select("slug")->get();
    $animals = array_map(function ($animal) {
        return Str::slug($animal["slug"]);
    }, $animals->toArray());
    return view('home', [
        "products_intro" => $my_products->take(5)->get(),
        "all_products" => $my_products->whereIn('slug', ['elephant', 'wolf', 'tiger', 'jaguar', 'hawk', 'falcon'])->get(),
        "animals" => $animals
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
        $message->to(getenv('MAIL_FROM_ADDRESS'), getenv('APP_NAME'))
            ->subject($name . " warehouse - " . $data['subject'] . " from " . $data['name']);
    });
    return redirect()->back()->with('success', 'Your message has been sent successfully');
})->name("contact-us");

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
