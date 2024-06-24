<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest.admin', ['except' => 'doLogout']);
    }
    /**
     * Display a listing of the resource.
     */
    public function getIndex()
    {
        return view('admin.login');
    }

    /**
     * Check login with username and password.
     * @return redirect to dashboard or error_message if login fails
     */
    public function doLogin(Request $request)
    {

        $input = $request->all();

        $credentials = array(
            'username' => $input['username'],
            'password' => $input['password']
        );
        if (auth()->guard('admin')->attempt($credentials)) {
           // session(['ROLE' => auth()->guard('admin')->user()->role]);
            return redirect(ADMIN_SLUG . '/dashboard');

        }
        // authentication failure! lets go back to the login page
        return redirect(ADMIN_SLUG)->with('error_message', 'Invalid username or password')->withInput();
    }

    public function doLogout()
    {
        auth()->guard('admin')->logout();
        session()->flush();
        session()->regenerate();
        return redirect(ADMIN_SLUG)->with('success_message', 'You are successfully logged out.');
    }
}
