<?php

namespace src\Avatar;

class AvatarGenerator
{
    public function generateSVG(int $table, int $nbColor): string
    {
        // Génère les couleurs aléatoires
        $randomizer = randomColor($nbColor);

        // Crée un nouvel objet Avatar avec la taille et les couleurs
        $superAvatar = new Avatar($table, $randomizer);

        // Démarre le code SVG
        $svg = '<svg id="svgImage" xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 '.$table.' '.$table.'">';

        // Ajoute les formes au code SVG
        foreach ($superAvatar->getMatrix() as $shape) {
            $svg .= '<rect x="'.$shape->getX().'" y="'.$shape->getY().'" width="'.$shape->getSize().'" height="'.$shape->getSize().'" fill="'.$shape->getColor().'"/>';
        }

        // Termine le code SVG
        $svg .= '</svg>';

        return $svg;
    }
}
