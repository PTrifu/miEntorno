<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Factura;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class ControllerFactura extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facturas = Factura::all();
        return view('listado')->with('facturas',$facturas);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $factura = DB::select('select * from facturas where idFactura = ?',[$id])[0];
        $listaProductos = DB::select('SELECT lp.IdProducto, lp.Catidad, lp.PrecioUnitario, lp.PrecioTotal, p.Descripcion FROM lineas_productos lp JOIN productos p ON lp.IdProducto = p.IdProducto WHERE lp.idFactura = ?', [$id]);
        $cliente = DB::select('select * from clientes where idCliente = ?',[$id])[0];

        echo '<script>console.log(\''.json_encode($listaProductos[0]).'\')</script>';

        return view('facturashow')->with('factura', $factura)->with('linasXproducto', $listaProductos)->with('cliente', $cliente);
        
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      
        $factura = DB::delete('delete from facturas where idFactura = ?',[$id]);       
        if ($factura > 0) {
            echo '<script>console.log(\''.$factura.'\')</script>';
        }else{
            echo '<script>console.log(\'Borrado\')</script>';
        }      

        return redirect()->route('lista');

        
    }
}
