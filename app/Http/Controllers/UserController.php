<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view("login");
    }

    public function register()
    {
        return view("register");
    }

    public function createUser(Request $request)
    {
        $formFields = $request->validate([
            "name" => "required",
            "email" => ["required", "email"],
            "password" => "required|confirmed",
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
            return redirect("/login/")->with("message", "Login Success, lol");
            //return back()->with("message", "Login Success, welcome");
        }else{
            return redirect("/login/")->with("message", "your email and password is wrong nigga, lol");
        }
    }

    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            "name" => "required",
            "password" => "required",
        ]);

        if (auth()->attempt($formFields)) {
            return redirect("/login/")->with("message", "Login Success, lol");
           //return back()->with("message", "Login Success, welcome");
        }

        return back()->withErrors(['name' => 'Invalid Credentials'])->onlyInput("name");
    }
}
