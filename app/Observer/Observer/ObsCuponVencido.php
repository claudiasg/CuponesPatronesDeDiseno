<?php

namespace Cupones\Observer;

class ObsCuponVencido implements ObsObserver {
 
    function update( ObsSubject $ObsSubject ) {
 
        $status = $ObsSubject->getStatus();
 
        switch ( $status[0] ) {
 
            case ObsObserved::CUPONNODISPONIBLE:
                echo "Cupon no disponible (caducado, utilizado)";
                break;
 
            default:
                echo "Cupon disponible";
        }
 
    }
 
}