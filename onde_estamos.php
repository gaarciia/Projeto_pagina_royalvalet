<!DOCTYPE html>
<html lang="pt-br">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Royal Valet</title>
    
    <style>
        .card-personalizado {
            background-color:rgb(73, 0, 0);
            color: black;
        }

      /*  efeito passar o mouse */
      .image-hover {
        transition: transform 0.6s ease; 
        object-fit: cover; 
        width: 100%; 
        height: 200px; 
      }

      .image-hover:hover {
        transform: scale(1.2); /* aumento ao passar o mouse */
      }

      .card {
        margin: 10px;
      }

      
      .row {
        margin-bottom: 0px;
      }
    </style>

    <style>
    body {
        background-image: url('imagens/54094.jpg');
        background-size: contain;
        background-position: center;
        background-attachment: fixed;
        color: white;
    }
    </style>

  </head>

  <body>
    <?php include("cabecalho.php"); ?>

    
    <main class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="text-center m-4">Onde estamos?</h2>
          
          <br>
          

          <div class="container">

            <!-- 4 cartões linha 1 -->
            <div class="row">
              <div class="col-3">
              <div class="card card-personalizado">
                  <img src="imagens/foto-1.png" class="card-img-top image-hover" alt="Hotel Palace">
                  <div class="card-body text-white">
                    <h5 class="card-title">Hotel Palace</h5>
                    <p class="card-text">📌Rio de Janeiro</p>
                  </div>
                </div>
              </div>

              <div class="col-3">
                <div class="card card-personalizado">
                  <img src="imagens/foto-6.png" class="card-img-top image-hover" alt="Hotel Oceania">
                  <div class="card-body text-white">
                    <h5 class="card-title">Hotel Oceania</h5>
                    <p class="card-text">📌Natal</p>
                  </div>
                </div>
              </div>

              <div class="col-3">
                <div class="card card-personalizado">
                  <img src="imagens/foto-4.png" class="card-img-top image-hover" alt="Hotel Setai">
                  <div class="card-body text-white">
                    <h5 class="card-title">Hotel Setai</h5>
                    <p class="card-text">📌São Paulo</p>
                  </div>
                </div>
              </div>

              <div class="col-3">
                <div class="card card-personalizado">
                  <img src="imagens/foto-8.png" class="card-img-top image-hover" alt="Garden">
                  <div class="card-body text-white">
                    <h5 class="card-title">Garden</h5>
                    <p class="card-text">📌Paraíba</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- 4 cartões linha 2 -->
            <div class="row">
              <div class="col-3">
                <div class="card card-personalizado">
                  <img src="imagens/foto-5.png" class="card-img-top image-hover" alt="Beach Resort">
                  <div class="card-body text-white">
                    <h5 class="card-title">Beach Resort</h5>
                    <p class="card-text">📌Bahia</p>
                  </div>
                </div>
              </div>

              <div class="col-3">
                <div class="card card-personalizado">
                  <img src="imagens/foto-7.png" class="card-img-top image-hover" alt="Mountain Retreat">
                  <div class="card-body text-white">
                    <h5 class="card-title">Mountain Retreat</h5>
                    <p class="card-text">📌Minas Gerais</p>
                  </div>
                </div>
              </div>

              <div class="col-3">
                <div class="card card-personalizado">
                  <img src="imagens/foto-9.png" class="card-img-top image-hover" alt="City Lights">
                  <div class="card-body text-white">
                    <h5 class="card-title">City Lights</h5>
                    <p class="card-text">📌Brasília</p>
                  </div>
                </div>
              </div>

              <div class="col-3">
                <div class="card card-personalizado">
                  <img src="imagens/foto-10.png" class="card-img-top image-hover" alt="Desert Oasis">
                  <div class="card-body text-white">
                    <h5 class="card-title">Desert Oasis</h5>
                    <p class="card-text">📌Ceará</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    

    <?php include("rodape.php"); ?>

   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
