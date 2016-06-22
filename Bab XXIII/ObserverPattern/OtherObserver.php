<?php

namespace ObserverPattern;

class OtherObserver implements ObserverInterface 
{
    public function update(SubjectInterface $subject) 
    {
        echo sprintf('%s sedang %s', $subject->getName(), $subject->getState()).PHP_EOL;
    }
}

