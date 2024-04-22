<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reportes</title>
    @vite('resources/css/app.css') 
    <style>
        .contenedor{
            overflow-y: auto; /* Permitimos el desplazamiento vertical */
            margin: 0 auto;
            padding: 20px;
            max-height: 400px; /* Establecemos una altura máxima para el contenedor */
            display: grid; /* Utilizamos CSS Grid para el diseño */
            grid-template-columns: auto auto; /* Dos columnas */
            gap: 20px; /* Espacio entre columnas */
        }
        .titulo{
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            grid-column: 1 / span 2; /* La cabecera abarca las dos columnas */
        }
        .tabla{
            border-collapse: collapse;
            table-layout: auto;
        }
        .tabla th, .tabla td{
            padding: 10px;
            border: 1px solid #000;
        }
        .tabla th{
            background-color: #f0f0f0;
            writing-mode: vertical-rl; /* Rotamos el encabezado verticalmente */
        }
        .tabla > tbody > tr > td{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="contenedor">
        <h1 class="titulo">{{ $tittle }}</h1>
        <table class="tabla">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Cumpleaños</th>
                    <th>Comentarios</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name_student }}</td>
                    <td>{{ $student->lastname_student }}</td>
                    <td>{{ $student->birthdate }}</td>
                    <td>{{ $student->comments }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
