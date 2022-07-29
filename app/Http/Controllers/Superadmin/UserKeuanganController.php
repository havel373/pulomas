<?php

namespace App\Http\Controllers\Superadmin;

use App\Models\User;
use App\Models\Keuangan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class UserKeuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $collection = Keuangan::paginate(10);
            return view('pages.superadmin.keuangan.list', compact('collection'));
        }
        return view('pages.superadmin.keuangan.main');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.superadmin.keuangan.input', ['data' => new Keuangan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'status_pegawai' => 'required',
            'nomor_hp' => 'required|numeric|unique:keuangans',
            'status' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first()
            ]);
        }

        User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'keuangan',
        ]);

        Keuangan::create([
            'user_id' => User::where('email', $request->email)->first()->id,
            'status_pegawai' => $request->status_pegawai,
            'nomor_hp' => $request->nomor_hp,
            'status' => $request->status,
        ]);

        return response()->json([
            'alert' => 'success',
            'message' => 'Berhasil menambahkan data'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Keuangan  $keuangan
     * @return \Illuminate\Http\Response
     */
    public function show(Keuangan $keuangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Keuangan  $keuangan
     * @return \Illuminate\Http\Response
     */
    public function edit(Keuangan $keuangan)
    {
        return view('pages.superadmin.keuangan.input', ['data' => $keuangan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Keuangan  $keuangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Keuangan $keuangan)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $keuangan->user->id,
            'password' => 'required|string|min:8',
            'status_pegawai' => 'required',
            'nomor_hp' => 'required|numeric|unique:keuangans,nomor_hp,' . $keuangan->id,
            'status' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first()
            ]);
        }

        $keuangan->user->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        $keuangan->update([
            'status_pegawai' => $request->status_pegawai,
            'nomor_hp' => $request->nomor_hp,
            'status' => $request->status,
        ]);

        return response()->json([
            'alert' => 'success',
            'message' => 'Berhasil mengubah data'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Keuangan  $keuangan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Keuangan $keuangan)
    {
        //
    }
}
