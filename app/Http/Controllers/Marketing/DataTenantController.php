<?php

namespace App\Http\Controllers\Marketing;

use App\Http\Controllers\Controller;
use App\Models\GradeTenant;
use App\Models\Tenant;
use Illuminate\Http\Request;

class DataTenantController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax() ) {
            $collection = Tenant::paginate(10);
            return view('pages.marketing.tenant.list', compact('collection'));
        }
        return view('pages.marketing.tenant.main');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.marketing.tenant.input', ['data' => new Tenant]);
    }
   
    public function createGrade()
    {
        $grade = GradeTenant::get();
        return view('pages.marketing.tenant.inputGrade', ['data' => new Tenant, 'grade' => $grade]);
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
    
    public function storeGrade(Request $request)
    {
        return response()->json([
            'alert' => 'success',
            'message' => 'Data berhasil ditambahkan'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tenant  $tenant
     * @return \Illuminate\Http\Response
     */
    public function show(Tenant $dataTenant)
    {
        return view('pages.marketing.tenant.show', ['data' => $dataTenant]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tenant  $tenant
     * @return \Illuminate\Http\Response
     */
    public function edit(Tenant $dataTenant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tenant  $tenant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tenant $dataTenant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tenant  $tenant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tenant $dataTenant)
    {
        //
    }
}
