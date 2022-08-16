<?php

namespace App\Http\Controllers;

use App\Models\Keuangan;
use App\Models\Marketing;
use App\Models\Teknik;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index()
    {
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
            } else {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('password'),
                ]);
            }
        }
        $check = User::where("email", $request->email)->first();
        $user = $request->all();
        if ($check) {
            if ($check->role == 'superadmin' || $check->role == 'tenant') {
                if (Auth::attempt($user)) {
                    return response()->json([
                        'alert' => 'success',
                        'message' => 'Selamat Datang Kembali ' . Auth::user()->nama,
                        'callback' => route('dashboard'),
                    ]);
                } else {
                    return response()->json([
                        'alert' => 'error',
                        'message' => 'Password salah!',
                    ]);
                }
            } elseif ($check->role == 'teknik') {
                if (Auth::attempt($user)) {
                    return response()->json([
                        'alert' => 'success',
                        'message' => 'Selamat Datang Kembali ' . Auth::user()->nama,
                        'callback' => route('dashboard'),
                    ]);
                } else if ($check->teknik->status == 'tidak aktiv') {
                    return response()->json([
                        'alert' => 'error',
                        'message' => 'akun anda nonaktif'
                    ]);
                } else {
                    return response()->json([
                        'alert' => 'error',
                        'message' => 'Password salah!',
                    ]);
                }
            } elseif ($check->role == 'marketing') {
                if (Auth::attempt($user)) {
                    return response()->json([
                        'alert' => 'success',
                        'message' => 'Selamat Datang Kembali ' . Auth::user()->nama,
                        'callback' => route('dashboard'),
                    ]);
                } else if ($check->marketing->status == 'tidak aktiv') {
                    return response()->json([
                        'alert' => 'error',
                        'message' => 'akun anda nonaktif'
                    ]);
                } else {
                    return response()->json([
                        'alert' => 'error',
                        'message' => 'Password salah!',
                    ]);
                }
            } elseif ($check->role == 'keuangan') {
                if (Auth::attempt($user)) {
                    return response()->json([
                        'alert' => 'success',
                        'message' => 'Selamat Datang Kembali ' . Auth::user()->nama,
                        'callback' => route('dashboard'),
                    ]);
                } else if ($check->keuangan->status == 'tidak aktiv') {
                    return response()->json([
                        'alert' => 'error',
                        'message' => 'akun anda nonaktif'
                    ]);
                } else {
                    return response()->json([
                        'alert' => 'error',
                        'message' => 'Password salah!',
                    ]);
                }
            }
        } else {
            return response()->json([
                'alert' => 'error',
                'message' => 'email tidak ditemukan!',
            ]);
        }
    }

    public function profile()
    {
        $user = Auth::user();
        $test = User::where('id', Auth::user()->id)->first();
        if ($user->role == 'teknik') {
            $data = $user->teknik;
        } elseif ($user->role == 'superadmin') {
            $data = $user;
        } elseif ($user->role == 'marketing') {
            $data = $user->marketing;
        } elseif ($user->role == 'keuangan') {
            $data = $user->keuangan;
        } elseif ($user->role == 'tenant') {
            $data = $user->tenant;
        }
        return view('pages.auth.profile', compact('user', 'data'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        if ($user->role == 'teknik' || $user->role == 'marketing' || $user->role == 'keuangan') {
            $validator = Validator::make($request->all(), [
                'nama' => 'required',
                'nomor_hp' => 'required',
                'email' => 'required|email|max:255',
            ]);
        } elseif ($user->role == 'tenant') {
            $validator = Validator::make($request->all(), [
                'nama' => 'required',
                'email' => 'required|email|max:255',
                'nama_instansi' => 'required',
                'nomor_hp_instansi' => 'required',
                'nama_penanggungjawab' => 'required',
                'nomor_hp_penanggungjawab' => 'required',
                'alamat_penanggungjawab' => 'required',
            ]);
        } else {
            $validator = Validator::make($request->all(), [
                'nama' => 'required',
                'email' => 'required|email|max:255',
            ]);
        }

        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ]);
        }
        if ($request->password) {
            $validator = Validator::make($request->all(), [
                'password' => 'required|min:8',
            ]);
            if ($validator->fails()) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $validator->errors()->first(),
                ]);
            }
        }
        $user = User::find($user->id);
        if ($user->role == 'teknik') {
            if ($request->password) {
                $user->update([
                    'nama' => $request->nama,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                ]);
            } else {
                $user->update($request->except('_token', 'nomor_hp'));
            }
            $user->teknik->update($request->only('nomor_hp'));
        } elseif ($user->role == 'marketing') {
            if ($request->password) {
                $user->update([
                    'nama' => $request->nama,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                ]);
            } else {
                $user->update($request->except('_token', 'nomor_hp'));
            }
            $user->marketing->update($request->only('nomor_hp'));
        } elseif ($user->role == 'keuangan') {
            if ($request->password) {
                $user->update([
                    'nama' => $request->nama,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                ]);
            } else {
                $user->update($request->except('_token', 'nomor_hp'));
            }
            $user->keuangan->update($request->only('nomor_hp'));
        } elseif ($user->role == 'tenant') {
            if ($request->password) {
                $user->update([
                    'nama' => $request->nama,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                ]);
            } else {
                $user->update($request->except('_token', 'nomor_hp'));
            }
            $user->tenant->update([
                'nama_instansi' => $request->nama_instansi,
                'nomor_hp_instansi' => $request->nomor_hp_instansi,
                'nama_penanggungjawab' => $request->nama_penanggungjawab,
                'nomor_hp_penanggungjawab' => $request->nomor_hp_penanggungjawab,
                'nomor_ktp_penanggungjawab' => $request->nomor_ktp_penanggungjawab,
                'nomor_npwp' => $request->nomor_npwp,
                'ktp_penanggungjawab' => $request->ktp_penanggungjawab,
                'npwp_penanggungjawab' => $request->npwp_penanggungjawab,
                'industri' => json_encode($request->industri),
                'status_tenant' => json_encode($request->status_tenant),
                'alamat_penanggungjawab' => $request->alamat_penanggungjawab,
            ]);
        } else {
            if ($request->password) {
                $user->update([
                    'nama' => $request->nama,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                ]);
            } else {
                $user->update($request->except('_token', 'nomor_hp'));
            }
        }

        return response()->json([
            'alert' => 'success',
            'message' => 'Berhasil diperbarui!',
        ]);
    }

    public function do_logout()
    {
        $user = Auth::user();
        Auth::logout($user);
        return redirect()->route('auth.index');
    }
}
