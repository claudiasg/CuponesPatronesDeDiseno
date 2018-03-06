<?php

namespace Cupones\Http\Controllers;

use Illuminate\Http\Request;
use Cupones\Strategy\ContextDiscount;
use Cupones\Strategy\PeriodDiscount;
use Cupones\Strategy\PorcentDiscount;
use Cupones\Strategy\ProductoCategoryDiscount;
use Cupones\State\ContextState;
use Cupones\State\ActiveState;
use Cupones\State\InactiveState;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       // $discount=new ContextDiscount(new ProductoCategoryDiscount());
     // $discount=new ContextDiscount(new PorcentDiscount());
      //$discount=new ContextDiscount(new PeriodDiscount());
        //return $discount->calcular(22,"Aut aut te");
      
        //Datos Patrn State
       /* $productState= new InactiveState();
        $contextState=  new ContextState();
        $contextState->setEstado($productState);
        return $productState->isDiscount(18);*/
        $productState= new ActiveState();
        $contextState=  new ContextState();
        $contextState->setEstado($productState);
        return $productState->isDiscount(18);
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
