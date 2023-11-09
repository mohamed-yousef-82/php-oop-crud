<?php
class logoutController
{
public function __construct(){
    session_destroy();
    header('Location:/login');
}

}

 ?>
