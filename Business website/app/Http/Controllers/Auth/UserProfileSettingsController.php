<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserProfileSettingsController extends Controller
{
    //show user profile settings

    public function index()
    {
        $user_data = User::find(Auth::user()->id);

        return view('admin.user-profile-settings', [

        'user_data'   => $user_data,
        'social'  => json_decode($user_data-> social, false)

        ]);
    }

    /**
     * user profile update
     */

public function userProfileUpdate(Request $request)
{
   
   // Get user data
   $user_data = User::find(Auth::user()->id);

   $unique_name = $this -> fileUpload($request, 'media/users/', $user_data-> photo);
   
   
   // social profile info

   $social =[

    'fb'     => $request-> fb,
    'tw'     => $request-> tw,
    'linkd'     => $request-> linkd,
    'insta'     => $request-> insta,

   ];
    
    $user_data-> name = $request-> name;
    $user_data-> username = $request-> username;
    $user_data-> email = $request-> email;
    $user_data-> cell = $request-> cell;
    $user_data-> address = $request-> address;
    $user_data-> biography = $request-> biography;
    $user_data-> photo = $unique_name;
    $user_data-> social = $social;
    $user_data-> update();
    return back();

    
}
public function userProfileUpdateQuick(Request $request)
{
   return User::all();
}
    
}
