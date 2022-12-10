<?php

use Illuminate\Support\Facades\Auth;
  
if(!function_exists('logged_in_id'))
{
    function logged_in_id()
    {
        $id = Auth::id();

        return $id;
    }
}

if(!function_exists('user_info'))
{
    function user_info()
    {
        $user = Auth::user();

        return $user;
    }
}

if(!function_exists('user_login_ok'))
{
    function user_login_ok()
    {
        return Auth::check();
    }
}

if(!function_exists('text'))
{
    function user_logout()
    {
        Auth::logout();
    }
}

