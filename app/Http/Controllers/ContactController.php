<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Cart;

class ContactController extends Controller
{
    const EMAIL = 'b270337ac8-b41f76@inbox.mailtrap.io';

    public function contact()
    {
        $cartCount = Cart::count(Auth::id());

        return view('contact', compact('cartCount'));
    }

    public function sended()
    {
        $cartCount = Cart::count(Auth::id());

        return view('sended', compact('cartCount'));
    }

    public function send(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:25',
            'email' => 'required|email',
            'subject' => 'required|min:3|max/*:50',
            'message' => 'required|min:10|max:5000'
        ], [
            'required' => 'Поле должно быть заполнено!',
            'min' => 'В поле должно быть не меньше :min символов!',
            'max' => 'В поле должно быть не больше :max символов!',
            'email' => 'Неверный E-mail!'
        ]);

        Mail::send(['html' => 'email.contact'], ['request' => $request], function ($message) use ($request) {
            $message->to(self::EMAIL);
            $message->subject($request->subject);
            $message->from($request->email);
        });

        return redirect(url('sended'));
    }
}
