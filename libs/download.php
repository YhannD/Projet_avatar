<?php

$fileName = 'MyAvatar.svg';
$avatar = $_POST['avatar'];
//file_put_contents("../public/assets/temp/$fileName", $avatar);
//header('location:../public/index.php');
//
//if(!empty($_GET['file']))
//{
//    $filename = basename($_GET['file']);
//    $filepath = "../public/assets/temp/$fileName";
//    if(!empty($filename) && file_exists($filepath)){

//Define Headers
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Type: image/svg+xml");
//        header("Content-Transfer-Encoding: Binary");
        header('Content-Disposition: attachment; filename="MyAvatar.svg"');

        echo $avatar;
//echo  file_get_contents("../public/assets/temp/$fileName");
        exit;
//
//    }
//    else{
//        echo "This File Does not exist.";
//    }
//}
