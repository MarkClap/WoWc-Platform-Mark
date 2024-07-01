@extends('layouts.main.master')

@section('content')
<div class="bg-white text-black dark:text-white dark:bg-neutral-900 w-full flex justify-center flex-col gap-2 items-center">
    <section class=" w-4/6 flex py-2 px-4 flex-col justify-between items-center">
        <div class=" p-2 text-center">
            <h2 class="text-4xl font-bold dark:text-neutral-500 text-neutral-800">Crear tack a travez de formularios con un Oro y experencia determinados</h2>
        </div>
        
        
    </section>
    <section class=" w-3/6 flex py-2 px-4 flex-row justify-between items-center">
        <div class=" p-2">
            <h2 class="text-2xl font-bold">Tasks </h2>
        </div>
        <div class="btn bg-yellow-500 hover:bg-yellow-400" onclick="my_modal_1.showModal()">
            <p>Create new Task</p>
        </div>
        
    </section>
    
    
    
    <section class=" w-4/6 flex py-2 px-4 flex-col space-y-2 border-2 border-black dark:border-white">
        <div class="rounded-sm flex w-full items-center overflow-x-scroll">
                        
            <table class="w-full text-md shadow-md">
                <thead class="border-b-2 border-black text-black dark:text-yellow-500">
                    <tr>
                        
                    <th class="text-left p-3 px-5" >Nombre Task</th>
                    <th class="text-left p-3 px-5">Descripcion</th>
                    <th class="text-left p-3 px-5">Oro</th>
                    <th class="text-left p-3 px-5">Experiencia</th>
                    <th class="text-center p-3 px-5 justify-center">Accion</th>

    
                        <th></th>
                    </tr>
                </thead>
                <tbody class=" text-neutral-800 dark:text-neutral-200 space-y-2 border-b">
                    
                        <tr>
                                
                            <td class="text-left p-3 px-5">Test-BDA-1</td>
                            <td class="text-left p-3 px-5" >Resolver este ejercicio en clase</td>
                            <td class="text-left p-3 px-5">1000</td>
                            <td class="text-left p-3 px-5">1000</td>

                            <td class="p-3 gap-2 flex justify-center">
                                <button class="btn btn-error"><span class="icon-[mi--delete]"></span></button>
                                <button class="btn btn-info" onclick="my_modal_2.showModal()"><span class="icon-[material-symbols--edit]"></span></button>

                            </td>
                        </tr>
                    
                </tbody>
                <tbody class=" text-neutral-800 dark:text-neutral-200 space-y-2 border-b">
                    
                    <tr>
                            
                        <td class="text-left p-3 px-5">Test-BDA-1</td>
                        <td class="text-left p-3 px-5" >Resolver este ejercicio en clase</td>
                        <td class="text-left p-3 px-5">1000</td>
                        <td class="text-left p-3 px-5">1000</td>

                        <td class="p-3 gap-2 flex justify-center">
                            <button class="btn btn-error"><span class="icon-[mi--delete]"></span></button>
                            <button class="btn btn-info" onclick="my_modal_2.showModal()"><span class="icon-[material-symbols--edit]"></span></button>

                        </td>
                    </tr>
                
            </tbody>
            </table>
        </div>

        <section class=" py-1 flex justify-end">


{{-- Modal formulario campos de tasks--}}
            <dialog id="my_modal_1" class="modal">
                <div class="modal-box p-8 text-black bg-white border">
                  <h3 class="font-bold text-2xl justify-center flex w-ful">Crear nuevo taks</h3>
                  <div class="modal-action">
                    <form class="w-full p-3" >
                        
                        <div class="mb-4">
                            <label class="block text-gray-700 mb-2">Nombre</label>
                            <input type="text" placeholder="Name" class="input input-bordered input-warning w-full bg-white" />
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 mb-2">Descripcion </label>
                            <textarea class="textarea textarea-warning bg-white w-full" placeholder="Bio"></textarea>
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

                        <button class="btn btn-success"><p>Comfirmar</p></button>
                        </form>
                  </div>
                </div>
              </dialog>


{{-- Modal formulario campos de tasks edit boton--}}

              <dialog id="my_modal_2" class="modal">
                <div class="modal-box p-8 text-black bg-white border">
                  <h3 class="font-bold text-2xl justify-center flex w-ful">Editar tasks</h3>
                  <div class="modal-action">
                    <form class="w-full p-3" >
                        
                        <div class="mb-4">
                            <label class="block text-gray-700 mb-2">Nombre</label>
                            <input type="text" placeholder="Name" class="input input-bordered input-warning w-full bg-white" />
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 mb-2">Descripcion </label>
                            <textarea class="textarea textarea-warning bg-white w-full" placeholder="Bio"></textarea>
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

                        <button class="btn btn-success"><p>Comfirmar</p></button>
                        </form>
                  </div>
                </div>
              </dialog>


        </section>
        
    </section>
</div>

@endsection