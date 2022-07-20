<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Models\Pembayaran;
use Illuminate\Http\Request;

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

}
