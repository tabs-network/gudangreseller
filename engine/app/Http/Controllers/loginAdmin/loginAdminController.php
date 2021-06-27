<?php

namespace App\Http\Controllers\loginAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginAdminController extends Controller
{
    public function showFormLogin()
    {
        return view('loginAdmin.showFormLogin');
    }

    public function login(Request $request)
    {
        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return view('admin.dashboard.index');
        }
        else
        {
            return 'salah';
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login.admin.showFormLogin');
    }

}
