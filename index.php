<?php
    $act = isset($_GET['action']) ? $_GET['action'] : "trangchu";
  
    switch ($act) {
        case 'main':
            require_once('./Home/main.html');
            break;
        default:
            require_once('./Home/homepage.php');
            break;
    }
?>