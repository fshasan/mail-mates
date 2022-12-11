<?php

namespace App\Http\Controllers\Romatoo;

use App\Models\User;
use App\Models\Email;
use App\Http\Controllers\Controller;
use App\Http\Requests\EmailRequest;
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
            'first_name'  =>  $data['fname'],
            'last_name'  =>  $data['lname'],
            'email' =>  $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        return redirect('login')->with('success', 'Registration Completed! Now you can login.');
    }

    public function validate_login(LoginRequest $request, User $credentials)
    {

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials))
        {
            $user = user_info();

            return redirect()->route('dashboard', ['user_id' => $user['id']]);
        }

        return redirect('login')->with('success', 'Login details are not valid');
    }

    public function dashboard()
    {

        if(Auth::check())
        {   
            $user = user_info();

            $emails = Email::whereJsonContains('recievers', ['email' => $user['email']])->latest()->filter(request()->all())->paginateFilter();
            
            return view('Romatoo.dashboard', compact('user', 'emails'));
        }

        return redirect('login')->with('success', 'you are not allowed to access');
    }

    public function sendEmail(EmailRequest $request)
    {
        $data = $request->all();

        $getMail = explode(",", $data['recipient']);

        for($i = 0; $i < count($getMail); $i++)
        {
            $getMail[$i] = str_replace(' ', '', $getMail[$i]);
        }

        $user = user_info();

        $email = Email::create([
            'sender' => $user['email'],
            'recievers' => [
                'email' => $getMail,
                'total' => count($getMail),
            ],
             'email_type' => $data['type'],
             'subject' => $data['subject'],
             'body' => $data['message']
        ]);

        $email->save();

        return redirect()->route('dashboard', ['user_id' => logged_in_id()])->with('success', 'Mail Sent Successfully!');
    }

    public function logout()
    {
        Session::flush();

        Auth::logout();

        return Redirect('login');
    }

}
