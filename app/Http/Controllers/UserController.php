<?php
namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function bro_wtf()
    {
        return view("welcome");
    }

    public function loginWW()
    {
        return view("login");
    }

    public function hottofood()
    {
        return view("about");
    }

    public function knockknockfbitoyourdoor()
    {
        return view("contact");
    }

    public function register()
    {
        return view("register");
    }

    public function createUser(Request $request)
    {
        $formFields = $request->validate([
            "name" => "required",
            //"address" => ["required", "address"],
            "email" => ["required", "email"],
            "password" => "required|confirmed"
        ]);

        User::create($formFields);

        return redirect("/login/")->with("message", "Register Success, now try login");
    }
    public function yeslogin(Request $request)
    {
        $formFields = $request->validate([
            "email" => "required",
            "password" => "required",
        ]);

        if (auth()->attempt($formFields)) {
            //$products = Product::all();
            return redirect("/shop")->with("message", "Login Success, lol");


            // Pass the products to the view
            //return view('shop', ['products' => $products]);
            //return back()->with("message", "Login Success, welcome");
        }else{
            return redirect("/login/")->with("message", "your email and password is wrong nigga, perhaps you need seek help from eye doctor");
        }
    }

    public function shopX()
    {
        return view('shop'); // Ensure you have a shop.blade.php file in the resources/views directory
    }

//    public function authenticate(Request $request)
//    {
//        $formFields = $request->validate([
//            "name" => "required",
//            "password" => "required",
//        ]);
//
//        if (auth()->attempt($formFields)) {
//            return redirect("/shop")->with("message", "Login Success, lol");
//
//           //return back()->with("message", "Login Success, welcome");
//        }
//
//        return back()->withErrors(['name' => 'Invalid Credentials'])->onlyInput("name");
//    }
}
