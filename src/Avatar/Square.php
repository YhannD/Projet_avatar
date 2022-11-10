<?php

namespace src\Avatar;

class Square
{
    protected int $x;
    protected int $y;
    protected int $size;
    protected string $color;

    function __construct()
    {
        $this->x = 0;
        $this->y = 0;
        $this->color = 'grey';
        $this->size = 1;
    }

    public function setXY(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function getX()
    {
        return $this->x;
    }
    public function getY()
    {
        return $this->y;
    }

    public function setLocation(int $x, int $y): void
    {
        $this->setXY($x, $y);
    }

    public function setFill($color): void
    {
        $this->color = $color;
    }
    function getColor(){
        return $this->color;
    }
    function getSize(){
        return $this->size;
    }

}