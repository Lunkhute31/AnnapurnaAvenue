<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    public function UpdateUserProfile(){
        return view('frontend.dashboard.layouts.profile');
    }
    public function displayDashboard(){
        return view('frontend.dashboard.dashboard');
    }
    public function UpdateProfile(Request $request){
        $request->validate([
            'email'=>['required','email'],
            'name'=>['required','max:100']
        ]);

        $user=Auth::user();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->save();
        toastr()->success('Profile Updated Successfully');
    }
}
