<?php

namespace Cupones\Observer;

interface ObsObserver {
    public function update( ObsSubject $subject );
}