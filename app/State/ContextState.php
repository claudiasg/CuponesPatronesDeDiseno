<?php
namespace Cupones\State;

use Illuminate\Database\Eloquent\Model;

class ContextState extends AbstractState
{
    private $estadoProducto;
    /*public function __construct(AbstractState $estadoProducto)
    {
        $this->estadoProducto = $estadoProducto;
    }
*/
    /*public function setEstado($idProduct)//Product $product,$cupon
	{   
        return $this->estadoProducto->isDiscount($idProduct);
    }*/
    public function setEstado(AbstractState $state)//Product $product,$cupon
	{   
        $this->estadoProducto = $state;
        //return $this->estadoProducto->isDiscount($idProduct);
    }
    public function isDiscount($idProducto)
    {
        return "fghgfbsdgsdg";
    }

  /*  private $discount;
    public function __construct(DiscountInterface $discount)
    {
        $this->discount = $discount;
    }

    public function calcular($idProduct,$cupon)//Product $product,$cupon
	{   
        return $this->discount->calcularDescuento($idProduct,$cupon);
    }

private EstadoSemaforo objEstadoSemaforo;
    // -------------------------------------------
    public Semaforo() {
         this.objEstadoSemaforo = new EstadoVerde();
    }
    // -------------------------------------------
     public void setEstado( EstadoSemaforo objEstadoSemaforo ) {
         this.objEstadoSemaforo = objEstadoSemaforo;
    }
    // -------------------------------------------
     @Override
     public void mostrar() {
        this.objEstadoSemaforo.mostrar();
    }*/
}