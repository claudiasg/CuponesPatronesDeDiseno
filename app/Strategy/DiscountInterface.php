<?php
namespace Cupones\Strategy;
interface DiscountInterface
{ 
   // public function calcularDescuento(Product $product,$cupon);
   public function calcularDescuento($idProduct,$cupon);
    //$idDescuento,$idProducto,$cantidad,$precio
	/*protected $siguientedescontador;
        protected $name;
        
	abstract public function obtenerDescuento(Product $product,$cupon);
        
        public function setSiguienteDescontador(Discounter $siguientedescontador)
        {
            $this->siguientedescontador=$siguientedescontador;
        }
        
	public function __construct($name)
	{
		$this->name = $name;
	}
        protected function buscarotrodescontador(Product $product,$cupon ) // delegar  resolucion a otro objeto
	{
	  	
            if ($this->siguientedescontador)
            {   
                return $this->siguientedescontador->obtenerDescuento($product,$cupon);
            }
	}
*/
	
}
