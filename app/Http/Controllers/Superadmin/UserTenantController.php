<?php

namespace App\Http\Controllers\Superadmin;

use App\Models\Tenant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserTenantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $collection = Tenant::paginate(10);
            return view('pages.superadmin.tenant.list', compact('collection'));
        }
        return view('pages.superadmin.tenant.main');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.superadmin.tenant.input', ['data' => new Tenant]);
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
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'nama_instansi' => 'required|string|max:255',
            'nomor_hp_instansi' => 'required|numeric|unique:tenants',
            'nama_penanggungjawab' => 'required|string|max:255',
            'nomor_hp_penanggungjawab' => 'required|numeric|unique:tenants',
            'industri.*' => 'required|string|max:255',
            'status_tenant.*' => 'required',
            'alamat_penanggungjawab' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first()
            ]);
        }

        User::create([
            'nama' => $request->nama_instansi,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'tenant'
        ]);

        Tenant::create([
            'user_id' => User::where('email', $request->email)->first()->id,
            'nama_instansi' => $request->nama_instansi,
            'nomor_hp_instansi' => $request->nomor_hp_instansi,
            'nama_penanggungjawab' => $request->nama_penanggungjawab,
            'nomor_hp_penanggungjawab' => $request->nomor_hp_penanggungjawab,
            'alamat_penanggungjawab' => $request->alamat_penanggungjawab,
            'industri' => json_encode($request->industri),
            'status_tenant' => json_encode($request->status_tenant)
        ]);

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
    public function show(Tenant $tenant)
    {
        return view('pages.superadmin.tenant.show', ['data' => $tenant]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tenant  $tenant
     * @return \Illuminate\Http\Response
     */
    public function edit(Tenant $tenant)
    {
        return view('pages.superadmin.tenant.input', ['data' => $tenant]);
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
            'nomor_hp_instansi' => 'required|numeric|unique:tenants,nomor_hp_instansi,' . $tenant->id,
            'nama_penanggungjawab' => 'required|string|max:255',
            'nomor_hp_penanggungjawab' => 'required|numeric|unique:tenants,nomor_hp_penanggungjawab,' . $tenant->id,
            'nomor_ktp_penanggungjawab' => 'required|numeric|unique:tenants,nomor_ktp_penanggungjawab,' . $tenant->id,
            'nomor_npwp' => 'required|numeric|unique:tenants,nomor_npwp,' . $tenant->id,
            'industri.*' => 'required|max:255',
            'status_tenant.*' => 'required',
            'alamat_penanggungjawab' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first()
            ]);
        }

        if($request->password){
            $validator = Validator::make($request->all(), [
                'password' => 'required|string|min:8',
            ]);
            if ($validator->fails()) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $validator->errors()->first()
                ]);
            }
            $tenant->user->update([
                'password' => bcrypt($request->password)
            ]);
        }

        if($request->ktp_penanggungjawab || $request->npwp){
            if ($tenant->ktp_penanggungjawab != null){
                Storage::delete($tenant->ktp_penanggungjawab);
            } 
            if ($tenant->npwp != null){
                Storage::delete($tenant->npwp);
            }
            $validator = Validator::make($request->all(), [
                'ktp_penanggungjawab' => 'required',
                'npwp' => 'required',
            ]);
            if ($validator->fails()) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $validator->errors()->first()
                ]);
            }
            $ktp = request()->file('ktp_penanggungjawab')->store('KTP_Penanggungjawab');
            $npwp = request()->file('npwp')->store('NPWP');
            $tenant->update([
                'nama_instansi' => $request->nama_instansi,
                'nomor_hp_instansi' => $request->nomor_hp_instansi,
                'nama_penanggungjawab' => $request->nama_penanggungjawab,
                'nomor_hp_penanggungjawab' => $request->nomor_hp_penanggungjawab,
                'nomor_ktp_penanggungjawab' => $request->nomor_ktp_penanggungjawab,
                'nomor_npwp' => $request->nomor_npwp,
                'ktp_penanggungjawab' => $ktp,
                'npwp' => $npwp,
                'alamat_penanggungjawab' => $request->alamat_penanggungjawab,
                'industri' => json_encode($request->industri),
                'status_tenant' => json_encode($request->status_tenant)
            ]);
        }

        $tenant->user->update([
            'nama' => $request->nama_instansi,
        ]);
        $tenant->update([
            'nama_instansi' => $request->nama_instansi,
            'nomor_hp_instansi' => $request->nomor_hp_instansi,
            'nama_penanggungjawab' => $request->nama_penanggungjawab,
            'nomor_hp_penanggungjawab' => $request->nomor_hp_penanggungjawab,
            'nomor_ktp_penanggungjawab' => $request->nomor_ktp_penanggungjawab,
            'nomor_npwp' => $request->nomor_npwp,
            'alamat_penanggungjawab' => $request->alamat_penanggungjawab,
            'industri' => json_encode($request->industri),
            'status_tenant' => json_encode($request->status_tenant)
        ]);

        return response()->json([
            'alert' => 'success',
            'message' => 'Data berhasil diubah'
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
        $tenant->user->delete();
        $tenant->delete();

        return response()->json([
            'alert' => 'success',
            'message' => 'Data berhasil dihapus'
        ]);
    }
}
