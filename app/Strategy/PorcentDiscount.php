<?php
namespace Cupones\Strategy;
use Cupones\ProductDiscount;
class PorcentDiscount implements DiscountInterface
{ 
    /*public function calcularDescuento($idProduct,$cupon)
    {
        return "porcentaje";
       
    }*/
    public function  calcularDescuento($idProduct,$cupon)
	{  
             $Porcentaje="%";
             $ProductDiscount=ProductDiscount::where('coupon_code',$cupon)->where('product_id',$idProduct)->where('discount_unit',$Porcentaje)->first();
             
            if ($ProductDiscount==null)
            {  
                return ['El Descuento es:'=>'Sin descuentos'];
            }
            else    
                return ['El Descuento es:'=>$ProductDiscount->discount_value.$ProductDiscount->discount_unit];
    }
}