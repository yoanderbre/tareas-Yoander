<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Creativa</title>
    <style>
        body {
            background-image: linear-gradient(to bottom, #33ccff, #ff99cc);
            background-size: cover;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
        }
        
        .titulo {
            text-align: center;
            font-size: 40px;
            text-shadow: 2px 2px 5px #000;
            color: #fff;
            margin-top: 100px;
        }
        
        .boton {
            display: block;
            margin: 50px auto;
            padding: 15px 30px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        
        .boton:hover {
            background-color: #3e8e41;
        }
        
        .contenedor {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.7);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <div class="contenedor">
        <h1 class="titulo">Bienvenido a mi página creativa</h1>
        <button class="boton" onclick="alert('¡Hola!')">Descubre más</button>
        <p>Esta página es un ejemplo de cómo puedes hacer algo creativo con HTML y CSS. Puedes personalizar los colores, fuentes y efectos para que se adapte a tus gustos.</p>
    </div>
</body>
</html>