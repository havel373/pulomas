<?php

namespace App\Http\Controllers\Superadmin;

use App\Models\User;
use App\Models\Teknik;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class UserTeknikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $collection = Teknik::paginate(10);
            return view('pages.superadmin.teknik.list', compact('collection'));
        }
        return view('pages.superadmin.teknik.main');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.superadmin.teknik.input', ['data' => new Teknik]);
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
            'nomor_hp' => 'required|numeric|unique:teknik',
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
            'role' => 'teknik',
        ]);

        Teknik::create([
            'user_id' => User::where('email', $request->email)->first()->id,
            'status_pegawai' => $request->status_pegawai,
            'nomor_hp' => $request->nomor_hp,
            'status' => $request->status,
        ]);

        return response()->json([
            'alert' => 'success',
            'message' => 'Berhasil menambah data'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teknik  $teknik
     * @return \Illuminate\Http\Response
     */
    public function show(Teknik $teknik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teknik  $teknik
     * @return \Illuminate\Http\Response
     */
    public function edit(Teknik $teknik)
    {
        return view('pages.superadmin.teknik.input', ['data' => $teknik]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teknik  $teknik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teknik $teknik)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $teknik->user_id,
            'nomor_hp' => 'required|numeric|unique:teknik,nomor_hp,' . $teknik->id,
            'status' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first()
            ]);
        }

        $teknik->user->update([
            'nama' => $request->nama,
            'email' => $request->email,
        ]);

        $teknik->update([
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
     * @param  \App\Models\Teknik  $teknik
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teknik $teknik)
    {
        //
    }
}
