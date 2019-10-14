<?php
    $nomeSistema = "Cursos Vitor";
    $usuario = ["nome"=>"Vitor"];

    $nomeArquivo = "produto.json";
    $produtos = json_decode(file_get_contents($nomeArquivo), true);



    //$produtos = [
      //  ["nome"=>"Curso Fullstack","preco"=>"1200.00","duracao"=>"5 meses", "img"=>"img/download2.jpg"],
        //["nome"=>"Curso Marketing","preco"=>"1000.00","duracao"=>"4 meses", "img"=>"img/download2.jpg"],  
    //];

    $categorias =["Cursos","Palestras","Artigos"];
?>