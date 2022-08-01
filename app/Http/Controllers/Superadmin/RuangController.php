<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\Gedung;
use App\Models\Lantai;
use App\Models\Ruang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class RuangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $collection = Ruang::paginate(10);
            return view('pages.superadmin.ruang.list', compact('collection'));
        }
        return view('pages.superadmin.ruang.main');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gedungs = Gedung::get();
        return view('pages.superadmin.ruang.input', ['data' => new Ruang, 'gedungs' => $gedungs]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'id_gedung' => 'required',
            'id_lantai' => 'required',
            'kode_ruang' => 'required',
            'nama_ruang' => 'required',
            'status' => 'required',
            'luas' => 'required',
            'harga' => 'required',
            'harga_hari' => 'required',
            'overtime_dibawah_4jam' => 'required',
            'total_overtime_dibawah_4jam' => 'required',
            'overtime_diatas_4jam' => 'required',
            'total_overtime_diatas_4jam' => 'required',
            'fasilitas.*' => 'required',
            'service_charge' => 'required',
            'service_charge_sendiri' => 'required',
            'foto_ruang' => 'required',
            'deskripsi_ruang' => 'required',
        ]);

        if ($validation->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validation->errors()->first(),
            ]);
        }

        $file = request()->file('foto_ruang')->store('FotoRuang');
        $data = [
            'id_gedung' => $request->id_gedung,
            'id_lantai' => $request->id_lantai,
            'kode_ruang' => $request->kode_ruang,
            'nama_ruang' => $request->nama_ruang,
            'status' => $request->status,
            'luas' => $request->luas,
            'harga_bulan' => $request->harga,
            'harga_hari' => $request->harga_hari,
            'overtime_dibawah_4jam' => $request->overtime_dibawah_4jam,
            'total_overtime_dibawah_4jam' => $request->total_overtime_dibawah_4jam,
            'overtime_diatas_4jam' => $request->overtime_diatas_4jam,
            'total_overtime_diatas_4jam' => $request->total_overtime_diatas_4jam,
            'fasilitas' => json_encode($request->fasilitas),
            'service_charge' => $request->service_charge,
            'service_charge_sendiri' => $request->service_charge_sendiri,
            'foto_ruang' => $file,
            'deskripsi' => $request->deskripsi_ruang,
        ];

        Ruang::create($data);

        return response()->json([
            'alert' => 'success',
            'message' => 'Berhasil menambah data',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ruang  $ruang
     * @return \Illuminate\Http\Response
     */
    public function show(Ruang $ruang)
    {
        $gedungs = Gedung::get();
        return view('pages.superadmin.ruang.show', ['data' => $ruang, 'gedungs' => $gedungs]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ruang  $ruang
     * @return \Illuminate\Http\Response
     */
    public function edit(Ruang $ruang)
    {
        $gedungs = Gedung::get();
        return view('pages.superadmin.ruang.input', ['data' => $ruang, 'gedungs' => $gedungs]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ruang  $ruang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ruang $ruang)
    {
        $validation = Validator::make($request->all(), [
            'id_gedung' => 'required',
            'id_lantai' => 'required',
            'kode_ruang' => 'required',
            'nama_ruang' => 'required',
            'status' => 'required',
            'luas' => 'required',
            'harga' => 'required',
            'harga_hari' => 'required',
            'overtime_dibawah_4jam' => 'required',
            'total_overtime_dibawah_4jam' => 'required',
            'overtime_diatas_4jam' => 'required',
            'total_overtime_diatas_4jam' => 'required',
            'fasilitas.*' => 'required',
            'service_charge' => 'required',
            'service_charge_sendiri' => 'required',
            'deskripsi_ruang' => 'required',
        ]);

        if ($validation->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validation->errors()->first(),
            ]);
        }

        if (request()->file('foto_ruang')) {
            Storage::delete($ruang->foto_ruang);
            $filename = request()->file('foto_ruang')->store('FotoRuang');
        } else {
            $filename = $ruang->foto_ruang;
        }
        $data = [
            'id_gedung' => $request->id_gedung,
            'id_lantai' => $request->id_lantai,
            'kode_ruang' => $request->kode_ruang,
            'nama_ruang' => $request->nama_ruang,
            'status' => $request->status,
            'luas' => $request->luas,
            'harga_bulan' => $request->harga,
            'harga_hari' => $request->harga_hari,
            'overtime_dibawah_4jam' => $request->overtime_dibawah_4jam,
            'total_overtime_dibawah_4jam' => $request->total_overtime_dibawah_4jam,
            'overtime_diatas_4jam' => $request->overtime_diatas_4jam,
            'total_overtime_diatas_4jam' => $request->total_overtime_diatas_4jam,
            'fasilitas' => json_encode($request->fasilitas),
            'service_charge' => $request->service_charge,
            'service_charge_sendiri' => $request->service_charge_sendiri,
            'foto_ruang' => $filename,
            'deskripsi' => $request->deskripsi_ruang,
        ];

        $ruang->update($data);

        return response()->json([
            'alert' => 'success',
            'message' => 'Berhasil mengubah data',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ruang  $ruang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ruang $ruang)
    {
        $ruang->delete();

        return response()->json([
            'alert' => 'success',
            'message' => 'Berhasil menghapus data',
        ]);
    }

    public function getLantai(Gedung $gedung)
    {
        $lantai = $gedung->lantai;
        return response()->json($lantai);
    }
}
