<?php

$fileName = md5(uniqid()) . '.svg';
$avatar = $_POST['avatar'];
file_put_contents("../public/assets/img/$fileName", $avatar);
header('location:../public/index.php');

//if(empty($_GET)){
//    echo "L'image est bien enregistré!";
//}
//else{
//    header('location:../public/index.php');
//}
