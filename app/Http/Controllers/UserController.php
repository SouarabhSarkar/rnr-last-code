<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact_Item;
use Auth;
use App\Notifications\AccountVerification;
use Illuminate\Support\Facades\Notification;
use App\Mail\accountVEmail;
class UserController extends Controller
{
    public function index()
    {
        \Mail::to('sarkarsourabh1223334@gmail.com')->send(new accountVEmail());
        // return (new AccountVerification())->toMail('sarkarsourabh1223334@gmail.com');
        // $users = Contact_Item::first();
        // dd($users);
        // Notification::send($users, new AccountVerification());
        // // dd(');
    }
        
}


