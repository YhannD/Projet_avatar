<?php

use src\Avatar\Autoloader;
use src\Avatar\Avatar;

include '../libs/functions.php';
include '../src/Avatar/Autoloader.php';// Permet d'inclure les fichiers de classes automatiquement avec la fonction spl_autoload_register() du fichier autoload.php.
$autoloader = new Autoloader();
$autoloader->register();// Là on instancie en première façon la classe autoload à l'aide d'un objet. Mais si dans la class on a mis une méthode static devant la function autoload(), on en a plus besoin puisqu'on va utiliser la méthode static ci-dessous.
Autoloader::register();
$table = 5;
$nbColor = 3;

$randomizer = randomColor($nbColor);

$superAvatar = new Avatar($table, $randomizer);

if (!empty($_POST)) {

    $nbColor = strip_tags(trim($_POST['colors']));
    $table = strip_tags(trim($_POST['size']));

}
$superAvatar = new Avatar($table, $randomizer);

include '../templates/home.phtml';