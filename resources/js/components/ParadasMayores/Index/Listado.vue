<template>
    <div class="h-full w-full">
        <div class="m-10 flex space-x-10 ">
        <div class=" bg-slate-100 rounded-2xl w-1/2 flex justify-center mx-auto ">
            <PieChart_Listado></PieChart_Listado>
        </div>
    </div>

    <div class="m-10 flex ">
        
        <div class="basis-3/4">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg overflow-y-scroll">
            <table class="w-full text-sm text-left rtl:text-right text-blue-100 table-auto">
                <thead class="text-xs text-center font-semibold text-white uppercase bg-[#F57C00] dark:text-white">
                  <tr>
                <th scope="col" class="px-3 py-3">EMPRESA</th>
                <th scope="col" class="px-3 py-3">DIVISIÓN</th>
                <th scope="col" class="px-3 py-3">NOMBRE PARADA</th>
                <th scope="col" class="px-3 py-3">ENCARGADO</th>
                <th scope="col" class="px-3 py-3">ESTADO</th>
                <th scope="col" class="px-3 py-3">INICIO PROGRAMADO</th>
                <th scope="col" class="px-3 py-3">FIN PROGRAMADO</th>
                <th scope="col" class="px-3 py-3">INICIO REAL</th>
                <th scope="col" class="px-3 py-3">FIN REAL</th>
                <th scope="col" class="px-3 py-3">OPCIONES</th>
              </tr>
                </thead>
                <tbody class="text-center text-black">
                  <tr v-for="(item, index) in paradasmayores" :key="index" class="text-center border-b border-[#0A214033]">
                    <td class="font-semibold">{{ item.empresa.nombreEmpresa }}</td>
                    <td>{{ item.empresa.divisionEmpresa }}</td>
                    <td>{{ item.nombreParada }}</td>
                    <td>{{ item.encargadoParada }}</td>
                    <td>{{ item.estadoParada }}</td>
                    <td>{{ item.inicioPlanificado }}</td>
                    <td>{{ item.finPlanificado }}</td>
                    <td>{{ item.inicioReal }}</td>
                    <td>{{ item.finReal }}</td>
                    <td class="px-3 py-3">
                      <button @click="editarParada(item.id)" class="text-white bg-blue-500 hover:bg-blue-600 rounded-lg px-4 py-2 mr-2">Editar</button>
                      <button @click="eliminarParada(item.id)" class="text-white bg-red-500 hover:bg-red-600 rounded-lg px-4 py-2">Eliminar</button>
                    </td>
              </tr>
                </tbody>
            </table>
            </div>
        </div>

        <div class="flex-col ml-10 basis-1/4">
            <form>
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only ">Buscar</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </div>
            <input type="search" id="default-search"
                class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 "
                placeholder="Buscar">
              <button type="submit"
                class="text-white absolute right-2.5 bottom-2.5 bg-[#F57C00] hover:bg-[#F57C00BF] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">
                Buscar
              </button>
            </div>
          </form>
          <div class="flex justify-center mt-10">
            <button @click="crearParada" class="text-white bg-[#F57C00] hover:bg-[#F57C00BF] rounded-lg text-sm px-4 py-2">
              Añadir
            </button>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    data() {
      return {
        paradasmayores: []
      };
    },
    created() {
      this.fetchParadas();
    },
    methods: {
      fetchParadas() {
        axios.get('/pm_listado')
          .then(response => {
            this.paradasmayores = response.data;
          })
          .catch(error => {
            console.error('Error al recuperar los datos de las paradas:', error);
          });
      },
      editarParada(id){
        window.location.href = "/pm_listado/" + id + '/edit';
      },
      eliminarParada(){
        window.location.href = "/pm_listado/" + id + 'delete';
      },

      crearParada(){
        window.location.href = '/pm_listado/create'
      }
    },

    props: [
      "paradasmayores",
    ]
  };
  </script>
  