<?php

namespace App\Http\Controllers;

use App\Models\GradeTenant;
use Illuminate\Http\Request;

class GradeTenantController extends Controller
{
    public function index(){
        $data = GradeTenant::all();
        return view('superadmin.gradetenant',compact('data'));
    }

    public function create_gradetenant(){
        return view('superadmin.create-gradetenant');

    }

    public function insert_data_gradetenant(Request $request){
        GradeTenant::create($request->all());
        return redirect()->route('gradetenant')->with('success', 'Data Successfully Created');
    }

    public function view_gradetenant($id){
        $data = GradeTenant::find($id);
        // dd($data);
        return view('superadmin.view-gradetenant',compact('data'));
    }

    public function update_gradetenant(Request $request, $id){
        $data = GradeTenant::find($id);
        $data->update($request->all());
        return redirect()->route('gradetenant')->with('success', 'Data Successfully Updated');
    }

    public function delete_gradetenant($id){
        $data = GradeTenant::find($id);
        $data->delete();
        return redirect()->route('gradetenant')->with('success', 'Data Successfully Deleted');
    }
}