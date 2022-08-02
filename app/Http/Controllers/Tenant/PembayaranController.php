<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PembayaranController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax() ) {
            $collection = Pembayaran::paginate(10);
            return view('pages.tenant.pembayaran.list', compact('collection'));
        }
        return view('pages.tenant.pembayaran.main');
    }

    public function create()
    {
        return view('pages.tenant.pembayaran.input', ['data' => new Pembayaran]);
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'nominal' => 'required|numeric',
            'bukti' => 'required',
            'keterangan' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first(),
            ]);
        }
        $file = request()->file('bukti')->store('bukti');
        $data = [
            'tanggal_request' => now(),
            'nominal' => $request->nominal,
            'bukti_pembayaran' => $file,
            'keterangan' => $request->keterangan,
            'status' => 'Menunggu',
        ];

        Pembayaran::create($data);

        return response()->json([
            'alert' => 'success',
            'message' => 'Data berhasil ditambahkan',
        ]);
    }
}
