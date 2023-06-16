<?php

namespace App\Http\Controllers;

use App\Models\Sepatu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class WebsiteController extends Controller
{

    public function home()
    {
        $products = Sepatu::orderBy('id', 'desc')->take(12)->get();
        return view('sepatu.front.welcome', compact('products'));
    }

    public function login()
    {
        return view('auth.login');
    }

    public function login_submit(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('login');
        }
    }

    public function registration()
    {
        return view('auth.registration');
    }

    public function registration_submit(Request $request)
    {

        // $token = hash('sha256', time());

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        // $user->status = 'Pending';
        // $user->token = $token;
        $user->save();

        // $verification_link = url('registration/verify/'.$token.'/'.$request->email);
        // $subject = 'Registration Confirmation';
        // $message = 'Please click on this link: <br><a href="'.$verification_link.'">Click here</a>';

        // \Mail::to($request->email)->send(new Websitemail($subject,$message));

        return redirect()->route('login')->with('success', 'You are successfully registered');
    }

    public function logout()
    {
        Auth::guard('web')->logout();

        return redirect()->route('home');
    }
}
