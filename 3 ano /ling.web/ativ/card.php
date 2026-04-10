<?php

require_once("modelo/Filme.php");

$filme = new Filme();
$filme->setNome($_POST['nome']); $filme->setNota($_POST['nota']);
$filme->setUrl_imagem($_POST['url']); $filme->setGenero($_POST['genero']);
$filme->setDecada($_POST['decada']); 
print(
"<div class='d-flex justify-content-center align-items-center vh-100'>
    <div class='card' style='width: 18rem'>
      <img src='" . $filme->getUrl_imagem() . "' class='card-img-top' alt='...' />
      <div class='card-body'>
        <h5 class='card-title'>" . $filme->getNome() ."</h5>
        <p class='card-text'>
          " . $filme->getNome() . " é um filme de " . $filme->getGenero() . " dos
          anos " . $filme->converterNumeroParaDecada($filme->getDecada()) . ".
          Você deu " . $filme->getNota() . " estrelas para esse filme.
        </p>
        <a href='formulario.php' class='btn btn-primary'>Inserir novo filme</a>
      </div>
    </div>
  </div>"
); 
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Info. Filme</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
