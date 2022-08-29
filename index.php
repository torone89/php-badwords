
<?php
$text = "Mark: I wanna hear everyone scream
fuck you Tom, we fucking hate you,
you gunna burn in hell and die a horrible firery death
cause we think you're a stupid piece of shit!";

// Passiamo sulla barra del browser in query string una parola che vogliamo censurare
// http://localhost:8888/php-badwords/?censure(KEY)=fuck
$change_word = $_GET['censure'];

// Metodo Replace Sostituisce una porzione di una stringa con un nuovo valore (Porzione da Modificare, Concosa, stringa)
$text_censured = str_replace($change_word, '***', $text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP BadWords</title>
    <!-- IMPORT BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>
<div class="container text-center mt-5">
<!-- stampo la variabile text -->
<p>
    <h5  class="fw-bold"><?php  echo $text; ?></h5>
  </p>
<!-- Stampo la lunghezza della stringa -->
  <p>
   <h6 class="text-danger text-uppercase fw-bold"> Lunghezza Paragrafo:</h6> <?php echo strlen($text); ?> Caratteri
  </p>
<!-- Stampo la frase con il text della key censurata -->
  <p>
  <h5  class="fw-bold">  <?php echo $text_censured; ?></h5>
  </p>
<!-- Stampo la lunghezza della frase con il text della key censurata -->
  <p>
   <h6 class="text-danger text-uppercase fw-bold"> Lunghezza Paragrafo Censurato:</h6> <?php echo strlen($text_censured); ?> Caratteri
  </p>
</div>
</body>
</html>