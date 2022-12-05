<?php

namespace App\Http\Controllers\Romatoo;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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

    public function validate_registration(Request $request)
    {
        $request->validate([
            'fname'        =>   'required|string|max:255',
            'lname'        =>   'required|string|max:100',
            'email'        =>   'required|email|unique:users',
            'password'     =>   'required|min:8'
        ]);

        $data = $request->all();

        $user = User::create([
            'fname'  =>  $data['fname'],
            'lname'  =>  $data['lname'],
            'email' =>  $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        return redirect('Romatoo.login')->with('success', 'Registration Completed! Now you can login.');
    }

    public function logout()
    {
        
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
