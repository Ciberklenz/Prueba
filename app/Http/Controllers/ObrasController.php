<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Obra;
use Laracasts\Flash\Flash;
use App\Http\Controllers;
use App\Http\Requests\ObraRequest;


class ObrasController extends Controller
{
    public function index()
    {
        $obras = Obra::orderBy('id','ASC')->paginate(0);
        return view('obras.index')->with('obras',$obras);
    }

    public function create()
    {
        return view('obras.create');
    }


    public function store(ObraRequest $request)
    {
       $obra = new Obra();
        $obra->nombre_obra= $request->input('nombre_obra');
        $obra->save();
        Flash::success('La obra a sido ingresada con exito');
        return redirect()->route('obras.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        
    }


    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        $obras = Obra::find($id);
        $obras->delete();
        Flash::error('Obra eliminada');
        return redirect()->route('obras.index');
    }
}
