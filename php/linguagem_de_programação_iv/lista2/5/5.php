<?php
$flag_msg = null;
$msg = "";

$contPar = 0;
$contImpar = 0;
$contPrimo = 0;

if (isset($_GET['enviar']))
{ // isset verifica se a variável foi iniciada
  for ($n = 0; $n < 50; $n++)
  {
    $x = rand(1, 100);
    $array[] = $x;
  }
  sort($array);
  $flag_msg = true;
  foreach ($array as $key => $val) 
  {
    $cont = 0;
    $msg .= "array[" . $key . "] = " . $val . "\n<br>";
    if ($val % 2 == 0)
      $contPar++;
    else
      $contImpar++;
    for($n = 1; $n <= $val; $n++)
      if($val % $n == 0)
      {
        $cont++;
      }
    if ($cont == 2)
    {
      $contPrimo++;
    }
  } 
  $msg .= "<br>Quantidade de Números Pares: {$contPar}<br>";
  $msg .= "Quantidade de Números Ímpares: {$contImpar}<br>";
  $msg .= "Quantidade de Números Primos: {$contPrimo}<br>";
}
?>

<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    form {
      text-align: center;
    }
  </style>
  <title>Exercício PHP 05</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../estilo.css">
</head>
<body>
<div class = "all">
  <header>
    <div class="p-4 mb-4 bg-primary">
      <h1 class="display-5">Tabuada</h1>
      <hr class="my-3">
      <p class="lead">Criar um array com 50 números inteiros, exibi-lo em ordem crescente e exibir a quantidade de números pares e de números primos.</p>
    </div>
  </header>

  <div class="container">
    <form method="GET">
      <button type="submit" class="btn btn-success mb-5" name="enviar">Exibir em ordem crescente e exibir a quantidade de números pares e de números primos</button><br>
      <a  href="../index.html"><button type="button" class="btn btn-danger mb-2" name="voltar">Voltar</button></a>
    </form>
    <?php 
      if (!is_null($flag_msg)) {
        if ($flag_msg) {
          echo "<div class='alert alert-primary' role='alert'>$msg</div><br>"; 
        }
      }
    ?>
  </div>
</div>
</body>
</html>