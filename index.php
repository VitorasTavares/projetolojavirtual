<?php
    $nomeSistema = "Cursos Vitor";
    $usuario = ["nome"=>"Vitor"];

    $produtos = [
        ["nome"=>"Curso Fullstack","preco"=>"1200.00","duracao"=>"5 meses"],
        ["nome"=>"Curso Marketing","preco"=>"1000.00","duracao"=>"4 meses"],

    ];

    $categorias =["Cursos","Palestras","Artigos"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<header>
    <div class="navbar">
        <h1 id="logo">
           <?php echo $nomeSistema; ?>
        </h1>
        <nav>
            <ul class="nav">
            <?php if(isset($usuario) && $usuario !="" ) {?>
                <li class="nav-item">
                    <a class="nav-link" href="#">Curso</a>
                </li>
                <li class="nav-item"> 
                    <a class="nav-link" href="#">Olá <?php echo $usuario['nome']; ?></a>
                </li>
            <?php } else { ?>
                <li class="nav-item"> 
                    <a class="nav-link" href="#">Login</a>
                </li>
                <li class ="nav-item">
                    <a class="nav-link" href="#">Cadastrar</a>
                </li>
            <?php } ?>
            </ul>       
        </nav>
    </div>
    <nav class="navbar bg-dark">
            <ul class="nav">
               <?php foreach($categorias as $categoria) { ?>
                 <li class="nav-item">
                    <a class="nav-link text-wite" href="#"><?php echo $categoria; ?></a>
                </li>
               <?php } ?>
            </ul>
        
    </nav>
</header>
<main>
    <section class="container">
            <div class="row justify-content-around">
        <?php if(isset($produtos) && $produtos != []){?> 

            <?php foreach($produtos as $produto){ ?>
                <div class="col-lg-3 card text-center">
                    <h2><?php echo $produto['nome']; ?></h2>
                      <img src="img/imagem1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                           <h5 class="card-title"><?php echo $produto ['preco']; ?></h5>
                          <a href="#" class="btn btn-primary">Comprar</a>
                       </div>
                </div> 
            <?php } ?>   
       <?php } else { ?> 
             <h1>Não tem produtos cadastrados nessa sessão :( </h1>
        <?php } ?>        
    </section>
  
</main>  
</body>
</html>