<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablero</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="bg-base-300 flex flex-col min-h-screen w-full">
    <header class="shadow-md w-full">
        <nav class="bg-primary dark:bg-neutral-800 p-3 flex items-center gap-2 justify-between ">
            
            <div class="flex flex-row">
            <label class="swap swap-rotate grid place-items-center text-xl text-white">
                <input id="menu-button" type="checkbox" class="hidden" checked/>
                <span class="icon-[ion--navicon-round] swap-on fill-white"></span>               
                <span class="icon-[ion--close-round] swap-off fill-white"></span>
                
            </label>
            <div class=" ml-52 h-12  duration-500 pl-4 border-l-2" id="list-navegation">
                <div class="text-2xl breadcrumbs">
                    <ul>
                      <li><a>2024-BDA-AB</a></li> 
                      <li>Avatar</li>
                    </ul>
                </div>
            </div>
              </div>
            
            <section class="flex flex-row items-center text-3xl text-white gap-6 ">
                
                <div class="dropdown dropdown-end">
                <span tabindex="0" role="button" class="icon-[ph--scroll-fill] transition-transform transform-growth hover:scale-110 duration-200 cursor-pointer"></span>
                <div class="bg-white w-72 h-[91vh] dropdown-content z-[1] menu mt-3  -mr-[17vh]" tabindex="0">
                    <div class="flex justify-center items-center bg-yellow-600 h-10 w-full">
                        <h1 class="text-2xl">Acciones de jugador</h1>
                    </div>
                </div>
                </div>
                <div class="dropdown dropdown-end">
                    <span tabindex="0" role="button" class="icon-[emojione-monotone--broken-heart] transition-transform transform-growth hover:scale-110 duration-200 cursor-pointer"></span>
                        
                        <div class="bg-white w-72 h-[91vh] dropdown-content z-[1] menu mt-3  -mr-16" tabindex="0">
                            <div class="flex justify-center items-center bg-red-700 h-10 w-full">
                                <h1 class="text-2xl">Daño inferido</h1>
                            </div>
                        </div>
                </div>
                <div class="dropdown dropdown-end">
                    <span tabindex="0" role="button" class="icon-[heroicons--user-circle-solid] transition-transform transform-growth hover:scale-110 duration-200 cursor-pointer "></span>
                        <ul tabindex="0" class="text-slate-950 dropdown-content z-[1] menu rounded-md bg-yellow-500 w-32 mt-6">
                          <li><a>Mi perfil</a></li>
                          <li><a>Salir</a></li>
                        </ul>
                </div>
                  
            </section>
        </nav>
    </header>

    <main class="flex flex-row flex-grow relative  ">
        
        <nav id="menu" class=" text-white absolute h-full bottom-0 left-0 duration-500 p-2 w-52 text-center bg-neutral-700 shadow">

            <div class="text-lg flex flex-row h-full justify-between w-full ">
                <ul class="flex flex-col gap-2 w-full justify-between">
                    <div >
                    <x-sidebar-item name="Personaje">
                        <x-slot name="icon">
                            <span class="icon-[heroicons--user-solid]"></span>
                        </x-slot>
                    </x-sidebar-item>

                    <x-sidebar-item name="Misiones">
                        <x-slot name="icon">
                            <span class="icon-[mingcute--task-2-fill]"></span>
                        </x-slot>
                    </x-sidebar-item>

                    <x-sidebar-collapse name="Gremio">
                        <x-slot name="icon">
                            <span class="icon-[game-icons--vertical-banner]"></span>
                        </x-slot>

                        <x-slot name="items">

                            <x-sidebar-subitem name="Miembros">
                                <x-slot name="icon">
                                    <span class="icon-[heroicons--user-group-solid]"></span>
                                </x-slot>
                            </x-sidebar-subitem>

                            <x-sidebar-subitem name="Grupo">
                                <x-slot name="icon">
                                    <span class="icon-[heroicons--users-solid]"></span>
                                </x-slot>
                            </x-sidebar-subitem>

                        </x-slot>
                    </x-sidebar-collapse>
                    </div>
                    <div class="justify-between ">
                        
                        <x-sidebar-item name="Salida">
                            <x-slot name="icon">
                                <span class="icon-[material-symbols--exit-to-app]"></span>
                            </x-slot>
                        </x-sidebar-item>
                        
                    </div>
                </ul>
                
                
            </div>
            
        </nav>
        
        <div class="bg-orange-400 flex w-full justify-center items-center">

            <div class="bg-blue-700 h-3/5 w-3/4 ">
                <section class="w-full flex h-1/6 bg-slate-100 justify-start items-center">
                    <h1 class="text-2xl text-black font-bold ml-4">Profesores</h1>
                </section>
                <section class="h-5/6 w-full flex bg-red-400 justify-center items-center">
                    <div class=" flex bg-orange-600 w-full h-4/5 mx-10 flex-col ">
                        <section class="flex py-3 px-3 w-full bg-yellow-300 text-black">
                            <div class="w-52 h-10 bg-white flex justify-center items-center hover:bg-slate-300" role="button">
                                <p>Add profesor</p>
                            
                            </div>
                        </section>
                        <section class="flex overflow-x-auto justify-center items-center w-full">
                            <!-- component -->
                            <div class="text-gray-900 bg-gray-200 w-full">
    
                                <div class="px-3 py-4 flex justify-center">
                                    <table class="w-full text-md bg-white shadow-md rounded mb-4">
                                        <tbody>
                                            <tr class="border-b">
                                                <th class="text-left p-3 px-5">Name</th>
                                                <th class="text-left p-3 px-5">Email</th>
                                                <th class="text-left p-3 px-5">Role</th>
                                                <th></th>
                                            </tr>

                                            <tr class="border-b hover:bg-orange-100 bg-gray-100">
                                                <td class="p-3 px-5"><input type="text" value="user.name" class="bg-transparent"></td>
                                                <td class="p-3 px-5"><input type="text" value="user.email" class="bg-transparent"></td>
                                                <td class="p-3 px-5">
                                                    <select value="user.role" class="bg-transparent">
                                                        <option value="user">user</option>
                                                        <option value="admin">admin</option>
                                                    </select>
                                                </td>
                                                <td class="p-3 px-5 flex justify-end"><button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Save</button><button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button></td>
                                            </tr>
                
                
                
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </section>
                    </div>
                </section>
            </div>
            

        </div>
        
    </main>

    <x-script-board>
        
    </x-script-board>
    
</body>

</html>