<!DOCTYPE html>
<html>
    <head>
        <title>Register Form</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body>
        <div class="formulario">
            <h1>Datos del cliente</h1>
            <p>
                <?php
                echo "Nombre: " . htmlspecialchars($_POST["name"]) . "<br>";
                echo "Contraseña: " . htmlspecialchars($_POST["password"]) . "<br>";
                echo "Email: " . htmlspecialchars($_POST["email"]) . "<br>";
                echo "Fecha de nacimiento: " . htmlspecialchars($_POST["dateofbirth"]) . "<br>";
                echo "Teléfono: " . htmlspecialchars($_POST["tel"]) . "<br>";
                echo "Tienda: " . htmlspecialchars($_POST["shop"]) . "<br>";
                echo "Edad: " . htmlspecialchars($_POST["age"]) . "<br>";
                echo "Suscripción: " . (isset($_POST["subscription"]) ? "Sí" : "No") . "<br>";
                ?>  
            </p>
        </div>
    </body>
</html>





