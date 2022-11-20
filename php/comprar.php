<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/pizza.png">
    <title>Comprar</title>

    <!-- Slider CSS -->
    <link rel="stylesheet" href="../css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../css/slider.css" />

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/global.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>    

     <!--Poppins-->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-green-marcellos">
   <div class="container-fluid">
    <a class="navbar-brand ps-4 fs-3 fw-bold text-white fst-italic" href="index.php">Marcello's <!--<img src="assets/marcellos.png" class="marcellos-img img-fluid align-self-center h-50">--></a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    
      <ul class=" collapse navbar-collapse navbar-nav justify-content-end me-auto mb-2 mb-lg-0 " id="navbarSupportedContent">
        
        <li class="nav-item align-self-start">
          <a class="nav-link active fs-5 fw-light text-white" href="cardapio.html">Cardápio</a>
        </li>
        
        <li class="nav-item align-self-start">
          <a class="nav-link active fs-5 fw-light text-white" href="sobre.html">Quem somos</a>
        </li>
        <li class="nav-item align-self-start">
          <a class="nav-link active fs-5 fw-light text-white" href="equipe.html">Nossa Equipe</a>
        </li>
        <li class="nav-item align-self-start">
          <a class="nav-link active fs-5 fw-light text-white" href="contato.html">Fale Conosco</a>
        </li>

      </ul>
      <!--Busca-->
      <!--<form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Pesquisar">
        <button class="btn-pesquisar btn btn-dark" type="submit">
          <img src="assets/search.png">
        </button>
      </form>--> 
    </div>
  </nav>
  <?php 
             include_once 'pizza.php';
             $p= new pizza();
             $pro_bd=$p->listar();
        ?>

  <main class="p-5 d-flex flex-column align-items-center">
        <form class="card-contato card icard-color py-5 d-flex flex-column align-items-center">
          <div class="text-center  border-bottom border-white" style="width: 80%;" >
            <h5 class="card-title text-white fs-3 fw-semibold ">Finalizar Pedido</h5>
          </div>
            <div class="d-flex flex-column align-items-stretch py-4" style="width: 80%;">
                <div class="mt-4">
                  <label class="form-label text-white">Nome</label>
                  <input type="text" name="txtnome" class="form-control" required placeholder="Exemplo: José da Silva">
                </div>
                <div class="mt-4">
                  <label class="form-label text-white">Telefone</label>
                  <input type="text" name="txttel" class="form-control" required placeholder="Exemplo: (11)999999999">
                </div>
                <div class="mt-4">
                  <label class="form-label text-white">Cep</label>
                  <input type="text" name="txtcep" class="form-control" required placeholder="Exemplo: 09999999">
                </div>
                <div class="mt-4">
                  <label class="form-label text-white">Complemento</label>
                  <input type="text" name="txtcomp" class="form-control" required placeholder="Número 37, Bloco A, Apartamento 03">
                </div>
                
                <div class="mt-4">
                    <label class="form-label text-white">Opções de Pizza</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Escolha uma pizza...</option>
                        <?php foreach($pro_bd as $pro_mostrar)
                        { ?>
                            <option value="<?php echo $pro_mostrar[0];?>"><?php echo $pro_mostrar[1]; ?></option>
                        <?php } ?>
                    </select>
                </div>
                
            </div>
          <input type="submit" class="btn btn-dark mt-5" value="Enviar" style="width: 50%;">
          
          
        </form> 
  
  </main> 
    
</body>
</html>