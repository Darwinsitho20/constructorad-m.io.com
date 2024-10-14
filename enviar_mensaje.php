<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación - Constructora D&M</title>
    <style>
        body {
            background-color: white; /* Fondo blanco */
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Altura completa de la pantalla */
            margin: 0;
            text-align: center;
        }

        h1 {
            color: #333; /* Color de texto */
            margin: 0;
        }

        p {
            font-size: 18px; /* Tamaño de fuente */
            color: #666; /* Color de texto secundario */
        }

        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #ffdd57; /* Color del botón */
            color: black;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        a:hover {
            background-color: #ffd100; /* Color al pasar el mouse */
        }
    </style>
</head>
<body>

    <div>
        <h1>Mensaje Enviado</h1>
        <p><?php echo isset($_GET['mensaje']) ? htmlspecialchars($_GET['mensaje']) : 'No se pudo enviar el mensaje.'; ?></p>
        <a href="index.html">Volver a la Página Principal</a>
    </div>

</body>
</html>
