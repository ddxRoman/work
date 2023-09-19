<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <!-- Свои стили подлкючать после бутстрапа -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Свои стили подлкючать после бутстрапа -->
    <title>Bootstrap Leaening</title>
</head>
<body>

<? $products=54483;?>

<script>
  function writeId() {

    <?$id=$products[0]?>
    alert(<?=$id?>)
  }
</script>

<input type="button" onclick="writeId()" value="Считать кроликов!">

</html>