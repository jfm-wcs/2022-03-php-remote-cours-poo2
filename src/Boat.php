<?php

class Boat
{
    public const MAX_CONTAINERS = 100;
    private array $containers = [];
    private string $name;
    protected int $speed;
    private static int $boatCounter = 0;

    public function __construct(int $speed)
    {
        $this->speed = $speed;
        self::$boatCounter++;
    }

    public function load(Container $container)
    {
        if ($container->getFill() > 0 && count($this->containers) < self::MAX_CONTAINERS) {
            $this->containers[] = $container;
        }
    }

    public function getContainers(): array
    {
        return $this->containers;
    }

    /**
     * Get the value of speed
     */ 
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * Set the value of speed
     *
     * @return  self
     */ 
    public function setSpeed($speed)
    {
        $this->speed = $speed;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of boatCounter
     */ 
    public static function getBoatCounter()
    {
        return self::$boatCounter;
    }
}