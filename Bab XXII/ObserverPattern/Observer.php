<?php

namespace ObserverPattern;

class Observer implements ObserverInterface 
{
    public function update(SubjectInterface $subject) 
    {
        echo sprintf('Sekarang %s lagi %s', $subject->getName(), $subject->getState()).PHP_EOL;
    }
}

