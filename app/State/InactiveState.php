<?php
namespace Cupones\State;
use Cupones\ProductPricing;
use Illuminate\Database\Eloquent\Model;

class InactiveState extends AbstractState
{
    
    public function isDiscount($idProducto)
    {

      //$ProductActive=array();
      $ProductInactive= ProductPricing::where('product_id',$idProducto)->first();
         
        if ($ProductInactive->in_active=="N")
        {  
            return ['No se puede aplicar descuento'];
        }        
    }
    public function setEstado(AbstractState $state)//Product $product,$cupon
	{   
        static::$estadoProducto = $state;
        //return $this->estadoProducto->isDiscount($idProduct);
    }
    
}