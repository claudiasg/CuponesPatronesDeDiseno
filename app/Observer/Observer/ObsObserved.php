<?php

namespace Cupones\Observer;

class ObsObserved implements ObsSubject {
    const VALIDOCOMPRA = 1;
    const INVALIDOCOMPRA = 2;
    const CUPONNODISPONIBLE = 3;

 
    private $status = array();
    private $storage;
 
    function __construct() {
        $this->storage = new \SplObjectStorage();
    }
 
    //function init( $username, $password, $ip ) {
    function init( $idcompra, $idproducto, $nombreproducto ) {
 
        // Let's simulate different login procedures
        $this->setStatus( rand( 1, 3 ), $idcompra, $nombreproducto);
 
        // Notify all the observers of a change
        $this->notify();
 
        if ( $this->status[0] == self::VALIDOCOMPRA ) {
            return true;
        }
 
        return false;
 
    }
    /*
    private function setStatus( $status, $username, $ip ) {
        $this->status = array( $status, $username, $ip );
    }
    */
    private function setStatus( $status, $idcompra, $nombreproducto ) {
        $this->status = array( $status, $idcompra, $nombreproducto );
    }
 
    function getStatus() {
        return $this->status;
    }
 
    function attach( ObsObserver $observer ) {
        $this->storage->attach( $observer );
    }
 
    function detach( ObsObserver $observer ) {
        $this->storage->detach( $observer );
    }
 
    function notify() {
 
        foreach ( $this->storage as $observer ) {
            $observer->update( $this );
        }
 
    }
 
}