<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profilecontact;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    protected function EditProfile()
    {
        return view('editProfile');
    }
}
