<?php

namespace Cupones\Observer;

interface ObsSubject {
    public function attach( ObsObserver $observer );
    public function detach( ObsObserver $observer );
    public function notify();
}