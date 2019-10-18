
<?php include_once('config/variaveis.php')?>


<header class="d-flex justify-content-between align-items-center p-3">
    <div class="navbar">
        <h1 id="logo">
           <?php echo $nomeSistema; ?>
        </h1>
        <nav>
            <ul class='nav'>
            <?php if(isset($usuario) && $usuario !=[] ) {?>
                <li class="nav-item">
                    <a class="nav-link" href="#">Curso</a>
                </li>
                <li class="nav-item"> 
                    <a class="nav-link" href="#">Olá <?php echo $usuario['nome']; ?></a>
                </li>
                <li class="nav-item"> 
                    <a class="nav-link" href="sair.php"> Sair </a>
                </li>
            <?php } else { ?>
                <li class="nav-item"> 
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class ="nav-item">
                    <a class="nav-link" href="#">Cadastrar</a>
                </li>
            <?php } ?>
            </ul>       
        </nav>
    </div>
    
</header>
<nav class="navbar bg-dark">
            <ul class="nav">
               <?php foreach($categorias as $categoria) { ?>
                 <li class="nav-item">
                    <a class="nav-link text-wite" href="#"><?php echo $categoria; ?></a>
                </li>
               <?php } ?>
            </ul>
        
    </nav>