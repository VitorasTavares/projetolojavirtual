<?php

session_start();

//deslogando usuario
session_destroy();
//voltando para home
header('Location:index.php');

?>