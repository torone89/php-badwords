
<?php
$text = "Mark: I wanna hear everyone scream
fuck you Tom, we fucking hate you,
you gunna burn in hell and die a horrible firery death
cause we think you're a stupid piece of shit!"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- IMPORT BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body>
<div class="container text-center mt-5">
<!-- stampo la variabile text -->
<p>
    <?php  echo $text; ?>
  </p>
<!-- Stampo la lunghezza della stringa -->
  <p>
   <h6 class="text-danger text-uppercase"> Lunghezza Paragrafo:</h6> <?php echo strlen($text); ?> Caratteri
  </p>
</div>
</body>
</html>