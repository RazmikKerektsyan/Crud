<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get()->toArray();
        //poxancel viwe
        //dd($users);
        return view('user.index', ['name' => '<script>alert(11);</script>','users'=>$users]);
    }



}
