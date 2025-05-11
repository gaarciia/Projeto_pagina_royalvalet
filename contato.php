<!DOCTYPE html>
<html lang="pt-br">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Royal Vatet</title>
  </head>
  <style>
    body {
        background-image: url('imagens/54094.jpg');
        background-size: contain;
        background-position: center;
        background-attachment: fixed;
        color: white;
    }
    </style>
  <body>
    <?php include("cabecalho.php"); ?>

    
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center m-4">Fale conosco</h2>
                
            </div>
        </div>
        <div class="row">
            <div class="col-6">  
                <fieldset>
                    <legend class="mb-4"> Entre em contato:</legend>          
                    <form class="needs-validation" novalidate>
                        <div class="form-group row">
                            <label for="validationCustom01" class="col-sm-2 col-form-label">Nome</label>
                            <div class="col-sm-10">                        
                                <input type="text" class="form-control" minlength="5" id="validationCustom01" placeholder="Nome" required>
                                <div class="invalid-feedback">
                                    Por favor, informe seu nome.
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="validationCustom02" class="col-sm-2 col-form-label">E-mail</label>
                            <div class="col-sm-10">                        
                                <input type="email" class="form-control" id="validationCustom02" placeholder="E-mail" required>
                                <div class="invalid-feedback">
                                    Por favor, informe um e-mail válido.
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="validationCustom03" class="col-sm-2 col-form-label">Cidade</label>
                            <div class="col-sm-10">                        
                                <input type="text" class="form-control" id="validationCustom03" placeholder="Cidade" required>
                                <div class="invalid-feedback">
                                    Por favor, informe a sua cidade.
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="validationCustom04" class="col-sm-2 col-form-label">Estado</label>
                            <div class="col-sm-10">   
                                <select class="custom-select" required id="validationCustom04">
                                    <option value="">Selecione uma opção</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espírito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PA">Pará</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="SP">São Paulo</option>
                                </select> 
                                <div class="invalid-feedback">
                                    Por favor, selecione um estado.
                                </div>                   
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="validationCustom05" class="col-sm-2 col-form-label">Informe</label>
                            <div class="col-sm-10">   
                                <textarea class="form-control" id="validationCustom05" placeholder="Informe sua dúvida..." required></textarea>
                                <div class="invalid-feedback">
                                    Por favor, informe a sua dúvida.
                                </div>
                            </div>

                        </div>

                        <p class="text-center">
                             <button class="btn btn-danger" type="submit">Enviar</button>
                            <button class="btn btn-secondary" type="reset">Limpar</button>
                        </p>
                    </form>
                </fieldset>


            </div>
            <div class="col-6">
                <fieldset>
                    <legend class="mb-4">Veja a localização da nossa empresa:</legend>    
                    <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" 
                    <iframe class="embed-responsive-item" 
                                 src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7431.364893401971!2d-34.842708!3d-7.116667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2s!4v1600798676220!5m2!1spt-BR!2s" width="600" height="450" frameborder="0" tyle="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </fieldset>
            </div>
        </div>
    </main>
    

    <?php include("rodape.php"); ?>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
        
        (function() {
        'use strict';
        window.addEventListener('load', function() {
            
            var forms = document.getElementsByClassName('needs-validation');
           
            var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
            });
        }, false);
        })();
        </script>
  </body>
</html>