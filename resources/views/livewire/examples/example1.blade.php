<div class="p-8">
    <h1 class="text-center text-3xl font-bold mb-4">Hello Mundo Livewire</h1>
    <h2 class="text-center text-xl mb-4">{{ $title }}</h2>
    
    <div class="m-auto text-center">
        <input wire:model='idstudent' type="text" class="border border-gray-300 px-4 py-2 rounded-md mb-4">
        <button wire:click='showStudent' class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded mr-2">Mostrar Estudiante</button>
    </div>
    <div class="m-auto text-center">
        <button wire:click='allStudent' class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Mostrar Todos los Estudiantes</button>
    </div>
    
    @if(isset($student) && is_iterable($student))
        <div class="mt-12 text-center">
            <table class="table-auto border-collapse border border-gray-400 m-auto w-3/6">
                <thead>
                    <tr>
                        <th class="px-4 py-2 bg-gray-200 border border-gray-400">ID</th>
                        <th class="px-4 py-2 bg-gray-200 border border-gray-400">Nombre</th>
                        <!-- Agrega más columnas según las propiedades de tu modelo Student -->
                    </tr>
                </thead>
                <tbody>
                    @foreach($student as $s)
                        <tr>
                            <td class="px-4 py-2 border border-gray-400">{{ $s->id }}</td>
                            <td class="px-4 py-2 border border-gray-400">{{ $s->name_student }}</td>
                            <!-- Agrega más columnas según las propiedades de tu modelo Student -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @elseif(isset($student))
        <div class="mt-12 text-center">
            <table class="table-auto border-collapse border border-gray-400 m-auto w-3/6">
                <thead>
                    <tr>
                        <th class="px-4 py-2 bg-gray-200 border border-gray-400">ID</th>
                        <th class="px-4 py-2 bg-gray-200 border border-gray-400">Nombre</th>
                        <!-- Agrega más columnas según las propiedades de tu modelo Student -->
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="px-4 py-2 border border-gray-400">{{ $student->id }}</td>
                        <td class="px-4 py-2 border border-gray-400">{{ $student->name_student }}</td>
                        <!-- Agrega más columnas según las propiedades de tu modelo Student -->
                    </tr>
                </tbody>
            </table>
        </div>
    @endif
</div>
