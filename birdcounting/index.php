<?php
namespace Perasser\BirdCounting;

$bird = new Bird(4,"Meisen");
$bird2 = new Bird(5,"Sperlinge");

$counting = new Counting($bird);
$counting->addBird();
$counting->getBirds();

echo "Es sind $counting Vögel";





