<?php
require '../vendor/autoload.php';
include '../libs/functions.php';

use src\Avatar\Avatar;
use src\Avatar\AvatarGenerator;

$table = 10;
$nbColor = 3;

$randomizer = randomColor($nbColor);

$superAvatar = new Avatar($table, $randomizer);

if (!empty($_POST)) {
    if (isset($_POST['size'])) {
        $table = strip_tags(trim($_POST['size']));
    }
    if (isset($_POST['colors'])) {
        $nbColor = strip_tags(trim($_POST['colors']));
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($table) && is_numeric($table) && isset($nbColor) && is_numeric($nbColor)) {
        $generator = new AvatarGenerator();
        $svg = $generator->generateSVG($table, $nbColor);

        header('Content-Type: text/html');
        echo $svg;
        exit;
    }
}


include '../templates/home.phtml';

