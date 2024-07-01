@extends('layouts.main.master')

@section('content')

<dialog id="my_modal_1" class="modal">
    <div class="modal-box p-8 text-black bg-white border">
      <h3 class="font-bold text-2xl justify-center flex w-ful">Dar Puntos</h3>
      <div class="modal-action">
        <form class="w-full p-3" >
            
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Nombre</label>
                <input type="text" placeholder="Name" class="input input-bordered input-warning w-full bg-white" />
            </div>
            <section class="flex flex-row">
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Oro:</label>
                    <input type="number" placeholder="Name" class="input input-bordered input-warning w-full bg-white" />
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Experiencia:</label>
                    <input type="number" placeholder="Name" class="input input-bordered input-warning w-full bg-white" />
                </div>
            </section>
            <input type="hidden" class="hidden">  

            <button class="btn btn-success w-full"><p>Comfirmar</p></button>
            </form>
      </div>
    </div>
  </dialog>


  <dialog id="my_modal_2" class="modal">
    <div class="modal-box p-8 text-black bg-white border">
      <h3 class="font-bold text-2xl justify-center flex w-ful"> Quitar puntos</h3>
      <div class="modal-action">
        <form class="w-full p-3" >
            
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Nombre</label>
                <input type="text" placeholder="Name" class="input input-bordered input-warning w-full bg-white" />
            </div>
            <section class="flex flex-row">
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Oro:</label>
                    <input type="number" placeholder="Name" class="input input-bordered input-warning w-full bg-white" />
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Experiencia:</label>
                    <input type="number" placeholder="Name" class="input input-bordered input-warning w-full bg-white" />
                </div>
            </section>
            <input type="hidden" class="hidden">  

            <button class="btn btn-error w-full"><p>Comfirmar</p></button>
            </form>
      </div>
    </div>
  </dialog>

    <div class="bg-white dark:bg-black  w-full flex flex-col items-center">
        <section class="border-2 rounded-md  border-black p-4  flex flex-row w-8/12 gap-3 items-center m-4 dark:border-white ">
            <p class="text-xl font-semibold text-neutral-700 dark:text-neutral-100">Gestion de mienbros:</p>
            <button class="btn btn-success font-bold text-lg" onclick="my_modal_1.showModal()"><span class="icon-[foundation--plus]"></span><p>Dar puntos</p></button>
            <button class="btn btn-error font-bold text-lg" onclick="my_modal_2.showModal()"><span class="icon-[streamline--subtract-1-solid]"></span><p>Quitar puntos</p></button>
            


        </section>
        <section class="dark:bg-black  w-8/12 flex flex-col items-center overflow-x-scroll h-[33rem] border-2 border-neutral-500">
        <div class="w-full h-full  px-4 py-2  shadow-lg rounded-sm  text-black ">
            <header class="px-5 py-4 border-b border-gray-100">
                <h2 class="font-bold text-2xl text-yellow-600 ">Grupo 1</h2>
            </header>
            <div class="p-3 ">
                <div class="overflow-x-auto">
                    <table class="table-auto w-full space-x-3 text-white border-2">
                        <thead class="text-xs font-semibold uppercase text-yellow-500 bg-neutral-700">
                            <tr class="border-2 border-black">
                                <th class="p-4 whitespace-nowrap">
                                    <div class="font-semibold text-sm text-left">Alumno</div>
                                </th>
                                <th class="p-4 whitespace-nowrap">
                                    <div class="font-semibold text-sm text-left">Personaje</div>
                                </th>
                                <th class="p-4 whitespace-nowrap">
                                    <div class="font-semibold text-sm text-left">Nivel</div>
                                </th>
                                <th class="p-4 whitespace-nowrap">
                                    <div class="font-semibold text-sm text-center">Oro</div>
                                </th>
                                <th class="p-4 whitespace-nowrap">
                                    <div class="font-semibold text-sm text-center">Experiencia</div>
                                </th>
                                <th class="p-4 whitespace-nowrap">
                                    <div class="font-semibold text-sm text-center">Energía</div>
                                </th>
                                <th class="p-4 whitespace-nowrap">
                                    <div class="font-semibold text-sm text-center">Vida</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-sm divide-y divide-gray-100 text-neutral-600 dark:text-white border-2 border-black">
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full"
                                                src="https://raw.githubusercontent.com/cruip/vuejs-admin-dashboard-template/main/src/images/user-36-05.jpg">
                                        </div>
                                        <div class="font-medium ">Chocce, Marcos</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">Curandero</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left font-medium text-green-500">2</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">100000</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">1000 </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center ">1000 </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">1000</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full"
                                                src="https://raw.githubusercontent.com/cruip/vuejs-admin-dashboard-template/main/src/images/user-36-05.jpg">
                                        </div>
                                        <div class="font-medium ">Chocce, Marcos</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">Curandero</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left font-medium text-green-500">2</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">100000</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">1000 </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center ">1000 </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">1000</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full"
                                                src="https://raw.githubusercontent.com/cruip/vuejs-admin-dashboard-template/main/src/images/user-36-05.jpg">
                                        </div>
                                        <div class="font-medium ">Chocce, Marcos</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">Curandero</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left font-medium text-green-500">2</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">100000</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">1000 </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center ">1000 </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">1000</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full"
                                                src="https://raw.githubusercontent.com/cruip/vuejs-admin-dashboard-template/main/src/images/user-36-05.jpg">
                                        </div>
                                        <div class="font-medium ">Chocce, Marcos</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">Curandero</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left font-medium text-green-500">2</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">100000</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">1000 </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center ">1000 </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">1000</div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="w-full h-full  px-4 py-2  shadow-lg rounded-sm  text-black ">
            <header class="px-5 py-4 border-b border-gray-100">
                <h2 class="font-bold text-2xl text-yellow-600 ">Grupo 1</h2>
            </header>
            <div class="p-3 ">
                <div class="overflow-x-auto">
                    <table class="table-auto w-full space-x-3 text-white border-2">
                        <thead class="text-xs font-semibold uppercase text-yellow-500 bg-neutral-700">
                            <tr class="border-2 border-black">
                                <th class="p-4 whitespace-nowrap">
                                    <div class="font-semibold text-sm text-left">Alumno</div>
                                </th>
                                <th class="p-4 whitespace-nowrap">
                                    <div class="font-semibold text-sm text-left">Personaje</div>
                                </th>
                                <th class="p-4 whitespace-nowrap">
                                    <div class="font-semibold text-sm text-left">Nivel</div>
                                </th>
                                <th class="p-4 whitespace-nowrap">
                                    <div class="font-semibold text-sm text-center">Oro</div>
                                </th>
                                <th class="p-4 whitespace-nowrap">
                                    <div class="font-semibold text-sm text-center">Experiencia</div>
                                </th>
                                <th class="p-4 whitespace-nowrap">
                                    <div class="font-semibold text-sm text-center">Energía</div>
                                </th>
                                <th class="p-4 whitespace-nowrap">
                                    <div class="font-semibold text-sm text-center">Vida</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-sm divide-y divide-gray-100 text-neutral-600 dark:text-white border-2 border-black">
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full"
                                                src="https://raw.githubusercontent.com/cruip/vuejs-admin-dashboard-template/main/src/images/user-36-05.jpg">
                                        </div>
                                        <div class="font-medium ">Chocce, Marcos</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">Curandero</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left font-medium text-green-500">2</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">100000</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">1000 </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center ">1000 </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">1000</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full"
                                                src="https://raw.githubusercontent.com/cruip/vuejs-admin-dashboard-template/main/src/images/user-36-05.jpg">
                                        </div>
                                        <div class="font-medium ">Chocce, Marcos</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">Curandero</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left font-medium text-green-500">2</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">100000</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">1000 </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center ">1000 </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">1000</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full"
                                                src="https://raw.githubusercontent.com/cruip/vuejs-admin-dashboard-template/main/src/images/user-36-05.jpg">
                                        </div>
                                        <div class="font-medium ">Chocce, Marcos</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">Curandero</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left font-medium text-green-500">2</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">100000</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">1000 </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center ">1000 </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">1000</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full"
                                                src="https://raw.githubusercontent.com/cruip/vuejs-admin-dashboard-template/main/src/images/user-36-05.jpg">
                                        </div>
                                        <div class="font-medium ">Chocce, Marcos</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">Curandero</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left font-medium text-green-500">2</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">100000</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">1000 </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center ">1000 </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">1000</div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="w-full h-full  px-4 py-2  shadow-lg rounded-sm  text-black ">
            <header class="px-5 py-4 border-b border-gray-100">
                <h2 class="font-bold text-2xl text-yellow-600 ">Grupo 1</h2>
            </header>
            <div class="p-3 ">
                <div class="overflow-x-auto">
                    <table class="table-auto w-full space-x-3 text-white border-2">
                        <thead class="text-xs font-semibold uppercase text-yellow-500 bg-neutral-700">
                            <tr class="border-2 border-black">
                                <th class="p-4 whitespace-nowrap">
                                    <div class="font-semibold text-sm text-left">Alumno</div>
                                </th>
                                <th class="p-4 whitespace-nowrap">
                                    <div class="font-semibold text-sm text-left">Personaje</div>
                                </th>
                                <th class="p-4 whitespace-nowrap">
                                    <div class="font-semibold text-sm text-left">Nivel</div>
                                </th>
                                <th class="p-4 whitespace-nowrap">
                                    <div class="font-semibold text-sm text-center">Oro</div>
                                </th>
                                <th class="p-4 whitespace-nowrap">
                                    <div class="font-semibold text-sm text-center">Experiencia</div>
                                </th>
                                <th class="p-4 whitespace-nowrap">
                                    <div class="font-semibold text-sm text-center">Energía</div>
                                </th>
                                <th class="p-4 whitespace-nowrap">
                                    <div class="font-semibold text-sm text-center">Vida</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-sm divide-y divide-gray-100 text-neutral-600 dark:text-white border-2 border-black">
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full"
                                                src="https://raw.githubusercontent.com/cruip/vuejs-admin-dashboard-template/main/src/images/user-36-05.jpg">
                                        </div>
                                        <div class="font-medium ">Chocce, Marcos</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">Curandero</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left font-medium text-green-500">2</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">100000</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">1000 </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center ">1000 </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">1000</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full"
                                                src="https://raw.githubusercontent.com/cruip/vuejs-admin-dashboard-template/main/src/images/user-36-05.jpg">
                                        </div>
                                        <div class="font-medium ">Chocce, Marcos</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">Curandero</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left font-medium text-green-500">2</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">100000</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">1000 </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center ">1000 </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">1000</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full"
                                                src="https://raw.githubusercontent.com/cruip/vuejs-admin-dashboard-template/main/src/images/user-36-05.jpg">
                                        </div>
                                        <div class="font-medium ">Chocce, Marcos</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">Curandero</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left font-medium text-green-500">2</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">100000</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">1000 </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center ">1000 </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">1000</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full"
                                                src="https://raw.githubusercontent.com/cruip/vuejs-admin-dashboard-template/main/src/images/user-36-05.jpg">
                                        </div>
                                        <div class="font-medium ">Chocce, Marcos</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">Curandero</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left font-medium text-green-500">2</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">100000</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">1000 </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center ">1000 </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">1000</div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="w-full h-full  px-4 py-2  shadow-lg rounded-sm  text-black ">
            <header class="px-5 py-4 border-b border-gray-100">
                <h2 class="font-bold text-2xl text-yellow-600 ">Grupo 1</h2>
            </header>
            <div class="p-3 ">
                <div class="overflow-x-auto">
                    <table class="table-auto w-full space-x-3 text-white border-2">
                        <thead class="text-xs font-semibold uppercase text-yellow-500 bg-neutral-700">
                            <tr class="border-2 border-black">
                                <th class="p-4 whitespace-nowrap">
                                    <div class="font-semibold text-sm text-left">Alumno</div>
                                </th>
                                <th class="p-4 whitespace-nowrap">
                                    <div class="font-semibold text-sm text-left">Personaje</div>
                                </th>
                                <th class="p-4 whitespace-nowrap">
                                    <div class="font-semibold text-sm text-left">Nivel</div>
                                </th>
                                <th class="p-4 whitespace-nowrap">
                                    <div class="font-semibold text-sm text-center">Oro</div>
                                </th>
                                <th class="p-4 whitespace-nowrap">
                                    <div class="font-semibold text-sm text-center">Experiencia</div>
                                </th>
                                <th class="p-4 whitespace-nowrap">
                                    <div class="font-semibold text-sm text-center">Energía</div>
                                </th>
                                <th class="p-4 whitespace-nowrap">
                                    <div class="font-semibold text-sm text-center">Vida</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-sm divide-y divide-gray-100 text-neutral-600 dark:text-white border-2 border-black">
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full"
                                                src="https://raw.githubusercontent.com/cruip/vuejs-admin-dashboard-template/main/src/images/user-36-05.jpg">
                                        </div>
                                        <div class="font-medium ">Chocce, Marcos</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">Curandero</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left font-medium text-green-500">2</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">100000</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">1000 </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center ">1000 </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">1000</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full"
                                                src="https://raw.githubusercontent.com/cruip/vuejs-admin-dashboard-template/main/src/images/user-36-05.jpg">
                                        </div>
                                        <div class="font-medium ">Chocce, Marcos</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">Curandero</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left font-medium text-green-500">2</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">100000</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">1000 </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center ">1000 </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">1000</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full"
                                                src="https://raw.githubusercontent.com/cruip/vuejs-admin-dashboard-template/main/src/images/user-36-05.jpg">
                                        </div>
                                        <div class="font-medium ">Chocce, Marcos</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">Curandero</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left font-medium text-green-500">2</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">100000</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">1000 </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center ">1000 </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">1000</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full"
                                                src="https://raw.githubusercontent.com/cruip/vuejs-admin-dashboard-template/main/src/images/user-36-05.jpg">
                                        </div>
                                        <div class="font-medium ">Chocce, Marcos</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">Curandero</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left font-medium text-green-500">2</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">100000</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">1000 </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center ">1000 </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">1000</div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="w-full h-full  px-4 py-2  shadow-lg rounded-sm  text-black ">
            <header class="px-5 py-4 border-b border-gray-100">
                <h2 class="font-bold text-2xl text-yellow-600 ">Grupo 1</h2>
            </header>
            <div class="p-3 ">
                <div class="overflow-x-auto">
                    <table class="table-auto w-full space-x-3 text-white border-2">
                        <thead class="text-xs font-semibold uppercase text-yellow-500 bg-neutral-700">
                            <tr class="border-2 border-black">
                                <th class="p-4 whitespace-nowrap">
                                    <div class="font-semibold text-sm text-left">Alumno</div>
                                </th>
                                <th class="p-4 whitespace-nowrap">
                                    <div class="font-semibold text-sm text-left">Personaje</div>
                                </th>
                                <th class="p-4 whitespace-nowrap">
                                    <div class="font-semibold text-sm text-left">Nivel</div>
                                </th>
                                <th class="p-4 whitespace-nowrap">
                                    <div class="font-semibold text-sm text-center">Oro</div>
                                </th>
                                <th class="p-4 whitespace-nowrap">
                                    <div class="font-semibold text-sm text-center">Experiencia</div>
                                </th>
                                <th class="p-4 whitespace-nowrap">
                                    <div class="font-semibold text-sm text-center">Energía</div>
                                </th>
                                <th class="p-4 whitespace-nowrap">
                                    <div class="font-semibold text-sm text-center">Vida</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-sm divide-y divide-gray-100 text-neutral-600 dark:text-white border-2 border-black">
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full"
                                                src="https://raw.githubusercontent.com/cruip/vuejs-admin-dashboard-template/main/src/images/user-36-05.jpg">
                                        </div>
                                        <div class="font-medium ">Chocce, Marcos</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">Curandero</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left font-medium text-green-500">2</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">100000</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">1000 </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center ">1000 </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">1000</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full"
                                                src="https://raw.githubusercontent.com/cruip/vuejs-admin-dashboard-template/main/src/images/user-36-05.jpg">
                                        </div>
                                        <div class="font-medium ">Chocce, Marcos</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">Curandero</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left font-medium text-green-500">2</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">100000</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">1000 </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center ">1000 </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">1000</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full"
                                                src="https://raw.githubusercontent.com/cruip/vuejs-admin-dashboard-template/main/src/images/user-36-05.jpg">
                                        </div>
                                        <div class="font-medium ">Chocce, Marcos</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">Curandero</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left font-medium text-green-500">2</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">100000</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">1000 </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center ">1000 </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">1000</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full"
                                                src="https://raw.githubusercontent.com/cruip/vuejs-admin-dashboard-template/main/src/images/user-36-05.jpg">
                                        </div>
                                        <div class="font-medium ">Chocce, Marcos</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">Curandero</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left font-medium text-green-500">2</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">100000</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">1000 </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center ">1000 </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">1000</div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        
    </section>
    </div>
@endsection


