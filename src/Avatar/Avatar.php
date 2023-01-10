<?php

namespace src\Avatar;

class Avatar
{
    protected array $matrix; // La matrice qui contient les formes de l'avatar
    protected int $size; // La taille de l'avatar
    protected array $colors; // Les couleurs disponibles pour remplir les formes

    // constructeur pour définir la taille et les couleurs de l'avatar
    function __construct($size = 5, $colors = ["blue","red","green"])
    {
        $this->size = $size;
        $this->colors = $colors;
        $this->matrix = $this->createAvatar();
    }

    // méthode pour créer l'avatar
    function createAvatar()
    {
        $shapes = [];

        // Boucle pour créer les formes de l'avatar
        for ($row = 0; $row < $this->size / 2; $row++) {
            for ($index = 0; $index < $this->size; $index++) {
                $p = $this->colors[rand(0, count($this->colors) - 1)];
                $square = new Square();
                $shapes [] = $square;
                $square->setLocation(($this->size - $row) - 1, $index);
                $square->setFill($p);
                if ($this->size % 2 == 0 || $row != floor($this->size / 2)) {
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
