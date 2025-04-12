<?php

namespace App\Http\Controllers;

use App\Models\UsersModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index (){
        return view ('auth.login_layout');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $users = UsersModel::where('email', $credentials['email'])->first();

        if ($users && Hash::check($credentials['password'], $users->password)) {
            Session::put('users_id', $users->id);
            Session::put('users_name', $users->name);
            Session::put('users_username', $users->username);
            Session::put('users_email', $users->email);
            Session::put('users_photo', $users->photo_profile);
            Session::put('users_role', $users->role);

            $roleRedirects = [
                'admin' => route('dashboard.admin'),
                'hotel_owner' => route('dashboard.hotelowners'),
                'user' => route('home_login'),
            ];

            if (!array_key_exists($users->role, $roleRedirects)) {
                return response()->json([
                    'success' => false,
                    'message' => 'Role tidak dikenali atau tidak punya akses!'
                ], 403);
            }

            return response()->json([
                'success' => true,
                'message' => 'Login berhasil!',
                'redirect' => $roleRedirects[$users->role]
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Email atau password salah!'
        ], 401);
    }


    public function indexdaftar()
    {
        return view('auth.register_layout');
    }

    public function register(Request $request)
    {
        response()->json($request->all()); 
    
        $validatedData = $request->validate([
            'username' => 'required|string|max:15',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required',
        ]);
    
        $users = UsersModel::create([
            'username'=> $validatedData['username'],
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
            'role' => 'user',
        ]);
    
        return response()->json([
            'success' => true,
            'message' => 'Pendaftaran berhasil! Silakan login.',
            'redirect' => route('users.login')
        ]);
    }
    
    public function logout(Request $request)
    { 
        Session::flush();
        return redirect()->route('users.login')->with('success', 'Anda telah logout.');
    }
}
