<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST</title>
</head>

<body>

    <?php
    include_once('Tramite.php');
    $tramite = new Tramite;
    $tramite->setFecha($_POST['fecha']);
    $tramite->setNombre($_POST['nombre']);
    $tramite->setDepartamento($_POST['departamento']);

    echo $tramite->getFecha();
    echo $tramite->getNombre();
    echo $tramite->getDepartamento();
    ?>

    <form action="index.php" method="post">
        <input type="date" name="fecha">
        <input type="text" name="nombre">
        <input type="number" name="departamento">
        <button type="submit" >Enviar</button>
    </form>

</body>

</html>