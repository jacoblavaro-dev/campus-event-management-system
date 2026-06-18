<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function editAccount($id)
    {
        $data['user'] = User::find($id);
        return view('users.account', $data);
    }
}
