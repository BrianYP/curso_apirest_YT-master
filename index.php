<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API - Rest</title>
    <link rel="stylesheet" href="assets/estilo.css" type="text/css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .divbody {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 20px;
            padding: 20px;
        }

        h3 {
            color: #555;
        }

        code {
            display: block;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>API Rest PHP</h1>
    <div class="divbody">
        <h3>Auth - login</h3>
        <code>
            POST  /auth<br>
            {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;"usuario": "",  -> REQUERIDO<br>
            &nbsp;&nbsp;&nbsp;&nbsp;"password": "" -> REQUERIDO<br>
            }
        </code>
    </div>
    <div class="divbody">
        <h3>Pacientes</h3>
        <code>
            GET  /pacientes?page=$numeroPagina<br>
            GET  /pacientes?id=$idPaciente
        </code>

        <code>
            POST  /pacientes<br>
            {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;"nombre": "",               -> REQUERIDO<br>
            &nbsp;&nbsp;&nbsp;&nbsp;"dni": "",                  -> REQUERIDO<br>
            &nbsp;&nbsp;&nbsp;&nbsp;"correo": "",                 -> REQUERIDO<br>
            &nbsp;&nbsp;&nbsp;&nbsp;"codigoPostal": "",             <br>
            &nbsp;&nbsp;&nbsp;&nbsp;"genero": "",        <br>
            &nbsp;&nbsp;&nbsp;&nbsp;"telefono": "",       <br>
            &nbsp;&nbsp;&nbsp;&nbsp;"fechaNacimiento": "",      <br>
            &nbsp;&nbsp;&nbsp;&nbsp;"token": ""                 -> REQUERIDO        <br>
            }

        </code>
        <code>
            PUT  /pacientes<br>
            {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;"nombre": "",               <br>
            &nbsp;&nbsp;&nbsp;&nbsp;"dni": "",                  <br>
            &nbsp;&nbsp;&nbsp;&nbsp;"correo": "",                 <br>
            &nbsp;&nbsp;&nbsp;&nbsp;"codigoPostal": "",             <br>
            &nbsp;&nbsp;&nbsp;&nbsp;"genero": "",        <br>
            &nbsp;&nbsp;&nbsp;&nbsp;"telefono": "",       <br>
            &nbsp;&nbsp;&nbsp;&nbsp;"fechaNacimiento": "",      <br>
            &nbsp;&nbsp;&nbsp;&nbsp;"token": "" ,                -> REQUERIDO        <br>
            &nbsp;&nbsp;&nbsp;&nbsp;"pacienteId": ""   -> REQUERIDO<br>
            }

        </code>
        <code>
            DELETE  /pacientes<br>
            {   <br>
            &nbsp;&nbsp;&nbsp;&nbsp;"token": "",                -> REQUERIDO        <br>
            &nbsp;&nbsp;&nbsp;&nbsp;"pacienteId": ""   -> REQUERIDO<br>
            }

        </code>
    </div>
</div>
    
</body>
</html>
