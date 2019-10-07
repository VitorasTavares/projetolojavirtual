<?php
    $nomeSistema = "Cursos Vitor";
    $usuario = ["nome"=>"Vitor"];    
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
<?php include_once("header.php");?>








<main>
   <section class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>Carrinho de Compras</h1>
                            <div class="col-12">
                                <div class="row card">
                                       <div class="col-12">
                                         <h3>Você está comprando o <?php echo $_GET['nomeProduto']; ?> </h3>
                                            <div class="col-lg-6 col-md-6">

                                            </div>
                                                 <form class="d-flex flex-column p-3" method="post" action="sucesso.php">>
                                                    <input type="text" name="nomeCompleto" placeholder="Digite seu nome">
                                                    <input type="text" name="cpf" placeholder="Digite seu CPF">
                                                    <input type="number" name="cartão" placeholder="Digite o numero do cartão">
                                                    <input type="date" name="validadeCartão" placeholder="Digite a data de validade">
                                                    <input type="password" name="codigoCartao" placeholder="Digite o CV">
                                                    <input class="btn btn-sucess" type="submit">Finalizar a compra</button>
                                                </form>
                                        </div>
                                </div>
                            </div>
                        
                    </div>
                </div>
    </section>
  
</main>  
</body>
</html>