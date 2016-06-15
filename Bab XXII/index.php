<?php

require __DIR__.'/vendor/autoload.php';

use ObserverPattern\Subject;
use ObserverPattern\Observer;
use ObserverPattern\OtherObserver;

$subject = new Subject('Mawar');

$observer = new Observer();
$otherObserver = new OtherObserver();

$subject->attach($observer);
$subject->attach($otherObserver);

$subject->update('Pergi ke kampus');
$subject->update('Pergi ke kantin');

$subject->detach($otherObserver);

$subject->update('Pulang kuliah');
