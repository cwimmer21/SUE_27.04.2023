<?php
namespace Perasser\BirdCounting;

class Counting {
    private $birds = array();

    public function addBird(Bird $bird) {
        $this->birds[] = $bird;
    }

    public function getBirds() {
        return $this->birds;
    }
}