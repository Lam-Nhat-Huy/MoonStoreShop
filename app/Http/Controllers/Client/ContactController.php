<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactStoreRequest;
use App\Mail\ContactEmail;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('client.contact.index');
    }

    public function sendMail(ContactStoreRequest $request)
    {
        $email = 'lamnhathuy0393418721@gmail.com';
        $body = $request->input('body');
        $yourEmail = $request->input('your-email');

        Mail::to($email)->send(new ContactEmail($email, $yourEmail, $body));
        return redirect()->route('contact.index')->with('success', 'Bạn đã gửi phản hồi thành công');
    }
}
