<?php
  header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
  header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    
    <link rel="stylesheet" href="../css/bodystyle1.css">
    <link rel="stylesheet" href=<?php echo "../css/documentacion1.css"?>>
    <link rel="stylesheet" href=<?php echo "../css/style.css"?>>
    <link rel="stylesheet" href=<?php echo "../css/ejemplos1.css"?>>
    <link href=<?php echo '../css/sintax.min.css'?> rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" href=<?php echo "../css/codigo.min.css"?>>
    <link rel="stylesheet" href=<?php echo "../css/footer.css"?>>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">


    <title><?php echo $titulo?></title>
</head>



<body>

