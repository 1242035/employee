<?php

namespace App\Http\Controllers\Admin;

use Mail;
use Session;
use Hash;
use App\Mailers\AppMailer;
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

    public function postAdduser(AddAdminRequest $request, AppMailer $mailer)
    {
        $hashed_random_password = Hash::make(str_random(8));

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $hashed_random_password;
        $user->save();

        $mailer->sendEmailConfirmationTo($user);

        $request->session()->flash('success', 'New Admin Account have been successful added! Just one more step: Please check the email and follow the instructions to complete the sign up process');

        return redirect('auth/adduser');
    }

}
