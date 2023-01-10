<?php
//
$fileName = md5(uniqid()) . '.svg';
$svg = $_POST['svg'];
file_put_contents("../public/assets/img/$fileName", $svg);



