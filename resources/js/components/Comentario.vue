<!-- ModalComponent.vue -->

<template>
    <div>
        <!-- Botón para abrir el modal -->
        <button
            @click="openModal"
            class=" hover:bg-[#00b0abBF] rounded-2xl p-3 text-white font-bold"
            :class="comentario_base ? 'bg-zinc-500' : 'bg-[#00b0ab]'"
        >
            {{ (comentario_base) ? 'Ver Comentario' : 'Añadir Comentario' }}
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
                    <div class="text-xl font-semibold mb-4">Comentario</div>

                    <!-- Select con opciones -->
                    <div class="mb-4">
                        <select
                            class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            v-model="categoriaComentario"
                        >
                            <option value="SELECCIONAR" disabled>
                                Seleccionar categoria
                            </option>
                            <option value="HERRAMIENTAS">HERRAMIENTAS</option>
                            <option value="PERSONAL">PERSONAL</option>
                            <option value="PIEZAS">
                                PIEZAS DE MANTENIMIENTO
                            </option>
                            <option value="OTRO">OTRO</option>
                        </select>
                    </div>

                    <!-- Textarea -->
                    <div class="mb-4">
                        <textarea
                            class="w-full h-44 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            v-model="comentario"
                            rows="4"
                            placeholder="Escribe aquí tu comentario..."
                        ></textarea>
                    </div>

                    <!-- Botón para cerrar el modal -->
                    <div class="flex justify-center">
                        <div class="flex justify-start px-5">
                            <button
                                @click="submitForm"
                                class="bg-[#00b0ab] hover:bg-[#00b0abBF] rounded-2xl p-3 text-white font-bold"
                            >
                                Guardar comentario
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
import axios from "axios";

export default {
    data() {
        return {
            categoriaComentario: "SELECCIONAR",
            comentario: "",
            showModal: false,
        };
    },
    mounted() {
        (this.comentario = this.comentario_base),
            (this.categoriaComentario = this.cat_comentario_base);
    },
    methods: {
        openModal() {
            this.showModal = true;
        },
        closeModal() {
            this.showModal = false;
        },
        submitForm() {
            axios
                .put("/pm_ejecucion/" + this.actividad_id, {
                    categoriaComentario: this.categoriaComentario,
                    comentario: this.comentario,
                })
                .then((response) => {
                    console.log(response.data);
                    this.closeModal();
                })
                .catch((error) => {
                    console.error(error);
                });
        },
    },
    props: ["actividad_id", "cat_comentario_base", "comentario_base"],
};
</script>
