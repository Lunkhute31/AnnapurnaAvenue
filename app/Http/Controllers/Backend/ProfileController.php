<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        return view ('admin.profile.index');
    }
    public function updateprofile(Request $request){
        $request->validate([
            'email'=>['required','email'],
            'name'=>['required','max:100']
        ]);
        $user=Auth::user();
        $user->name=$request->name;
        $user->email=$request->email;
        toastr()->success('Profile Updated Successfully');
        return view ('admin.profile.index');
    }

    public function updatepassword(Request $request){
$request->validate([
    'old_password'=>['required','current_password'],
    'password'=>['required','min:8','confirmed']
]);
$request->user()->update([
    'password'=>bcrypt($request->password),
]);
toastr()->success('Password Updated Successfully');
return redirect()->back();
    }
}
