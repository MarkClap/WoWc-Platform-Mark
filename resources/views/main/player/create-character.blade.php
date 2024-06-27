<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablero</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/Scene3D/character_scene/main.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="flex flex-col h-screen w-screen text-black">
    <header class="w-full flex h-14">
        <nav class="bg-white flex w-full justify-between px-3 items-center">
            <p>WOW</p>
            <p>CREATE PERSONAJE</p>
            <p>ICON</p>
        </nav>

    </header>

    <main class="flex flex-row flex-grow bg-transparent h-full w-full">

        <section id="scene" class="fixed h-full w-full max-h-full max-w-full -z-10">
            <div id="loading" role="alert"
                class="h-full w-full max-h-full max-w-full bg-neutral-900 transition-opacity duration-300 ease-linear fixed -z-20">
                <div class="flex h-full justify-center items-center">
                    <span class="loading loading-spinner loading-lg" aria-label="Canvas is loading..."></span>
                </div>
            </div>
            <canvas id="canvas" class="fixed"></canvas>
        </section>

        <section class="w-1/3 p-2 flex justify-between">
            <div class="w-3/4 p-2 flex flex-col justify-between">
                <section class=" p-2 space-y-2 flex flex-col flex-grow justify-center">
                    <div class=" p-2 flex justify-center">
                        <h1>Personajes</h1>
                    </div>
                    <div class=" p-2 space-y-4 flex flex-col items-center">
                        <div class="bg-orange-500 p-2 w-2/5 rounded-md flex justify-center ">
                            <p>Mago</p>
                        </div>
                        <div class="bg-orange-500 p-2 w-2/5 rounded-md flex justify-center">
                            <p>Guerrero</p>
                        </div>
                        <div class="bg-orange-500 p-2 w-2/5 rounded-md flex justify-center">
                            <p>Sanador</p>
                        </div>
                    </div>
                </section>


                <section class=" p-2 space-y-2 flex flex-col flex-grow justify-center items-center">
                    <div class=" flex justify-center">
                        Género
                    </div>
                    <div class="p-2 space-x-5 flex flex-row justify-center">
                        <div class="bg-orange-500 p-2 rounded-md text-2xl flex justify-center w-16 h-16">
                            <span class="icon-[whh--male]"></span>
                        </div>
                        <div class="bg-orange-500 p-2 rounded-md text-2xl flex justify-center w-16 h-16">
                            <span class="icon-[whh--female]"></span>
                        </div>
                    </div>
                </section>

                <section class=" p-2 space-y-2 flex flex-col items-center justify-center flex-grow">
                    <div class="p-2 flex flex-row justify-between w-4/5">
                        <div class=" flex items-center px-3">
                            <p>Color de pelo</p>
                        </div>
                        <div class= "flex flex-row p-2 gap-4 justify-between">
                            <div class="bg-yellow-300 px-3 rounded-lg">
                                <p>
                                    < </p>
                            </div>
                            <div class="bg-yellow-300 px-3 rounded-lg">
                                <p> > </p>
                            </div>
                        </div>
                    </div>

                    <div class=" p-2 flex flex-row justify-between w-4/5">
                        <div class="flex  items-center px-3">
                            <p>color de piel</p>
                        </div>
                        <div class="flex flex-row p-2 gap-4 justify-between">
                            <div class="bg-yellow-300 px-3 rounded-lg">
                                <p>
                                    < </p>
                            </div>
                            <div class="bg-yellow-300 px-3 rounded-lg">
                                <p> > </p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </section>

        <section class="w-1/3 space-y-2 p-2 flex flex-col-reverse justify-between ">


            <section class=" p-2 flex flex-col gap-2 items-center">
                <div class="bg-yellow-400 flex justify-center w-3/6 p-2 rounded-md">
                    <p>Nombre</p>
                </div>
                <div class="bg-yellow-400 flex justify-center w-3/6 p-2 rounded-md">
                    <p>Randomize</p>
                </div>
            </section>
        </section>

        <section class="w-1/3 space-y-2 p-2 flex flex-col items-center py-20 justify-between flex-grow">
            <div class="flex flex-col h-4/6 w-full items-center gap-y-10">

                <section class="bg-white p-2 space-y-2 flex flex-col flex-grow w-3/5">
                    <div class="flex justify-center">
                        <p>Descripción del personaje</p>
                    </div>
                    <div class="bg-slate-100 h-5/6">item</div>
                </section>
                <section class="bg-white p-2 space-y-2 flex flex-col flex-grow w-3/5">
                    <div class="flex justify-center">
                        <p>Poderes del personaje</p>
                    </div>
                    <div class="bg-slate-100 h-5/6">item</div>
                </section>
            </div>
            <section class="w-full p-2 flex justify-center">
                <div class="bg-white p-2 flex justify-center w-2/6 rounded-md">
                    <p>Aceptar</p>
                </div>
            </section>

        </section>

    </main>
</body>

</html>
