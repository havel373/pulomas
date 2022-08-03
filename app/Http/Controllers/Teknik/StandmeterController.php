<?php

namespace App\Http\Controllers\Teknik;

use App\Models\Ruang;
use App\Models\Standmeter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tarif;
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
        $tarif = Tarif::get();
        $ruangs = Ruang::all();
        return view('pages.teknik.standmeter.input', ['data' => new Standmeter, 'ruangs' => $ruangs, 'tarif' => $tarif]);
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
        $file = request()->file('foto_standmeter')->store('foto_standmeter');
        $standmeters = [
            // 'tenant_id' => $request->id_gedung,
            'daya' => $request->daya,
            'standmeter_awal' => $request->standmeter_awal,
            'standmeter_akhir' => $request->standmeter_akhir,
            'pemakaian' => $request->pemakaian,
            'biaya_pemakaian' => $request->biaya_pemakaian,
            'bpju' => $request->harga,
            'bpju' => $request->bpju,
            'jumlah_tagihan' => $request->jumlah_tagihan,
            'foto_standmeter' => $file,
        ];
        Standmeter::create($standmeters);

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
        $tarif = Tarif::get();
        $ruangs = Ruang::all();
        return view('pages.teknik.standmeter.input', ['data' => $standmeter, 'ruangs' => $ruangs, 'tarif' => $tarif]);
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
            'daya' => 'required',
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
        if(request()->file('foto_standmeter')){
            $file = request()->file('foto_standmeter')->store('foto_standmeter');
        }else{
            $file = $standmeter->foto_standmeter;
        }
        $standmeters = [
            // 'tenant_id' => $request->id_gedung,
            'daya' => $request->daya,
            'standmeter_awal' => $request->standmeter_awal,
            'standmeter_akhir' => $request->standmeter_akhir,
            'pemakaian' => $request->pemakaian,
            'biaya_pemakaian' => $request->biaya_pemakaian,
            'bpju' => $request->harga,
            'bpju' => $request->bpju,
            'jumlah_tagihan' => $request->jumlah_tagihan,
            'foto_standmeter' => $file,
        ];
        $standmeter->update($standmeters);

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
   
    public function getHarga(Request $request)
    {
        $tarif = Tarif::where('id', $request->id)->first();
        return response()->json($tarif);
    }
}
