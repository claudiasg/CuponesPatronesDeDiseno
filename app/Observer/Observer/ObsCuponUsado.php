<?php

namespace Cupones\Observer;

class ObsCuponUsado implements ObsObserver {
 
    function update( ObsSubject $ObsSubject ) {
 
        $status = $ObsSubject->getStatus();
 
        switch ( $status[0] ) {
 
            case ObsObserved::VALIDOCOMPRA:
                echo "Cupon vigente, valido para compra";
                break;
 
            case ObsObserved::INVALIDOCOMPRA:
                echo "El cupon ha sido utilizado en una compra";
                break;
        }
 
    }
 
}