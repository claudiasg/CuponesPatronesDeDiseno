<?php
namespace Cupones\Strategy;
use Cupones\ProductDiscount;
class PeriodDiscount implements DiscountInterface
{ 
    public function calcularDescuento($idProduct,$cupon)
    {
             $fechaActual= date('d/m/Y');
             $ProductDiscount=ProductDiscount::where('coupon_code',$cupon)->where('product_id',$idProduct)->first();
             
            // $ProductDiscount=ProductDiscount::where('coupon_code',$cupon)->where('product_id',$idProduct)->where('discount_unit',$Porcentaje)->first();
             
            
            if ($ProductDiscount==null)
            {  
                return ['Decuento'=>'No se aplica el descuento. El cupon expiro'];
            }
            else if($ProductDiscount->valid_until<=$fechaActual) 
               // return ['DescuentoDentroDElTiempo'=>$ProductDiscount->discount_value.$ProductDiscount->discount_unit,'hasta'=>$ProductDiscount->valid_until,'fechaActual'=>$fechaActual];
       // return "periodo";
       return $fechaActual;
    }
    
}