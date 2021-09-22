<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\returnSelf;

class ChangePasswordController extends Controller
{
   /**
    * show change pass form
    */
  public function index()
  {
   return view('admin.password-change');
  }

  /**
    * change password
    */

    public function changePass(Request $request)
    {
      
    $this-> validate($request, [

      // validation system
     'old_pass' => 'required',
     'password' => ['required', 'min:5','confirmed']

    ]);

    // check old password

    if(password_verify($request-> password, Auth::user()->password)){

             return "change is okay";
    }else{

       return back()->with('warning', 'old password is not match');
    }

}
}