<?php
namespace Cupones\State;
use Cupones\ProductPricing;
use Illuminate\Database\Eloquent\Model;

class ActiveState extends AbstractState
{
    
    public function isDiscount($idProducto)
    {

      //$ProductActive=array();
      $ProductActive= ProductPricing::where('product_id',$idProducto)->first();
         
        if ($ProductActive->in_active=="S")
        {  
            return ['Se puede aplicar descuento'];
        }
        else
        return ['No esta activo el producto'];
    }
   public function setEstado(AbstractState $state)
	{   
        static::$estadoProducto = $state;
        //return $this->estadoProducto->isDiscount($idProduct);
    }
    
}