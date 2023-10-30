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
    protected function EditProfile(Request $request)
    {
        $user = User::find(auth()->user()->id);
        $profileContact = Profilecontact::where('user_id', $user->id)->first();


        if (!$user) {
            $user = new User();
            $user->id;
        }
        $inputName = $request->input('Name');
        $inputemail = $request->input('email');

        // Check if the input is not empty before updating
        if (!empty($inputemail)) {
            $user->email = $inputemail;
        }


        if (!$profileContact) {
            $profileContact = new Profilecontact();
            $profileContact->user_id = $user->id;
        }
        $inputSpecialty = $request->input('Specialty');
        $inputPhone = $request->input('phone');
        $inputLinkdin = $request->input('Linkdin');
        $inputgithub = $request->input('github');

        // Check if the input is not empty before updating
        if (!empty($inputSpecialty)) {
            $profileContact->Specialty = $inputSpecialty;
        }

        if (!empty($inputPhone)) {
            $profileContact->phone = $inputPhone;
        }

        if (!empty($inputLinkdin)) {
            $profileContact->Linkdin = $inputLinkdin;
        }
        if (!empty($inputgithub)) {
            $profileContact->github = $inputgithub;
        }
        $profileContact->save();
        $user->save();
        return view('editProfile', compact('profileContact', 'user'));
    }
}
