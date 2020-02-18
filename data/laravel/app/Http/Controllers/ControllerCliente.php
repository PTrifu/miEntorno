<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

use Illuminate\Support\Facades\DB;

class ControllerCliente extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $clientes = Cliente::all();
        return view('listadoClientes')->with('Clientes',$clientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $cliente = new Cliente;
        $cliente->Nombre = $request->input('nombre');
        $cliente->Apellido1 = $request->input('apellido1');
        $cliente->Apellido2 = $request->input('apellido2');
        $cliente->DNI = $request->input('dni');
        $cliente->Direccion = $request->input('dire');
        $cliente->save();
        return redirect()->route('listarcliente');
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
        $cliente = DB::select('select * from clientes where idCliente = ?',[$id])[0];

        return view('editCliente')->with('cliente',$cliente);
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

        $cliente = Cliente::where('idCliente',$id)->get()[0];

        //$cliente = DB::select('select * from clientes where idCliente = ?',[$id])[0];
       // echo '<script>console.log("'.$request->input('nombre').'")</script>';
        //echo '<script>console.log("update clientes set Nombre = '.$request->input('nombre').' Apellido1 = '.$request->input('apellido1').' Apellido2 = '.$request->input('apellido2').' DNI = '.$request->input('dni').' Direccion = '.$request->input('dire').' where idCliente ='.$id.'")</script>';
        
         DB::update('update clientes set Nombre = \''.$request->input('nombre').'\', Apellido1 = \''.$request->input('apellido1').'\', Apellido2 = \''.$request->input('apellido2').'\', DNI = \''.$request->input('dni').'\', Direccion = \''.$request->input('dire').'\' where idCliente ='.$id);
         return redirect()->route('listarcliente');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
