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
