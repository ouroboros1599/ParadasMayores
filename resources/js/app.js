// require("./bootstrap");
import { createApp } from "vue";
import axios from "axios";

import './charts/pieChart.js';
import './charts/linearChart.js';
import './charts/list_pieChart.js';

import ExampleComponent from "./components/ExampleComponent.vue";
import PmListComponent from "./components/PM_Listado.vue";
import PmPlanificacionComponent from "./components/PM_Planificacion.vue";
import PmEjecucionComponent from "./components/PM_Ejecucion.vue";


const app = createApp({});

app.component("example-componente", ExampleComponent);

app.component("list_component", PmListComponent);
app.component("planificacion_component", PmPlanificacionComponent);
app.component("ejecucion_component", PmEjecucionComponent)

app.mount("#app");
