<?php

class Container
{
    private int $capacity;
    private string $label;
    private int $fill = 0;

    public function __construct(
        int $capacity, 
        string $label
    )
    {
        $this->capacity = $capacity;
        $this->label = $label;
    }

    public function getCapacity(): int
    {
        return $this->capacity;
    }  

    public function getFill(): int
    {
        return $this->fill;
    }

    public function setFill(int $volume): self
    {
        if ($volume < ($this->capacity - $this->fill)) {
            $this->fill += $volume;
        }

        return $this;
    }


    /**
     * Get the value of label
     */ 
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * Set the value of label
     *
     * @return  self
     */ 
    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function __toString()
    {
        return $this->label;
    }
}