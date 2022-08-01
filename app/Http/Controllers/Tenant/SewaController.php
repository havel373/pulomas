<?php

namespace App\Http\Controllers\Tenant;

use App\Models\Sewa;
use App\Models\Ruang;
use App\Models\Gedung;
use App\Models\Lantai;
use Illuminate\Http\Request;
use App\Models\AdditionalService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class SewaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $collection = Sewa::paginate(10);
            return view('pages.tenant.sewa.list', compact('collection'));
        }
        return view('pages.tenant.sewa.main');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gedungs = Gedung::get();
        $additionals = AdditionalService::get();
        return view('pages.tenant.sewa.input', ['data' => new Sewa, 'gedungs' => $gedungs, 'additionals' => $additionals]);
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
            'booking' => 'required',
            'kode_booking' => 'required_if:booking,ya',
            'gedung_id' => 'required',
            'lantai_id' => 'required',
            'ruang_id' => 'required',
            'jangka_waktu' => 'required',
            'tanggal_awal_sewa' => 'required',
            'tanggal_akhir_sewa' => 'required',
            'jenis_service_charge' => 'required',
            'ppn' => 'required',
            'luas_ruangan' => 'required',
            'marketing_id' => 'required',
            'keterangan' => 'required',
            'additional_services.*.id' => 'required',
            'total_harga' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ]);
        }

        $data = [
            'booking' => $request->booking,
            'kode_booking' => $request->kode_booking,
            'gedung_id' => $request->gedung_id,
            'lantai_id' => $request->lantai_id,
            'ruang_id' => $request->ruang_id,
            'jangka_waktu' => $request->jangka_waktu,
            'tanggal_awal_sewa' => $request->tanggal_awal_sewa,
            'tanggal_akhir_sewa' => $request->tanggal_akhir_sewa,
            'jenis_service_charge' => $request->jenis_service_charge,
            'ppn' => $request->ppn,
            'luas_ruangan' => $request->luas_ruangan,
            'marketing_id' => $request->marketing_id,
            'keterangan' => $request->keterangan,
            'additional_services' => json_encode($request->additional_services),
            'total_harga' => $request->total_harga,
            'status' => 'proses check',
        ];

        Sewa::create($data);

        return response()->json([
            'alert' => 'success',
            'message' => 'Data berhasil ditambahkan',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sewa  $sewa
     * @return \Illuminate\Http\Response
     */
    public function show(Sewa $sewa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sewa  $sewa
     * @return \Illuminate\Http\Response
     */
    public function edit(Sewa $sewa)
    {
        $gedungs = Gedung::get();
        $additionals = AdditionalService::get();
        return view('pages.tenant.sewa.input', ['data' => $sewa, 'gedungs' => $gedungs, 'additionals' => $additionals]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sewa  $sewa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sewa $sewa)
    {
        $validator = Validator::make($request->all(), [
            'booking' => 'required',
            'kode_booking' => 'required_if:booking,ya',
            'gedung_id' => 'required',
            'lantai_id' => 'required',
            'ruang_id' => 'required',
            'jangka_waktu' => 'required',
            'tanggal_awal_sewa' => 'required',
            'tanggal_akhir_sewa' => 'required',
            'jenis_service_charge' => 'required',
            'ppn' => 'required',
            'luas_ruangan' => 'required',
            'marketing_id' => 'required',
            'keterangan' => 'required',
            'additional_services.*.id' => 'required',
            'total_harga' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ]);
        }

        $data = [
            'booking' => $request->booking,
            'kode_booking' => $request->kode_booking,
            'gedung_id' => $request->gedung_id,
            'lantai_id' => $request->lantai_id,
            'ruang_id' => $request->ruang_id,
            'jangka_waktu' => $request->jangka_waktu,
            'tanggal_awal_sewa' => $request->tanggal_awal_sewa,
            'tanggal_akhir_sewa' => $request->tanggal_akhir_sewa,
            'jenis_service_charge' => $request->jenis_service_charge,
            'ppn' => $request->ppn,
            'luas_ruangan' => $request->luas_ruangan,
            'marketing_id' => $request->marketing_id,
            'keterangan' => $request->keterangan,
            'additional_services' => json_encode($request->additional_services),
            'total_harga' => $request->total_harga,
            'status' => 'proses check',
        ];

        $sewa->update($data);

        return response()->json([
            'alert' => 'success',
            'message' => 'Data berhasil diubah',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sewa  $sewa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sewa $sewa)
    {
        $sewa->delete();

        return response()->json([
            'alert' => 'success',
            'message' => 'Data berhasil dihapus',
        ]);
    }

    public function getLantai(Request $request)
    {
        $lantai = Lantai::where('gedung_id', $request->gedung_id)->get();
        return response()->json($lantai);
    }

    public function getRuang(Request $request)
    {
        $ruang = Ruang::where('lantai_id', $request->lantai_id)->get();
        return response()->json($ruang);
    }

    public function getJangkaWaktu(Request $request)
    {
        $jangka_waktu = Ruang::where('id', $request->ruang_id)->first();
        $data = [];
        $data[0] = '<option value="1" data-price=' . $jangka_waktu->harga_sewa . '>1 Hari' . $jangka_waktu->harga_sewa . '</option>';
        $data[1] = '<option value="7" data-price=' . $jangka_waktu->harga_sewa * 7 . '>1 Minggu' . $jangka_waktu->harga_sewa * 7 . '</option>';
        $data[2] = '<option value="30" data-price=' . $jangka_waktu->harga_sewa * 30 . '>1 Bulan' . $jangka_waktu->harga_sewa * 30 . '</option>';
        $data[3] = '<option value="60" data-price=' . $jangka_waktu->harga_sewa * 60 . '>2 Bulan' . $jangka_waktu->harga_sewa * 60 . '</option>';
        $data[4] = '<option value="90" data-price=' . $jangka_waktu->harga_sewa * 90 . '>3 Bulan' . $jangka_waktu->harga_sewa * 90 . '</option>';
        $data[5] = '<option value="120" data-price=' . $jangka_waktu->harga_sewa * 120 . '>4 Bulan' . $jangka_waktu->harga_sewa * 120 . '</option>';
        $data[6] = '<option value="150" data-price=' . $jangka_waktu->harga_sewa * 150 . '>5 Bulan' . $jangka_waktu->harga_sewa * 150 . '</option>';
        $data[7] = '<option value="180" data-price=' . $jangka_waktu->harga_sewa * 180 . '>6 Bulan' . $jangka_waktu->harga_sewa * 180 . '</option>';
        $data[8] = '<option value="210" data-price=' . $jangka_waktu->harga_sewa * 210 . '>7 Bulan' . $jangka_waktu->harga_sewa * 210 . '</option>';
        $data[9] = '<option value="240" data-price=' . $jangka_waktu->harga_sewa * 240 . '>8 Bulan' . $jangka_waktu->harga_sewa * 240 . '</option>';
        $data[10] = '<option value="270" data-price=' . $jangka_waktu->harga_sewa * 270 . '>9 Bulan' . $jangka_waktu->harga_sewa * 270 . '</option>';
        $data[11] = '<option value="300" data-price=' . $jangka_waktu->harga_sewa * 300 . '>10 Bulan' . $jangka_waktu->harga_sewa * 300 . '</option>';
        $data[12] = '<option value="330" data-price=' . $jangka_waktu->harga_sewa * 330 . '>11 Bulan' . $jangka_waktu->harga_sewa * 330 . '</option>';
        $data[13] = '<option value="360" data-price=' . $jangka_waktu->harga_sewa * 360 . '>12 Bulan' . $jangka_waktu->harga_sewa * 360 . '</option>';
        return response()->json($data);
    }
}
