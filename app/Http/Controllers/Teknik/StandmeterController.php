<?php

namespace App\Http\Controllers\Teknik;

use App\Models\Ruang;
use App\Models\Standmeter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class StandmeterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $collection = Standmeter::paginate(10);
            return view('pages.teknik.standmeter.list', compact('collection'));
        }
        return view('pages.teknik.standmeter.main');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ruangs = Ruang::all();
        return view('pages.teknik.standmeter.input', ['data' => new Standmeter, 'ruangs' => $ruangs]);
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
            'tenant_id' => 'required',
            'daya' => 'required',
            'foto_standmeter' => 'required',
            'standmeter_awal' => 'required',
            'standmeter_akhir' => 'required',
            'pemakaian' => 'required',
            'biaya_pemakaian' => 'required',
            'bpju' => 'required',
            'jumlah_tagihan' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'alert' => 'danger',
                'message' => $validator->errors()->first()
            ]);
        }

        Standmeter::create($request->all());

        return response()->json([
            'alert' => 'success',
            'message' => 'Data berhasil ditambahkan'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Standmeter  $standmeter
     * @return \Illuminate\Http\Response
     */
    public function show(Standmeter $standmeter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Standmeter  $standmeter
     * @return \Illuminate\Http\Response
     */
    public function edit(Standmeter $standmeter)
    {
        $ruangs = Ruang::all();
        return view('pages.teknik.standmeter.input', ['data' => $standmeter, 'ruangs' => $ruangs]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Standmeter  $standmeter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Standmeter $standmeter)
    {
        $validator = Validator::make($request->all(), [
            'tenant_id' => 'required',
            'daya' => 'required',
            'foto_standmeter' => 'required',
            'standmeter_awal' => 'required',
            'standmeter_akhir' => 'required',
            'pemakaian' => 'required',
            'biaya_pemakaian' => 'required',
            'bpju' => 'required',
            'jumlah_tagihan' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first()
            ]);
        }

        $standmeter->update($request->all());

        return response()->json([
            'alert' => 'success',
            'message' => 'Data berhasil diubah'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Standmeter  $standmeter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Standmeter $standmeter)
    {
        $standmeter->delete();

        return response()->json([
            'alert' => 'success',
            'message' => 'Data berhasil dihapus'
        ]);
    }
}
