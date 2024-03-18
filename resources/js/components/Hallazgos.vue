<!-- ModalComponent.vue -->

<template>
    <div>
        <!-- Botón para abrir el modal -->
        <button
            @click="openModal"
            class="bg-[#F57C00] hover:bg-[#F57C00BF] rounded-2xl p-3 text-white font-bold"
        >
            HALLAZGOS
        </button>

        <!-- Modal -->
        <div v-if="showModal" class="fixed inset-0 overflow-y-auto">
            <div class="flex items-center justify-center min-h-screen">
                <div
                    class="fixed inset-0 transition-opacity"
                    aria-hidden="true"
                >
                    <div class="absolute inset-0 bg-gray-500 opacity-25"></div>
                    <!-- Cambia el valor de opacidad aquí -->
                </div>

                <!-- Contenido del modal -->
                <div
                    class="bg-white rounded-lg overflow-hidden shadow-xl p-6 max-w-sm mx-auto z-50 w-96 h-96"
                >
                    <!-- Añade z-index aquí -->
                    <!-- Encabezado del modal -->
                    <div class="text-xl font-semibold mb-4">Hallazgo</div>

                    <!-- Select con opciones -->
                    <div class="mb-4">
                        <select
                            class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        >
                            <option selected="">Seleccionar categoria</option>
                            <option value="opcion1">Categoria 1</option>
                            <option value="opcion2">Categoria 2</option>
                            <option value="opcion3">Categoria 3</option>
                            <option value="opcion4">Categoria 4</option>
                        </select>
                    </div>

                    <!-- Textarea -->
                    <div class="mb-4">
                        <textarea
                            class="w-full h-44 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            rows="4"
                            placeholder="Escribe aquí tu hallazgo..."
                        ></textarea>
                    </div>

                    <!-- Botón para cerrar el modal -->
                    <div class="flex justify-center">
                        <div class="flex justify-start px-5">
                            <button
                                @click="closeModal"
                                class="bg-[#00b0ab] hover:bg-[#00b0abBF] rounded-2xl p-3 text-white font-bold"
                            >
                                Guardar
                            </button>
                        </div>
                        <div class="flex justify-end px-5">
                            <button
                                @click="closeModal"
                                class="bg-[#ff0000] hover:bg-[#ff0000BF] rounded-2xl p-3 text-white font-bold"
                            >
                                Cerrar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            showModal: false,
        };
    },
    methods: {
        openModal() {
            this.showModal = true;
        },
        closeModal() {
            this.showModal = false;
        },
    },
};
</script>
