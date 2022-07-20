<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\Teknik;
use Illuminate\Http\Request;

class UserTeknikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax() ) {
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
        return view('pages.superadmin.marketing.input', ['data' => new Teknik]);
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
        //
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
        //
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
