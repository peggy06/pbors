<?php

namespace App\Http\Controllers\Client;

use App\Http\Requests\NewPasswordStoreRequest;
use App\Http\Controllers\Controller;

class PasswordController extends Controller
{

    public function reset()
    {
        return view('passwords.reset');
    }

    public function store(NewPasswordStoreRequest $request)
    {
        $request->user()->update(['password' => bcrypt($request->get('password'))]);
        return redirect()->back()->with('success', 'Successfully changed password!');
    }

}
