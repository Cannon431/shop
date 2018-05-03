<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Cart;

class UsersController extends Controller
{
    public function account()
    {
        return view('user.user', [
            'cartCount' => Cart::count(Auth::id())
        ]);
    }

    public function editForm()
    {
        return view('user.edit-form', [
            'cartCount' => Cart::count(Auth::id())
        ]);
    }

    public function edit(Request $request)
    {
        $this->validate($request, [
            'name' => 'string|max:255',
            'email' => 'string|email|max:255',
            'password' => ''
        ]);

        $user = User::find(Auth::id());

        if (mb_strlen($request->name) != 0) {
            $user->name = $request->name;
        }

        if (mb_strlen($request->email) != 0) {
            $user->email = $request->email;
        }

        if (mb_strlen($request->password) != 0) {
            $user->password = bcrypt($request->password);
        }

        $user->save();

        return back();
    }
}
