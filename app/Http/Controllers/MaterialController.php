<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Material;

class MaterialController extends Controller
{
    public function create(){

        return view('material.create');
    }

    public function index(){

        $materiales= Material::all();
        return view('material.index')->with('materiales',$materiales);
    }

    public function store(Request $request){

        Material::create($request->all());
        return redirect()->to('material');
    }

    public function show($id)
    {
        $material = Material::findOrFail($id);
        return view('material.show',compact('material'));

    }
    public function edit($id)
    {
        $material = Material::findOrFail($id);
        return view('material.edit',compact('material',$material));

    }

    public function update(Request $request, $id)
    {
        $material = Material::find($id);
        $material->fill($request->all());
        $material->save();
        return redirect()->route('material.index');
    }

    public function destroy($id)
    {
        Material::destroy($id);
        return redirect()->route('material.index');
    }
    
}
