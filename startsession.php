<?php

if(!isset($_SESSION)){
    session_start();
}
    if(!isset($_SESSION['user_id'])){
        if(isset($_COOKIE['user_id']) && isset($_COOKIE['email'])){
            $_SESSION['user_id'] = $_COOKIE['user_id'];
            $_SESSION['email'] = $_COOKIE['email'];
        }
    }

?>