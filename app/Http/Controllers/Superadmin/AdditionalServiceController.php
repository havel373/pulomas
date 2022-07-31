<?php

namespace App\Http\Controllers\Superadmin;

use App\Models\Teknik;
use App\Models\Marketing;
use Illuminate\Http\Request;
use App\Models\AdditionalService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AdditionalServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
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
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'pic' => 'required',
            'satuan' => 'required',
            'harga' => 'required',
            'jangka' => 'required',
            'jenis_pembayaran' => 'required',
            'foto' => 'required',
            'deskripsi' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first()
            ]);
        }

        $file = $request->file('foto');
        $nama_file = time() . "_" . $file->getClientOriginalName();
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload, $nama_file);
        $data = [
            'nama' => $request->nama,
            'pic' => $request->pic,
            'satuan' => $request->satuan,
            'harga' => $request->harga,
            'jangka' => $request->jangka,
            'jenis_pembayaran' => $request->jenis_pembayaran,
            'foto' => $nama_file,
            'deskripsi' => $request->deskripsi,
        ];
        AdditionalService::create($data);

        return response()->json([
            'alert' => 'success',
            'message' => 'Data berhasil ditambahkan'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdditionalService  $additionalServices
     * @return \Illuminate\Http\Response
     */
    public function show(AdditionalService $additional_service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdditionalService  $additionalServices
     * @return \Illuminate\Http\Response
     */
    public function edit(AdditionalService $additional_service)
    {
        $marketings = Marketing::get();
        $tekniks = Teknik::get();
        return view('pages.superadmin.AdditionalService.edit', ['data' => $additional_service, 'marketings' => $marketings, 'tekniks' => $tekniks]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdditionalService  $additionalServices
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdditionalService $additional_service)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'pic' => 'required',
            'satuan' => 'required',
            'harga' => 'required',
            'jangka' => 'required',
            'jenis_pembayaran' => 'required',
            'foto' => 'required',
            'deskripsi' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first()
            ]);
        }

        $file = $request->file('foto');
        $nama_file = time() . "_" . $file->getClientOriginalName();
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload, $nama_file);
        $data = [
            'nama' => $request->nama,
            'pic' => $request->pic,
            'satuan' => $request->satuan,
            'harga' => $request->harga,
            'jangka' => $request->jangka,
            'jenis_pembayaran' => $request->jenis_pembayaran,
            'foto' => $nama_file,
            'deskripsi' => $request->deskripsi,
        ];
        $additional_service->update($data);

        return response()->json([
            'alert' => 'success',
            'message' => 'Data berhasil diubah'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdditionalService  $additionalServices
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdditionalService $additional_service)
    {
        $additional_service->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Data berhasil dihapus'
        ]);
    }
}
