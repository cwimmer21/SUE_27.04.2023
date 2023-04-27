<?php
namespace Perasser\BirdCounting;

class Bird {
    private $amount = 0;

    private $description = '';

    public function __construct($amount, $description) {
        $this->amount = $amount;
        $this->description = $description;
    }

    public function getAmount() {
        return $this->amount;
    }

    public function getName() {
        return $this->description;
    }
}