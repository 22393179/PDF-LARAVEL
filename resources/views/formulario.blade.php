<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 p-8">
    <h2 class="text-4xl text-center m-4 font-bold mb-10">Formulario</h2>
    <form action="/submit_formulario" method="POST" class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
        <div class="mb-4">
            <label for="nombre" class="block text-gray-700 font-semibold mb-2">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required
                class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
        </div>
        <div class="mb-4">
            <label for="matricula" class="block text-gray-700 font-semibold mb-2">Matrícula:</label>
            <input type="text" id="matricula" name="matricula" required
                class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700 font-semibold mb-2">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required
                class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
        </div>
        <div class="mb-6">
            <label for="password" class="block text-gray-700 font-semibold mb-2">Contraseña:</label>
            <input type="password" id="password" name="password" required
                class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
        </div>
        <button type="submit"
            class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition duration-200">Enviar</button>
            <div class="flex justify-end mt-3">
                <a href="/" class=" text-red-500">Regresar</a>
            </div>
    </form>
</body>

</html>
