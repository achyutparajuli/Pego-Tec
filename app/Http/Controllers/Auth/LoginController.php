<?php

namespace App\Http\Controllers\Auth;

use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index()
    {
        if (Auth::check() && Auth::User()->role == 'admin')
        {
            toastr()->info('You are already logged-in!');
            return redirect()->route('admin.dashboard');
        }

        if (Auth::check() && Auth::User()->role == 'user')
        {
            toastr()->info('You are already logged-in!');
        }
        return view('auth.login');
    }

    public function submit(Request $request)
    {
        try
        {
            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required',
            ]);

            if ($validator->fails())
            {
                toastr()->warning('Please check your form and try again!');
                return redirect()->back()
                    ->withInput($request->input())
                    ->withErrors($validator->errors());
            }

            if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'status' => 1])) // to confirm if user is active
            {
                toastr()->success('Login Success!');
                if (Auth::User()->role == 'admin')
                {
                    // send amdin to dashbaord.
                    return redirect()->route('admin.dashboard');
                }
                // if not admin then default
                return redirect()->route('web.home');
            }
            else
            {
                toastr()->error('Invalid credentials Given!');
                return redirect()->back()->withInput($request->input());
            }
        }
        catch (Exception $e)
        {
            toastr()->error($e->getMessage());
            return redirect()->back()->withInput($request->input())
                ->withErrors($validator->errors());
        }
    }

    public function logout()
    {
        Auth::logout();
        toastr()->success('Logout succesfull!');
        return redirect()->route('web.home'); // Redirect to the home page or any other page
    }
}
