<?php

namespace App\Http\Controllers\Teknik;

use App\Http\Controllers\Controller;
use App\Models\KelolaDayaTenant;
use App\Models\Tarif;
use App\Models\Tenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DayaTenantController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $collection = Tenant::paginate(10);
            return view('pages.teknik.tenant.list', compact('collection'));
        }
        return view('pages.teknik.tenant.main');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.teknik.tenant.input', ['data' => new Tenant]);
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
     * @param  \App\Models\Tenant  $tenant
     * @return \Illuminate\Http\Response
     */
    public function show(Tenant $daya_tenant)
    {
        $daya = Tarif::get();
        return view('pages.teknik.tenant.show', ['data' => $daya_tenant, 'daya' => $daya]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tenant  $tenant
     * @return \Illuminate\Http\Response
     */
    public function edit(Tenant $tenant)
    {
        return view('pages.teknik.tenant.input', ['data' => $tenant]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tenant  $tenant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tenant $tenant)
    {
        $validator = Validator::make($request->all(), [
            'tarif_id' => 'required',
            'daya_terpasang.*' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first()
            ]);
        }

        $kelola_daya_tenant = KelolaDayaTenant::where('tenant_id', $tenant->id)->get();
        if ($kelola_daya_tenant == null) {
            $kelola_daya_tenant = new KelolaDayaTenant();
        } else {
            $kelola_daya_tenant = $kelola_daya_tenant;
        }

        $kelola_daya_tenant->tenant_id = $tenant->id;
        $kelola_daya_tenant->tarif_id = $request->tarif_id;
        $kelola_daya_tenant->daya_terpasang = json_encode($request->daya_terpasang);
        $kelola_daya_tenant->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Data berhasil ditambahkan'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tenant  $tenant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tenant $tenant)
    {
        //
    }
}
