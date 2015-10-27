<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
class UserController extends Controller
{
    //
    public function getUser()
    {
        $values=User::userName(['Imelda Abernathy'])->get();
        return view('user.user',compact('values'));
    }
}
