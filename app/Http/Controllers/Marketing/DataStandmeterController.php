<?php

namespace App\Http\Controllers\Marketing;

use App\Http\Controllers\Controller;
use App\Models\Ruang;
use App\Models\Standmeter;
use App\Models\Tarif;
use Illuminate\Http\Request;

class DataStandmeterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax() ) {
            $collection = Standmeter::paginate(10);
            return view('pages.marketing.standmeter.list', compact('collection'));
        }
        return view('pages.marketing.standmeter.main');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Standmeter $dataStandmeter)
    {
        $tarif = Tarif::get();
        $ruangs = Ruang::all();
        return view('pages.marketing.standmeter.input', ['data' => $dataStandmeter, 'ruangs' => $ruangs, 'tarif' => $tarif]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Standmeter  $standmeter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Standmeter $standmeter)
    {
        //
    }
}
