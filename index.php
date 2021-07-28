<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <main>
        <div class="container">
        <?php echo ('<h1 class="title">Actividad evaluada 01</h1>') ?>
        <div class="title"> Registro</div>
        <form action="results.php" method="POST">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Nombre</span>
                    <input type="text" name="name" placeholder="Nombre" required>
                </div>
                <div class="input-box">
                    <span class="details">Apellido</span>
                    <input type="text" name="lastname" placeholder="Apellido" required>
                </div>
                <div class="input-box">
                    <span class="details">Direccion</span>
                    <input type="text" name="direcction" placeholder="Calle Hola #123" required>
                </div>
                <div class="input-box">
                    <span class="details">Telefono</span>
                    <input type="tel" name="tel" placeholder="2425-2827" required>
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="email" name="email" placeholder="ejemplo@correo.com" required>
                </div>
                <div class="input-box">
                    <span class="details">Mensaje</span>
                    <input type="text" name="mesage" placeholder="Mensaje" required>
                </div>
                <div class="input-box">
                    <span class="details">Primer Nota</span>
                    <input type="number" name="fnote" placeholder="Nota1" required>
                </div>
                <div class="input-box">
                    <span class="details">Segunda Nota</span>
                    <input type="number" name="snote" placeholder="Nota2" required>
                </div>
                <div class="input-box">
                    <span class="details">Tercer Nota</span>
                    <input type="number" name="tnote" placeholder="Nota3" required>
                </div>
            </div>
            <div >
                <button class="btn-grad" type="submit">Enviar</button>
            </div>
        </form>
        </div>
        <footer>
         <div class="container">
             <?php echo ('<h3 class="title">Ren&eacute Francisco Santamaria Calder&oacuten</h3>') ?>
         </div>
        </footer>
    </main> 
</body>
</html>