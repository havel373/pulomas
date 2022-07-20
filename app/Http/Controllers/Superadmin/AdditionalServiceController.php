<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\AdditionalService;
use App\Models\Marketing;
use App\Models\Teknik;
use Illuminate\Http\Request;

class AdditionalServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax() ) {
            $collection = AdditionalService::paginate(10);
            return view('pages.superadmin.AdditionalService.list', compact('collection'));
        }
        return view('pages.superadmin.AdditionalService.main');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marketings = Marketing::get();
        $tekniks = Teknik::get();
        return view('pages.superadmin.AdditionalService.input', ['data' => new AdditionalService, 'marketings' => $marketings, 'tekniks' => $tekniks]);
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
     * @param  \App\Models\AdditionalService  $additionalServices
     * @return \Illuminate\Http\Response
     */
    public function show(AdditionalService $additionalService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdditionalService  $additionalServices
     * @return \Illuminate\Http\Response
     */
    public function edit(AdditionalService $additionalService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdditionalService  $additionalServices
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdditionalService $additionalService)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdditionalService  $additionalServices
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdditionalService $additionalService)
    {
        //
    }
}
