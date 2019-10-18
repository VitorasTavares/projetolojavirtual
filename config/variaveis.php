<?php
session_start();
    $nomeSistema = "Cursos Vitor";
    $usuario = isset($_SESSION['usuario'])? $_SESSION['usuario']: [];
    $nomeArquivo = __DIR__."/../produto.json";
    $produtos = json_decode(file_get_contents($nomeArquivo), true);
    $categorias =["Cursos","Palestras","Artigos"];
?>