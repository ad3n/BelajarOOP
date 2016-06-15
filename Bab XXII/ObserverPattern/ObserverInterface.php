<?php

namespace ObserverPattern;

interface ObserverInterface 
{
    public function update(SubjectInterface $subject);
}

