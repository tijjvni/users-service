<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\PostUsersRequest;

class UsersController extends Controller
{

    public function postUser(PostUsersRequest $request)
    {
        dd($request->all());

    }
}
