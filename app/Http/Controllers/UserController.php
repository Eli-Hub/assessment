<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function fetchUsers(){

        return User::all();
    }

    public function filterUsers(){
        $name = readline("Username: ");
        $role = readline("User Role: ");
        $email = readline("Email: ");
        User::where('name', '=', $name)->orwhere('role', '=', $role)->orwhere('email', '=', $email);

        return $this->filterUsers();
    }


}
