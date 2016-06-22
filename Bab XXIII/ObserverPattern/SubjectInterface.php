<?php

namespace ObserverPattern;

interface SubjectInterface
{
    public function getName();

    public function attach(ObserverInterface $observer);

    public function detach(ObserverInterface $observer);

    public function notify();

    public function getState();
}

