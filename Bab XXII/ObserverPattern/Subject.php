<?php

namespace ObserverPattern;

class Subject implements SubjectInterface 
{   
    private $observers = array();

    private $state;

    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function attach(ObserverInterface $observer)
    { 
        $this->observers[get_class($observer)] = $observer;
    }

    public function detach(ObserverInterface $observer) 
    {
        $key = get_class($observer);
        if (array_key_exists($key, $this->observers)) {
            unset($this->observers[$key]);
        }
    }

    public function notify()
    {
        foreach($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function update($state) 
    {
        $this->state = $state;
        $this->notify();
    }

    public function getState() 
    {
        return $this->state;
    }
}

