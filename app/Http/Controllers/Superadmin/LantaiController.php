<?php

namespace App\Http\Controllers\Superadmin;

use App\Models\Gedung;
use App\Models\Lantai;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class LantaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $collection = Lantai::paginate(10);
            return view('pages.superadmin.lantai.list', compact('collection'));
        }
        return view('pages.superadmin.lantai.main');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gedungs = Gedung::get();
        return view('pages.superadmin.lantai.input', ['data' => new Lantai, 'gedungs' => $gedungs]);
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
            'id_gedung' => 'required|integer',
            'nama_lantai' => 'required|string|max:255',
            'harga_sewa' => 'required|integer',
            'service_charge' => 'required|integer',
            'service_charge_listrik_sendiri' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first()
            ]);
        }

        Lantai::create($request->all());

        return response()->json([
            'alert' => 'success',
            'message' => 'Data berhasil ditambahkan'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lantai  $lantai
     * @return \Illuminate\Http\Response
     */
    public function show(Lantai $lantai)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lantai  $lantai
     * @return \Illuminate\Http\Response
     */
    public function edit(Lantai $lantai)
    {
        $gedungs = Gedung::get();
        return view('pages.superadmin.lantai.input', ['data' => $lantai, 'gedungs' => $gedungs]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lantai  $lantai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lantai $lantai)
    {
        $validator = Validator::make($request->all(), [
            'id_gedung' => 'required|integer',
            'nama_lantai' => 'required|string|max:255',
            'harga_sewa' => 'required|integer',
            'service_charge' => 'required|integer',
            'service_charge_listrik_sendiri' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first()
            ]);
        }

        $lantai->update($request->all());

        return response()->json([
            'alert' => 'success',
            'message' => 'Data berhasil diubah'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lantai  $lantai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lantai $lantai)
    {
        $lantai->delete();

        return response()->json([
            'alert' => 'success',
            'message' => 'Data berhasil dihapus'
        ]);
    }
}
