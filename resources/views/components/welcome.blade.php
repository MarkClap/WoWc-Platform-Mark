<div class="flex justify-centerp-5 flex-col w-3/5 gap-3 max-h-[40rem] bg-white p-2 rounded-md">
    
    <section class=" py-1 flex justify-end">
        
        <button class="flex bg-yellow-500 py-1 px-3 gap-3 border-[3px] rounded-3xl items-center text-xl hover:border-black" onclick="my_modal_1.showModal()">
            <span class="icon-[fluent-mdl2--circle-addition-solid]"></span>
            <p class="font-bold">Unirse a una clase</p>
        </button>
        
        <dialog id="my_modal_1" class="modal">
            <div class="modal-box p-8 text-black bg-white border">
              <h3 class="font-bold text-2xl justify-center flex w-ful">Introduce el código del Alumno</h3>
              <div class="modal-action">
                <form method="dialog" class="flex flex-col w-full justify-center items-center gap-4">
                    <div class="flex flex-col w-full gap-4">
                        <label for="code-union" class="text-lg font-semibold">Código de alumno: </label>
                        <input type="text" id="code-union" class="text-neutral-700 rounded-lg flex w-full" placeholder="Introduce código">
                    </div>
                  
                    <button class="btn w-full bg-yellow-500 flex justify-center hover:bg-yellow-400 hover:border-red-800 hover:text-neutral-300">Confirmar</button>
                </form>
              </div>
            </div>
          </dialog>


    </section>


    <section class="text-black flex flex-col gap-3">
        <div class=" rounded-lg border border-black">
            <div class="bg-red-600 p-4 flex justify-between rounded-t-lg items-center">
                <p class="text-xl font-semibold text-white">
                    Clase 1
                </p>
                <div class=" flex justify-between gap-3 items-center text-white">
                    <div class="dropdown dropdown-bottom dropdown-end flex">
                        <span class=" icon-[material-symbols--colors] text-4xl hover:bg-red-300" tabindex="0" role="button" onclick="my_modal_3.showModal()"></span>
                    </div>

                    
                    <dialog id="my_modal_3" class="modal">
                        <div class="modal-box  min-w-[40rem] bg-white">
                          <form method="dialog">
                            <button class="btn btn-sm btn-circle btn-ghost absolute right-6 bg-neutral-400 hover:bg-neutral-500">✕</button>
                          </form>
                          <h3 class="font-bold text-2xl pb-4 text-black">Seleccionar color del encabezado</h3>
                          <div class="flex flex-col mt-3 gap-4 mb-9">
                            
                            <div class="flex w-full h-12 bg-red-600 items-center" role="button" >
                                <p class="text-2xl pl-3 font-bold">Color 1</p>
                            </div>

                            <div class="flex w-full h-12 bg-red-500 items-center" role="button" >
                                <p class="text-2xl pl-3 font-bold">Color 1</p>
                            </div>

                            <div class="flex w-full h-12 bg-red-400 items-center" role="button" >
                                <p class="text-2xl pl-3 font-bold">Color 1</p>
                            </div>

                            <div class="flex w-full h-12 bg-red-300 items-center" role="button" >
                                <p class="text-2xl pl-3 font-bold">Color 1</p>
                            </div>

                            <div class="flex w-full h-12 bg-red-200 items-center" role="button" >
                                <p class="text-2xl pl-3 font-bold">Color 1</p>
                            </div>

                          </div>
                          <div class="flex justify-center gap-4">
                            <button class="bg-red-700 px-5 py-2 rounded-3xl border-[3px] border-neutral-900">
                                <p>Cancelar</p>
                            </button>
                            <button class="bg-red-700 px-5 py-2 rounded-3xl border-[3px] border-neutral-900">
                                <p>Guardar cambios</p>
                            </button>
                          </div>
                        </div>
                    </dialog>




                    <button class="rounded-3xl border-[3px] py-1 px-2 hover:border-yellow-400 hover:bg-red-700">
                        <p class="mx-3 font-semibold text-xl">Jugar</p>
                    </button>
                    
                    
                </div>

                



            </div>
            <div class="p-2 h-32 bg-neutral-100 flex justify-center items-center rounded-b-lg">
                <p class="text-lg text-neutral-400">
                    hola mundo como estan
                </p>
            </div>
        </div>

        <div class=" rounded-lg border border-black">
            <div class="bg-red-600 p-4 flex justify-between rounded-t-lg items-center">
                <p class="text-xl font-semibold text-white">
                    Clase 1
                </p>
                <div class=" flex justify-between gap-3 items-center text-white">
                    <div class="dropdown dropdown-bottom dropdown-end flex">
                        <span class=" icon-[material-symbols--colors] text-4xl hover:bg-red-300" tabindex="0" role="button" onclick="my_modal_3.showModal()"></span>
                    </div>

                    
                    <dialog id="my_modal_3" class="modal">
                        <div class="modal-box  min-w-[40rem] bg-white">
                          <form method="dialog">
                            <button class="btn btn-sm btn-circle btn-ghost absolute right-6 bg-neutral-400 hover:bg-neutral-500">✕</button>
                          </form>
                          <h3 class="font-bold text-2xl pb-4 text-black">Seleccionar color del encabezado</h3>
                          <div class="flex flex-col mt-3 gap-4 mb-9">
                            
                            <div class="flex w-full h-12 bg-red-600 items-center" role="button" >
                                <p class="text-2xl pl-3 font-bold">Color 1</p>
                            </div>

                            <div class="flex w-full h-12 bg-red-500 items-center" role="button" >
                                <p class="text-2xl pl-3 font-bold">Color 1</p>
                            </div>

                            <div class="flex w-full h-12 bg-red-400 items-center" role="button" >
                                <p class="text-2xl pl-3 font-bold">Color 1</p>
                            </div>

                            <div class="flex w-full h-12 bg-red-300 items-center" role="button" >
                                <p class="text-2xl pl-3 font-bold">Color 1</p>
                            </div>

                            <div class="flex w-full h-12 bg-red-200 items-center" role="button" >
                                <p class="text-2xl pl-3 font-bold">Color 1</p>
                            </div>

                          </div>
                          <div class="flex justify-center gap-4">
                            <button class="bg-red-700 px-5 py-2 rounded-3xl border-[3px] border-neutral-900">
                                <p>Cancelar</p>
                            </button>
                            <button class="bg-red-700 px-5 py-2 rounded-3xl border-[3px] border-neutral-900">
                                <p>Guardar cambios</p>
                            </button>
                          </div>
                        </div>
                    </dialog>




                    <button class="rounded-3xl border-[3px] py-1 px-2 hover:border-yellow-400 hover:bg-red-700">
                        <p class="mx-3 font-semibold text-xl_--">Jugar</p>
                    </button>
                    
                    
                </div>

                



            </div>
            <div class="p-2 h-32 bg-neutral-100 flex justify-center items-center rounded-b-lg">
                <p class="text-lg text-neutral-400">
                    hola mundo como estan
                </p>
            </div>
        </div>
    </section>
</div>


{{-- <pre>{{Auth::user()}}</pre> --}}
        
    

</div>
