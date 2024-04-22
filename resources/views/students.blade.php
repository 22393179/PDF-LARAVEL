<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Lista de estudiantes</title>
</head>

<body>
    <div class="flex justify-center items-center min-h-screen">
        <div class="w-full">
            <h1 class="text-center text-4xl m-8 font-bold">Lista de estudiantes</h1>
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr>
                        <th
                            class="px-6 py-3 bg-gray-50 text-center text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            ID
                        </th>
                        <th
                            class="px-6 py-3 bg-gray-50 text-center text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Nombre
                        </th>
                        <th
                            class="px-6 py-3 bg-gray-50 text-center text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Apellido
                        </th>
                        <th
                            class="px-6 py-3 bg-gray-50 text-center text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Acciones
                        </th>
                        
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($students as $student)
                        <tr>
                            <td class="px-6 py-4 text-center whitespace-no-wrap">
                                {{ $student->id_student }}
                            </td>
                            <td class="px-6 py-4 text-center whitespace-no-wrap">
                                {{ $student->name_student }}
                            </td>
                            <td class="px-6 py-4 text-center whitespace-no-wrap">
                                {{ $student->lastname_student }}
                            </td>
                            <td class="flex justify-center items-center space-x-6 mt-4">
                                <a href="{{ route('estudiantes.show', $student->id) }}">Detalles</a>
                                <a href="{{ route('estudiantes.edit', $student->id) }}">Editar</a>
                                <a href="{{ route('students.cardex', $student->id) }}">PDF</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $students->links()}}
        </div>
    </div>
</body>

</html>
