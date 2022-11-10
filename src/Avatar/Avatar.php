<?php

namespace src\Avatar;

class Avatar
{
    protected array $matrix;
    protected int $size;
    protected array $colors;

    function __construct($size = 5, $colors = ["blue","red","green"])
{
    $this->size = $size;
    $this->colors = $colors;
    $this->matrix = $this->createAvatar();
}

    function createAvatar()
    {
        $shapes =[];


        for ($row = 0; $row < $this->size / 2; $row++) {
            for ($index = 0; $index < $this->size; $index++) {
                $p = $this->colors[rand(0, count($this->colors) - 1)];
                $square = new Square();
                $shapes [] = $square;
                $square->setLocation(($this->size - $row) - 1, $index);
                $square->setFill($p);
                if ($this->size  % 2 == 0 || $row != floor($this->size / 2)) {
                    $square = new Square();
                    $shapes [] = $square;
                    $square->setLocation($row, $index);
                    $square->setFill($p);
                }
            }
        }
        return $shapes;
    }

    /**
     * @return array
     */
    public function getMatrix(): array
    {
        return $this->matrix;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }
}