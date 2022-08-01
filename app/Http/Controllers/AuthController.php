<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index(){
        return view('pages.auth.login');
    }

    public function do_login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('email')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('email'),
                ]);
            }else{
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('password'),
                ]);
            }
        }
        $check = User::where("email", $request->email)->first();
        $user = $request->all();
        if ($check) {
            if (Auth::attempt($user)) {
                return response()->json([
                    'alert' => 'success',
                    'message' => 'Selamat Datang Kembali ' . Auth::user()->nama,
                    'callback' => route('dashboard'),
                ]);
            }
            else {
                return response()->json([
                    'alert' => 'error',
                    'message' => 'Password salah!',
                ]);
            }
        }else{
            return response()->json([
                'alert' => 'error',
                'message' => 'email tidak ditemukan!',
            ]);
        }
    }

    public function profile(){
        return view('pages.auth.proifile');
    }

    public function do_logout(){
        $user = Auth::user();
        Auth::logout($user);
        return redirect()->route('auth.index');
    }
}
