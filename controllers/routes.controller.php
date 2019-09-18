<?php
if(isset($_GET['a'])){
    $a = $_GET['a'];
    switch($a){
        case "apropos":
            $view = './views/apropos.php';
            break;
        case "medias":
            $view = './views/medias.php';
            break;
        case "contact":
            $view = './views/contact.php';
            break;
        case "intranet":
            $view = './views/intranet.php';
            break;
        default:
        case "home":
            $view = './views/home.php';
            break;
    }
}else{
    $view = './views/home.php';
}