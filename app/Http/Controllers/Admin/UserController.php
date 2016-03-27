<?php

namespace App\Http\Controllers\Admin;

use Session;
use Hash;
use Illuminate\Http\Request;
use App\Http\Requests\AddAdminRequest;
use App\User;
use Validator;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getAdduser()
    {
        return view('auth.adduser');
    }

    public function postAdduser(AddAdminRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        $request->session()->flash('success', 'New Admin Account have been successful added!');
        return redirect('auth/adduser');
    }

}
