@extends('layouts.main.player')

@section('content')

<div class="bg-black  w-full flex flex-col items-center overflow-hidden">
    <div class="w-9/12 h-full  p-5  shadow-lg rounded-sm  text-black ">
        <header class="px-5 py-4 border-b border-gray-100">
            <h2 class="font-bold text-2xl text-yellow-600 ">Grupo 1</h2>
        </header>
        <div class="p-3 ">
            <div class="overflow-x-auto">
                <table class="table-auto w-full space-x-3 text-white">
                    <thead class="text-xs font-semibold uppercase text-yellow-500 bg-neutral-700">
                        <tr>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-left">Alumno</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-left">Personaje</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-left">Nivel</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-center">Oro</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-center">Experiencia</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-center">Energía</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-center">Vida</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-sm divide-y divide-gray-100 ">
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

    <div class="w-9/12 h-full  p-5  shadow-lg rounded-sm  text-black ">
        <header class="px-5 py-4 border-b border-gray-100">
            <h2 class="font-bold text-2xl text-yellow-600 ">Grupo 1</h2>
        </header>
        <div class="p-3 ">
            <div class="overflow-x-auto">
                <table class="table-auto w-full space-x-3 text-white">
                    <thead class="text-xs font-semibold uppercase text-yellow-500 bg-neutral-700">
                        <tr>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-left">Alumno</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-left">Personaje</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-left">Nivel</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-center">Oro</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-center">Experiencia</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-center">Energía</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-center">Vida</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-sm divide-y divide-gray-100 ">
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

    <div class="w-9/12 h-full  p-5  shadow-lg rounded-sm  text-black ">
        <header class="px-5 py-4 border-b border-gray-100">
            <h2 class="font-bold text-2xl text-yellow-600 ">Grupo 1</h2>
        </header>
        <div class="p-3 ">
            <div class="overflow-x-auto">
                <table class="table-auto w-full space-x-3 text-white">
                    <thead class="text-xs font-semibold uppercase text-yellow-500 bg-neutral-700">
                        <tr>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-left">Alumno</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-left">Personaje</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-left">Nivel</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-center">Oro</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-center">Experiencia</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-center">Energía</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-center">Vida</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-sm divide-y divide-gray-100 ">
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

    <div class="w-9/12 h-full  p-5  shadow-lg rounded-sm  text-black ">
        <header class="px-5 py-4 border-b border-gray-100">
            <h2 class="font-bold text-2xl text-yellow-600 ">Grupo 1</h2>
        </header>
        <div class="p-3 ">
            <div class="overflow-x-auto">
                <table class="table-auto w-full space-x-3 text-white">
                    <thead class="text-xs font-semibold uppercase text-yellow-500 bg-neutral-700">
                        <tr>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-left">Alumno</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-left">Personaje</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-left">Nivel</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-center">Oro</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-center">Experiencia</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-center">Energía</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-center">Vida</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-sm divide-y divide-gray-100 ">
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

    <div class="w-9/12 h-full  p-5  shadow-lg rounded-sm  text-black ">
        <header class="px-5 py-4 border-b border-gray-100">
            <h2 class="font-bold text-2xl text-yellow-600 ">Grupo 1</h2>
        </header>
        <div class="p-3 ">
            <div class="overflow-x-auto">
                <table class="table-auto w-full space-x-3 text-white">
                    <thead class="text-xs font-semibold uppercase text-yellow-500 bg-neutral-700">
                        <tr>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-left">Alumno</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-left">Personaje</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-left">Nivel</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-center">Oro</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-center">Experiencia</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-center">Energía</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-center">Vida</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-sm divide-y divide-gray-100 ">
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
</div>
@endsection