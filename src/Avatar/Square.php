<?php

namespace src\Avatar;

class Square
{
    protected int $x; // Coordonnée x de la forme
    protected int $y; // Coordonnée y de la forme
    protected int $size; // Taille de la forme
    protected string $color; // Couleur de remplissage de la forme

    function __construct()
    {
        $this->x = 0;
        $this->y = 0;
        $this->color = 'grey';
        $this->size = 1;
    }

    // Méthode pour définir les coordonnées x et y de la forme
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

    // Méthode pour définir l'emplacement de la forme
    public function setLocation(int $x, int $y): void
    {
        $this->setXY($x, $y);
    }

    // Méthode pour définir la couleur de remplissage de la forme
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
