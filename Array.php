<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    echo "<h1>Ejercicio 1</h1>";

    $persona = array("nombre" => "Sara", "apellido" => "Martínez", "edad" => 23, "ciudad" => "Barcelona");
    $contador = 1;
    foreach ($persona as $value) {
        echo "dato " . $contador . "º: " . $value . "<br>";
        $contador++;
    }


    echo "<h1>Ejercicio 2</h1>";

    foreach ($persona as $key => $value) {
        echo " $key: $value <br>";
    }


    echo "<h1>Ejercicio 3</h1>";

    $persona["edad"] = 24;
    $contador = 1;
    foreach ($persona as $valor) {
        echo "dato " . $contador . "º: " . $valor . "<br>";
        $contador++;
    }


    echo "<h1>Ejercicio 4</h1>";

    unset($persona["ciudad"]);
    var_dump($persona);


    echo "<h1>Ejercicio 5</h1>";

    $letters = "a,b,c,d,e,f";
    $lettersArray = explode(",", $letters);
    rsort($lettersArray);
    foreach ($lettersArray as $index => $letter) {
        echo "letter " . (count($lettersArray) - $index) . "°: " . $letter . "<br>";
    }


    echo "<h1>Ejercicio 6</h1>";

    $notas = array("Miguel" => 5, "Luís" => 7, "Marta" => 10, "Isabel" => 8, "Aitor" => 4, "Pepe" => 1);
    arsort($notas);
    echo "Notas de los estudiantes: ";
    foreach ($notas as $nombre => $nota) {
        echo $nombre . ": " . $nota . " ";
    }


    echo "<h1>Ejercicio 7</h1>";

    $sumaNotas = array_sum($notas);
    $totalAlumnos = count($notas);
    $media = $sumaNotas / $totalAlumnos;
    echo "Media de las notas: " . number_format($media, 2) . "<br>";
    echo "Alumnos con nota por encima de la media:<br>";
    foreach ($notas as $nombre => $nota) {
        if ($nota > $media) {
            echo $nombre . "<br>";
        }
    }

    
    echo "<h1>Ejercicio 8</h1>";

    $notaMasAlta = max($notas);
    $mejorAlumno = array_search($notaMasAlta, $notas);
    echo "La nota más alta es $notaMasAlta y el mejor alumno es $mejorAlumno";

    ?>