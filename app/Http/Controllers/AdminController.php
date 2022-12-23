<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use Session;

class AdminController extends Controller
{
    function showLoginPage() {
        if (Session()->has('member')) {
            return redirect('app');
        } else {
            return view('login');
        }
    }

    function authenticateAdmin(Request $userDetails) {
        $user = Admin::where(['username'=> $userDetails->username])->first();

        if ($user && Hash::check($userDetails->password, $user->password)) {
            Session()->put('member', $user->username);
            return redirect('app');
        } else {
            Session()->flash('status', 'Invalid Username or Password');
            return redirect('/signin');
        }
    }

    function showAdminPanelToAdmin() {
        if (Session()->has('member')) {
            return view('dashboard');
        } else {
            return redirect('signin');
        }
    }

    function showAddUsersPage() {
        $all_users = Admin::all();

        return view('add_users')->with('all_users',$all_users->toArray());
    }

    function addNewUserDetails(Request $userDetails) {
        $userTable = new Admin();
        $res = Admin::where(['username'=>$userDetails->username])->first();

        if($res){
            Session()->flash('status', 'User is Already Exists.');

            return redirect('/app/users/add');
        } else if ($userDetails->username != null && $userDetails->password != null) {
            if ($userDetails->password == $userDetails->confPass) {
                $userTable->full_name = $userDetails->full_name;
                $userTable->username = $userDetails->username;
                $userTable->password = Hash::make($userDetails->password);

                $userTable->save();

                Session()->flash('status', 'User Registration Successfully.');
                return redirect('/app/users/add');
            } else {
                Session()->flash('status', 'Password Doesnt Match.');
                return redirect('/app/users/add');
            }
        } else {
            Session()->flash('status', 'Please Fill All Feilds Before Registration');
            return redirect('/app/users/add');
        }
    }
}
