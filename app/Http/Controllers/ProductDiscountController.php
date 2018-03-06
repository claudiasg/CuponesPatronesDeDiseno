<?php

namespace Cupones\Http\Controllers;

use Illuminate\Http\Request;
use Cupones\Observer\ObsCuponUsado;
use Cupones\Observer\ObsObserved;
use Cupones\Observer\ObsObserver;
use Cupones\Observer\ObsCuponVencido;
use Cupones\Observer\ObsSubject;

class ProductDiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $verificar = new ObsObserved();
        $verificar->attach( new ObsCuponVencido() );
        $verificar->attach( new ObsCuponUsado() );
         
        if ( $verificar->init( 5, 120, "producto 1" ) ) {
            echo "Producto verificado";
        } else {
            echo "<pre>";
            print_r( $verificar->getStatus() );
            echo "</pre>";
        }
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
        //
    }
}
