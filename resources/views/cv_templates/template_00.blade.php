<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Document</title>
</head>

<body>
    <header class="absolute bg-blue-200 mt-10 py-10 w-full">
        <h1 class="text-center text-3xl font-extrabold text-blue-950">JHON AZCÁRATE</h1>
        <p class="text-center font-serif font-bold text-blue-950">Full Stack Developer.</p>
    </header>

    <aside class="w-[30%] min-h-[100vh] bg-gray-300 mx-10 pt-52 px-6">
        <div class="flex flex-col gap-3 border-b-4 border-dotted border-blue-950 pb-5">
            <h2 class="text-blue-950 text-xl font-semibold">
                SOBRE MI
            </h2>
            <p class="text-blue-950 text-sm">
                Como estudiante de análisis y desarrollo de software se me dio la oportunidad de participar en varios
                proyectos reales, en los cuales adquirí mucha experiencia.
            </p>
            <p class="text-blue-950 text-sm">
                Mi objetivo es compartir estos conocimientos con mis compañeros del Sena mientras hago mi etapa
                practica.
            </p>
        </div>
        <div class="flex flex-col gap-3 mt-5 text-blue-950 ">
            <h2 class="text-xl font-semibold">
                CONTACTO
            </h2>
            <ul class="flex flex-col gap-3">
                <li class="flex gap-2">
                    <i class="material-symbols-outlined">
                        call
                    </i>
                    <span> +57 3013838039</span>
                </li>
                <li>
                    <p class="text-start tracking-wide" style="word-wrap: break-word;">
                        <i class="material-symbols-outlined">
                            mail
                        </i>
                        jhonazcaratework@gmail.com
                    </p>
                </li>
            </ul>
        </div>
    </aside>

</body>

</html>
