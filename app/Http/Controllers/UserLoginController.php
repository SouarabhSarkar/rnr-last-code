<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_Login;
use App\Models\User;
use App\Models\Contact_Item;
use Auth;

class UserLoginController extends Controller
{

    // public function create(Request $request)
    // {
        
    //     //return $request->all();

    //     $request->validate([
    //         'email' => 'required',
    //         'password' => 'required'    
    //     ]);

    //     $contact_item = Contact_Item::where('value', '=',$request->email)->first();
    //     if($contact_item)
    //     {   
    //         $user = User::where([
    //             ['contact_id', '=', $contact_item->belongs_to],
    //             ['password', '=' , sha1($request->password)]
    //             ])->first();
    //         if(!$user)
    //         {
    //             return 'error';
    //         }
    //         else
    //         {
    //             Auth::login($user);
    //             return redirect('/navbar');
    //         }
    //     }
    //     else
    //     {
    //         return 'false'; 
            
    //     }

        // $user = User::where([
        //     ['email','=',$request->email],
        //     ['password','=',sha1($request->password)]
        // ])->first();
        // if(!$user)
        // {
        //     return 'Not Found';
        // }
        // else
        // {
        //     Auth::login($user);
        //     return redirect('/dashboard');
        // }
    // }

    // public function logout(Request $request) {
    //     Auth::logout();
    //     return redirect('/login');
    //   }
}
