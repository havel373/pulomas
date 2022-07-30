<?php

namespace App\Http\Controllers\Teknik;

use App\Http\Controllers\Controller;
use App\Models\Tarif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TarifListrikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $collection = Tarif::paginate(10);
            return view('pages.teknik.tarif.list', compact('collection'));
        }
        return view('pages.teknik.tarif.main');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.teknik.tarif.input', ['data' => new Tarif]);
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
            'jenis_tarif' => 'required',
            'daya' => 'required',
            'tarif' => 'required',
            'tarif_dasar' => 'required',
            'bpju' => 'required',
            'kwh_minimum' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first()
            ]);
        }

        Tarif::create($request->all());

        return response()->json([
            'alert' => 'success',
            'message' => 'Data berhasil ditambahkan'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tarif  $tarif
     * @return \Illuminate\Http\Response
     */
    public function show(Tarif $tarif)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tarif  $tarif
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarif $tarif)
    {
        return view('pages.teknik.tarif.input', ['data' => $tarif]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tarif  $tarif
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tarif $tarif)
    {
        $validator = Validator::make($request->all(), [
            'jenis_tarif' => 'required',
            'daya' => 'required',
            'tarif' => 'required',
            'tarif_dasar' => 'required',
            'bpju' => 'required',
            'kwh_minimum' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first()
            ]);
        }

        $tarif->update($request->all());

        return response()->json([
            'alert' => 'success',
            'message' => 'Data berhasil diubah'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tarif  $tarif
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarif $tarif)
    {
        $tarif->delete();

        return response()->json([
            'alert' => 'success',
            'message' => 'Data berhasil dihapus'
        ]);
    }
}
