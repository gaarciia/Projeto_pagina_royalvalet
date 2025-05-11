<!DOCTYPE html>
<html lang="pt-br">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <title>Royal Valet</title>
  </head>
  <body>
    <?php include("cabecalho.php"); ?>


    <style>
    body {
        background-image: url('imagens/54094.jpg');
        background-size: contain;
        background-position: center;
        background-attachment: fixed;
    }
</style>




   
    <main class="container">
       
    
    <br>
    <br>
 

    <!-- início carrossel -->
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <!-- C1 -->
            <div class="carousel-item active">
                <img src="imagens/foto-1.png" class="d-block w-100" alt="Hotel Palace" style="max-height: 600px; object-fit: cover;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Hotel Palace</h5>
                    <p>📌Rio de Janeiro</p>
                </div>
            </div>

            <!-- C2 -->
            <div class="carousel-item">
                <img src="imagens/foto-3.png" class="d-block w-100" alt="Hotel Oceania" style="max-height: 600px; object-fit: cover;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Hotel Oceania</h5>
                    <p>📌Natal</p>
                </div>
            </div>

            <!-- C3 -->
            <div class="carousel-item">
                <img src="imagens/foto-4.png" class="d-block w-100" alt="Hotel Setai" style="max-height: 600px; object-fit: cover;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Hotel Setai</h5>
                    <p>📌São Paulo</p>
                </div>
            </div>

            <!-- C4 -->
            <div class="carousel-item">
                <img src="imagens/foto-5.png" class="d-block w-100" alt="Garden" style="max-height: 600px; object-fit: cover;">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Garden</h5>
                    <p>📌Paraíba</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- fim carrossel -->
    </main>


    
    <?php include("rodape.php"); ?>

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
