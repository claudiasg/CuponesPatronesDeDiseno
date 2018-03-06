<?php
namespace Cupones\State;

use Illuminate\Database\Eloquent\Model;

Abstract class AbstractState 
{
    
    public abstract function isDiscount($idProducto);
    public  function setEstado(AbstractState $state)
    {

        return "hola";
    }

 }
