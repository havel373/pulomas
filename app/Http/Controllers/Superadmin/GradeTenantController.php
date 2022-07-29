<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\GradeTenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GradeTenantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $collection = GradeTenant::paginate(10);
            return view('pages.superadmin.grade.list', compact('collection'));
        }
        return view('pages.superadmin.grade.main');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.superadmin.grade.input', ['data' => new GradeTenant]);
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
            'kode' => 'required|string|max:255',
            'nilai' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first()
            ]);
        }

        GradeTenant::create($request->all());

        return response()->json([
            'alert' => 'success',
            'message' => 'Data berhasil ditambahkan',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GradeTenant  $gradeTenant
     * @return \Illuminate\Http\Response
     */
    public function show(GradeTenant $gradeTenant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GradeTenant  $gradeTenant
     * @return \Illuminate\Http\Response
     */
    public function edit(GradeTenant $grade)
    {
        return view('pages.superadmin.grade.input', ['data' => $grade]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GradeTenant  $gradeTenant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GradeTenant $grade)
    {
        $validator = Validator::make($request->all(), [
            'kode' => 'required|string|max:255',
            'nilai' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'alert' => 'error',
                'message' => $validator->errors()->first()
            ]);
        }

        $grade->update($request->all());

        return response()->json([
            'alert' => 'success',
            'message' => 'Data berhasil diubah',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GradeTenant  $gradeTenant
     * @return \Illuminate\Http\Response
     */
    public function destroy(GradeTenant $grade)
    {
        $grade->delete();

        return response()->json([
            'alert' => 'success',
            'message' => 'Data berhasil dihapus',
        ]);
    }
}
