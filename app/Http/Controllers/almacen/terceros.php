<?php

namespace SmartKet\Http\Controllers\almacen;

use Illuminate\Http\Request;
use SmartKet\Http\Requests;
use SmartKet\Http\Controllers\Controller;

use SmartKet\models\general\pais;
use SmartKet\models\general\estados;
use SmartKet\models\general\ciudades;
use Session;


class terceros extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pais = pais::select('id','name','sortname')->get();
        $pais1 = pais::lists('name','id')->prepend('Seleccione su pais');
        $terceros =\SmartKet\models\almacen\terceros::paginate(10);
        return View('/almacen/terceros/admin')->with('pais1',$pais1)->with('terceros',$terceros);
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        \SmartKet\models\almacen\terceros::create($request->all());
        $pais = pais::select('id','name','sortname')->get();
        $pais1 = pais::lists('name','id')->prepend('Seleccione su pais');
        $terceros =\SmartKet\models\almacen\terceros::paginate(10);
        Session::flash('save','El registro fue guardado correctamente');
        return View('/almacen/terceros/admin')->with('pais1',$pais1)->with('terceros',$terceros);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $pais1 = pais::lists('name','id')->prepend('Seleccione su pais');
        $terceros =\SmartKet\models\almacen\terceros::FindOrFail($id);
        $departamentos=ciudades::select('estados as estado')->where('id','=',$terceros->ciudad)->get();

        //$paises1=estados::select('paises')->where('id','=',$departamentos->estados)->get();

        //$departamentos1=estados::where('paises','=',$paises->paises)->lists('name','id');
        //$ciudades1=ciudades::lists('name','id')->where('estados','=',$departamentos->id);
        return View('/almacen/terceros/editTerceros')->with('pais1',$pais1)->with('terceros',$terceros);
        //return($terceros);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $terceros = \SmartKet\models\almacen\terceros::FindOrFail($id);
        $input=$request->all();
        $terceros ->fill($input)->save();
        Session::flash('update','El registro fue actualizado correctamente');
        return redirect()->route('terceros.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\http_date()\Response
     */
    public function destroy($id)
    {
        //
        Session::flash('save','El registro fue guardado correctamente');

    }
}
