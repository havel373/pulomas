<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\Marketing;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserMarketingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $collection = Marketing::paginate(10);
            return view('pages.superadmin.marketing.list', compact('collection'));
        }
        return view('pages.superadmin.marketing.main');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.superadmin.marketing.input', ['data' => new Marketing]);
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
            'nomor_hp' => 'required|numeric|unique:marketings',
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
            'role' => 'marketing',
        ]);

        Marketing::create([
            'user_id' => User::where('email', $request->email)->first()->id,
            'status_pegawai' => $request->status_pegawai,
            'nomor_hp' => $request->nomor_hp,
            'status' => $request->status,
            'created_by' => Auth::user()->id
        ]);

        return response()->json([
            'alert' => 'success',
            'message' => 'Data berhasil ditambahkan'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Marketing  $marketing
     * @return \Illuminate\Http\Response
     */
    public function show(Marketing $marketing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Marketing  $marketing
     * @return \Illuminate\Http\Response
     */
    public function edit(Marketing $marketing)
    {
        return view('pages.superadmin.marketing.input', ['data' => $marketing]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Marketing  $marketing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Marketing $marketing)
    {
        $validator = Validator::make($request->all(), [
            'nama_marketing' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $marketing->id,
            'password' => 'required|string|min:8',
            'status_pegawai' => 'required',
            'nomor_hp' => 'required|numeric|unique:marketings,nomor_hp,' . $marketing->id,
            'status' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first()
            ]);
        }

        $marketing->user->update([
            'name' => $request->nama_marketing,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        $marketing->update([
            'status_pegawai' => $request->status_pegawai,
            'nomor_hp' => $request->nomor_hp,
            'status' => $request->status,
        ]);

        return response()->json([
            'alert' => 'success',
            'message' => 'Data berhasil ditambahkan'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Marketing  $marketing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marketing $marketing)
    {
        $marketing->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Data berhasil dihapus'
        ]);
    }
}
