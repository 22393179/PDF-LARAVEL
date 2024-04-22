<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Estudiante</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 p-8">
    <h2 class="text-4xl text-center m-4 font-bold mb-10">Editar Estudiante</h2>
    @if ($student)
    <form action="/estudiantes/{{ $student->id }}" method="POST" class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name_student" class="block text-gray-700 font-semibold mb-2">Nombre:</label>
            <input type="text" id="name_student" name="name_student" required value="{{ $student->name_student }}" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
        </div>
        <div class="mb-4">
            <label for="apellido" class="block text-gray-700 font-semibold mb-2">Apellido:</label>
            <input type="text" id="apellido" name="lastname_student" required value="{{ $student->lastname_student }}" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500">
        </div>
        <div class="mb-4">
            <label for="comentarios" class="block text-gray-700 font-semibold mb-2">Comentarios:</label>
            <textarea id="comentarios" name="coments" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-blue-500">{{ $student->comments }}</textarea>
        </div>
        <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition duration-200">Guardar Cambios</button>
        <div class="mt-3 flex justify-end">
            <a href="{{ route('estudiantes.index') }}" class="text-blue-500">Cancelar</a>
        </div>
    </form>
@else
    <p>No se encontró ningún estudiante</p>
@endif
</body>

</html>
