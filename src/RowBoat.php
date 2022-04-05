<?php

final class RowBoat extends Boat
{
    private int $rowerNumber;

    public function __construct(int $speed, int $rowerNumber)
    {
        parent::__construct($speed);
        $this->rowerNumber = $rowerNumber;
    }
    
    /**
     * Get the value of rowerNumber
     */ 
    public function getRowerNumber(): int
    {
        return $this->rowerNumber;
    }

    /**
     * Set the value of rowerNumber
     *
     */ 
    public function setRowerNumber(int $rowerNumber): self
    {
        $this->rowerNumber = $rowerNumber;

        return $this;
    }

    public function getSpeed()
    {
        return $this->speed + $this->rowerNumber;
    }
}