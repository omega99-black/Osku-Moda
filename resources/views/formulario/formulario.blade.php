<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Formulario') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                
                {{-- Aquí empieza el formulario --}}
                <form class="max-w-md mx-auto">
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="email" name="floating_email" id="floating_email" 
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent 
                                   border-0 border-b-2 border-gray-300 appearance-none 
                                   focus:outline-none focus:ring-0 focus:border-blue-600 peer" 
                            placeholder=" " required />
                        <label for="floating_email" 
                            class="peer-focus:font-medium absolute text-sm text-gray-500 
                                   duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] 
                                   peer-focus:start-0 peer-focus:text-blue-600 
                                   peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                   peer-focus:scale-75 peer-focus:-translate-y-6">
                            Dirección de correo
                        </label>
                    </div>

                    <div class="relative z-0 w-full mb-5 group">
                        <input type="password" name="floating_password" id="floating_password" 
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent 
                                   border-0 border-b-2 border-gray-300 appearance-none 
                                   focus:outline-none focus:ring-0 focus:border-blue-600 peer" 
                            placeholder=" " required />
                        <label for="floating_password" 
                            class="peer-focus:font-medium absolute text-sm text-gray-500 
                                   duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] 
                                   peer-focus:start-0 peer-focus:text-blue-600 
                                   peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                   peer-focus:scale-75 peer-focus:-translate-y-6">
                            Contraseña
                        </label>
                    </div>

                    <div class="relative z-0 w-full mb-5 group">
                        <input type="password" name="repeat_password" id="floating_repeat_password" 
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent 
                                   border-0 border-b-2 border-gray-300 appearance-none 
                                   focus:outline-none focus:ring-0 focus:border-blue-600 peer" 
                            placeholder=" " required />
                        <label for="floating_repeat_password" 
                            class="peer-focus:font-medium absolute text-sm text-gray-500 
                                   duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] 
                                   peer-focus:start-0 peer-focus:text-blue-600 
                                   peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                   peer-focus:scale-75 peer-focus:-translate-y-6">
                            Confirmar contraseña
                        </label>
                    </div>

                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" name="floating_first_name" id="floating_first_name" 
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent 
                                       border-0 border-b-2 border-gray-300 appearance-none 
                                       focus:outline-none focus:ring-0 focus:border-blue-600 peer" 
                                placeholder=" " required />
                            <label for="floating_first_name" 
                                class="peer-focus:font-medium absolute text-sm text-gray-500 
                                       duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] 
                                       peer-focus:start-0 peer-focus:text-blue-600 
                                       peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                       peer-focus:scale-75 peer-focus:-translate-y-6">
                                Nombre
                            </label>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" name="floating_last_name" id="floating_last_name" 
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent 
                                       border-0 border-b-2 border-gray-300 appearance-none 
                                       focus:outline-none focus:ring-0 focus:border-blue-600 peer" 
                                placeholder=" " required />
                            <label for="floating_last_name" 
                                class="peer-focus:font-medium absolute text-sm text-gray-500 
                                       duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] 
                                       peer-focus:start-0 peer-focus:text-blue-600 
                                       peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                       peer-focus:scale-75 peer-focus:-translate-y-6">
                                Apellido
                            </label>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="floating_phone" id="floating_phone" 
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent 
                                       border-0 border-b-2 border-gray-300 appearance-none 
                                       focus:outline-none focus:ring-0 focus:border-blue-600 peer" 
                                placeholder=" " required />
                            <label for="floating_phone" 
                                class="peer-focus:font-medium absolute text-sm text-gray-500 
                                       duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] 
                                       peer-focus:start-0 peer-focus:text-blue-600 
                                       peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                       peer-focus:scale-75 peer-focus:-translate-y-6">
                                Número de teléfono (+57)
                            </label>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" name="floating_company" id="floating_company" 
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent 
                                       border-0 border-b-2 border-gray-300 appearance-none 
                                       focus:outline-none focus:ring-0 focus:border-blue-600 peer" 
                                placeholder=" " required />
                            <label for="floating_company" 
                                class="peer-focus:font-medium absolute text-sm text-gray-500 
                                       duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] 
                                       peer-focus:start-0 peer-focus:text-blue-600 
                                       peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
                                       peer-focus:scale-75 peer-focus:-translate-y-6">
                                Empresa (Ej. Google,Facebook)
                            </label>
                        </div>
                    </div>

                    <button type="submit" 
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none 
                               focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto 
                               px-5 py-2.5 text-center">
                        Guardar
                    </button>
                </form>
                {{-- Fin formulario --}}
            </div>
        </div>
    </div>
</x-app-layout>