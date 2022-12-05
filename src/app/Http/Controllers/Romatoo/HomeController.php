<?php

namespace App\Http\Controllers\Romatoo;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {
        return view('Romatoo.login');
    }

    public function registration()
    {
        return view('Romatoo.register');
    }

    public function validate_registration(RegisterRequest $request)
    {

        $data = $request->all();

        $user = User::create([
            'fname'  =>  $data['fname'],
            'lname'  =>  $data['lname'],
            'email' =>  $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        return redirect('login')->with('success', 'Registration Completed! Now you can login.');
    }

    public function validate_login(LoginRequest $request)
    {

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials))
        {
            return redirect('dashboard');
        }

        return redirect('login')->with('success', 'Login details are not valid');
    }

    public function dashboard()
    {
        if(Auth::check())
        {
            return view('Romatoo.dashboard');
        }

        return redirect('login')->with('success', 'you are not allowed to access');
    }

    public function logout()
    {
        Session::flush();

        Auth::logout();

        return Redirect('login');
    }

}
