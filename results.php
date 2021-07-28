<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <main>
    <div class="container">
        

        <?php
        $valores = ["Nombre" => $_POST["name"], "Apellido" => $_POST["lastname"], "Direccion" => $_POST["direcction"], "Telefono" => $_POST["tel"], "Mail" => $_POST["email"], "Mensaje" => $_POST["mesage"]];
        
        $notas = array($_POST["fnote"], $_POST["snote"], $_POST["tnote"]);

        $notas[3] = (floatval($notas[0]) + floatval($notas[1]) + floatval($notas[2])) / 3;

        echo ('<h2 class="title" >' . strtoupper($valores["Nombre"]) . ' ' . strtoupper($valores["Apellido"]) . ' </h2>');
        echo ("<br>");
        echo ('<h2 class="title">Direcci&oacuten: ' . strtolower($valores["Direccion"]) . '</h2>');
        echo ('<h2 class="title">Mensaje: ' . strlen($valores["Mensaje"]) . ' caracteres</h2>');
        echo ('<h2 class="title">Promedio: ' . $notas[3] . ' </h2>');
        echo ('<br>');
        echo ('<h2 class="title"> Desarrollo web con software libre (echo)</h2>');
        print('<h2 class="title"> Desarrollo web con software libre (print)</h2>');
        printf('<h2 class="title"> Desarrollo web con software libre (printf)</h2>');
        ?>
    </div>  
    </main>
    
    
</body>
</html>