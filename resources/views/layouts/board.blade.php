<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sidebar</title>
    <script src="https://kit.fontawesome.com/da2325cb65.js" crossorigin="anonymous"></script>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="bg-neutral-900 flex flex-col min-h-screen">
    <header class="shadow-md w-full">
        <nav class="bg-neutral-800 p-2 flex items-center gap-2 justify-between">
            <div class="p-2.5 mt-1 flex items-center rounded-md text-white">
                <x-authentication-card-logo />
                <h1 class="ml-3 text-2xl text-gray-200 font-bold">WoW</h1>

            </div>
            {{-- -------------------------------------------------------------------- --}}

            <div class="flex items-center text-lg text-white gap-5 ">
                <i class="fa-solid fa-calendar-days"></i>
                <i class="fa-regular fa-hourglass-half"></i>
                <i class="fa-regular fa-circle-user"></i>
            </div>
        </nav>
    </header>

    <main class="flex flex-row flex-grow relative">
        <div
            class="sidebar absolute h-full bottom-0 left-0 duration-500 p-2 w-52 text-center bg-neutral-700 shadow">

            <div class="text-gray-100 text-xl flex flex-row h-full justify-between">
                <div>
                    <div
                        class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-yellow-500">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <span class="text-[15px] ml-4 text-gray-200">Mi personaje</span>
                    </div>

                    <div
                        class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-yellow-500">
                        <i class="fa-solid fa-book"></i>
                        <span class="text-[15px] ml-4 text-gray-200">Misiones</span>
                    </div>

                    <div
                        class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-yellow-500">
                        <i class="fa-solid fa-users"></i>
                        <div class="flex justify-between w-full items-center" onclick="dropDown()">
                            <span class="text-[15px] ml-4 text-gray-200">Sección</span>
                            <span class="text-sm rotate-180" id="arrow">
                                <i class="fa-solid fa-caret-down"></i>
                            </span>
                        </div>
                    </div>
                    {{-- -------------------------------------------------------------------- --}}

                    <div class=" leading-7 text-left text-sm font-thin mt-2 w-4/5 mx-auto" id="submenu">
                        <h1 class="cursor-pointer duration-300 p-2 hover:bg-neutral-700 rounded-md mt-1">Clase</h1>
                        <h1 class="cursor-pointer duration-300 p-2 hover:bg-neutral-700 rounded-md mt-1">Grupo</h1>
                    </div>
                    <div
                        class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-yellow-500">
                        <i class="fa-solid fa-right-to-bracket"></i>
                        <span class="text-[15px] ml-4 text-gray-200">Logout</span>
                    </div>
                    {{-- -------------------------------------------------------------------- --}}

                </div>
                <label class="swap swap-rotate">
                    <input type="checkbox" class="hidden"/>
                    <a class=" cursor-pointer swap-on" onclick="Openbar()"><span class="icon-[material-symbols--arrow-forward-ios-rounded]"></span></a>
                    <a class=" cursor-pointer swap-off" onclick="Openbar()"><span class="icon-[material-symbols--arrow-back-ios-rounded]"></span></a>
                </label>

            </div>
        </div>
        <p>XD</p>
    </main>

    <script>
        function dropDown() {
            document.querySelector('#submenu').classList.toggle('hidden')
            document.querySelector('#arrow').classList.toggle('rotate-0')
        }
        dropDown()

        function Openbar() {
            document.querySelector('.sidebar').classList.toggle('left-[-10rem]')
        }
    </script>
</body>

</html>
