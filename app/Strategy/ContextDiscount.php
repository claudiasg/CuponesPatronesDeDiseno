<?php

namespace Cupones\Strategy;

use Illuminate\Database\Eloquent\Model;

class ContextDiscount 
{
    private $discount;
    public function __construct(DiscountInterface $discount)
    {
        $this->discount = $discount;
    }

    public function calcular($idProduct,$cupon)//Product $product,$cupon
	{   
        return $this->discount->calcularDescuento($idProduct,$cupon);
    }

    /*
    public function calcular($idDescuento,$idProducto,$cantidad,$precio)
	{   
        return $this->discount->calcularDescuento($idDescuento,$idProducto,$cantidad,$precio);
    }
*/





   /* public function setDiscountStrategy(DiscountInterface $strategy){
        $this->discount=strategy;
    }
    public Principal authenticate(String userName, String password){
        if(authenticationStrategy==null){
            throw new RuntimeException("Estrategia de autenticación no definida");
        }
        return authenticationStrategy.authenticate(userName, password);
    }

    public function calcularDescuento($idDescuento,$idProducto,$cantidad,$precio);
	{       
        $Discount=ProductDiscount::where('coupon_code',$cupon)->where('product_id',$product->id)->first();
            
            if ($ProductDiscount==null)
                return ['Motivo'=>'','Descuento'=>'Sin descuentos'];
            else    
		return ['Motivo'=>$this->name,'Descuento'=>$ProductDiscount->discount_value];
	
    }*/
   
}

/*
namespace App;
class ProductDiscounter extends Discounter
{
	public function  obtenerDescuento(Product $product,$cupon)
	{  
            
            $ProductDiscount=ProductDiscount::where('coupon_code',$cupon)->where('product_id',$product->id)->first();
            
            if ($ProductDiscount==null)
                return ['Motivo'=>'','Descuento'=>'Sin descuentos'];
            else    
		return ['Motivo'=>$this->name,'Descuento'=>$ProductDiscount->discount_value];
	}
}
*/