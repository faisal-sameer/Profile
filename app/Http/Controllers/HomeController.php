<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Profilecontact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    // public function editProfile()
    // {
    //
    //
    //     $user = Auth::user();
    //     $userData = User::find($user->id);
    //
    //     $otherData = Profilecontact::find($user->id);
    //
    //     return view('editProfile', ['userData' => $userData, 'otherData' => $otherData]);
    // }
    public function Profile()
    {

        //   $user = Auth::user();
        $userData = User::find(1);
        //dd($user); // Dump the value of $user

        $otherData = Profilecontact::find(1);

        return view('Profile', ['userData' => $userData, 'otherData' => $otherData]);
    }
}
