<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Bienvenida</title>
</head>

<body class="flex flex-col h-screen">
    <header class="bg-[#02AB82] text-white py-4">
        <div class="container mx-auto flex justify-between items-center px-4">
            <div class="ml-10">
                <img src="{{ asset('UTCancun.png') }}" class="h-20 w-60" />
            </div>
            <h1 class="text-3xl font-bold">¡Bienvenido!</h1>
            <nav>
                <ul class="flex space-x-8 mr-10">
                    <li><a href="#" class="hover:text-gray-300 font-bold">Inicio</a></li>
                    <li><a href="#" class="hover:text-gray-300 font-bold">Carreras</a></li>
                    <li><a href="#" class="hover:text-gray-300 font-bold">Tu Universidad</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="flex flex-grow">
        <aside class="bg-[#02AB82] text-white py-4 w-48 h-full">
            <h2 class="text-xl font-bold mb-12 text-center">Navegación</h2>
            <ul class="space-y-16 flex flex-col items-center">
                <li><a href="/formulario" class="hover:text-gray-300 font-bold">Formulario</a></li>
                <li><a href="/students" class="hover:text-gray-300 font-bold">CRUD</a></li>
                <li><a href="#" class="hover:text-gray-300 font-bold">Estudiantes</a></li>
            </ul>
        </aside>
        <div class="container mx-auto px-4 py-8">
            <h2 class="text-2xl font-bold mb-4 text-center">Universidad Tecnológica de Cancún</h2>
            <div class="text-justify ml-14 mr-14 mt-12 space-y-10">
                <p>¡Bienvenido a la UTCancún! Somos una institución dedicada a ofrecer educación de calidad en áreas
                    como
                    tecnología, ingeniería, negocios y turismo. Nuestra misión es preparar a nuestros estudiantes para
                    enfrentar los desafíos del mundo moderno y contribuir al desarrollo de la región de Quintana Roo.
                </p>
                <p>En la UTCancún, nos esforzamos por brindar un ambiente de aprendizaje dinámico y enriquecedor, donde
                    los
                    estudiantes pueden desarrollar sus habilidades y alcanzar sus metas académicas y profesionales. Con
                    una
                    facultad altamente calificada y programas actualizados, estamos comprometidos a proporcionar una
                    educación de vanguardia que prepare a nuestros graduados para sobresalir en el mercado laboral.</p>
                <p>Explora nuestro sitio para descubrir más sobre nuestras carreras, programas académicos, eventos y
                    oportunidades de participación estudiantil. ¡Esperamos que te unas a nuestra comunidad educativa y
                    comiences tu viaje hacia el éxito con nosotros!</p>
            </div>
        </div>
    </div>
    <footer class="bg-[#02AB82] text-white py-6 mt-auto">
        <div class="container mx-auto flex justify-center">
            <p>&copy; 2024 Todos los derechos reservados.</p>
        </div>
    </footer>
</body>

</html>
