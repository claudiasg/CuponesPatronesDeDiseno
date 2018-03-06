<?php
namespace Cupones\Strategy;
use Cupones\ProductCategoryDiscount;
class ProductoCategoryDiscount implements DiscountInterface
{ 
 /*   public function calcularDescuento($idProduct,$cupon)
    {
        return $idProduct;
   }*/
 public function  calcularDescuento($idProduct,$cupon)
	{  
             $ProductCategoryDiscount=ProductCategoryDiscount::where('coupon_code',$cupon)->where('product_category_id',$idProduct)->first();
         
            if ($ProductCategoryDiscount==null)
            {  
                return ['El Descuento es:'=>'No hay descuentos'];
            }
            else    
                return ['El Descuento es:'=>$ProductCategoryDiscount->discount_value.$ProductCategoryDiscount->discount_unit];
    }
   
}