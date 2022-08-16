<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\Aset;
use App\Models\Gedung;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GedungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $collection = Gedung::paginate(10);
            return view('pages.superadmin.gedung.list', compact('collection'));
        }
        return view('pages.superadmin.gedung.main');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $assets = Aset::get();
        return view('pages.superadmin.gedung.input', ['data' => new Gedung, 'assets' => $assets]);
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
            'id_aset' => 'required',
            'nama_gedung' => 'required|string|max:255',
            'kode_aset' => 'required|string|max:255',
            'alamat_gedung' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first()
            ]);
        }

        Gedung::create($request->all());

        return response()->json([
            'alert' => 'success',
            'message' => 'Data berhasil ditambahkan'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gedung  $gedung
     * @return \Illuminate\Http\Response
     */
    public function show(Gedung $gedung)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gedung  $gedung
     * @return \Illuminate\Http\Response
     */
    public function edit(Gedung $gedung)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gedung  $gedung
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gedung $gedung)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gedung  $gedung
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gedung $gedung)
    {
        $gedung->delete();

        return response()->json([
            'alert' => 'success',
            'message' => 'Data berhasil dihapus'
        ]);
    }

    public function getAsset(Aset $asset)
    {
        return response()->json($asset);
    }
}
