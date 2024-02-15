import { createApp } from "vue";
import axios from "axios";


import ExampleComponent from "./components/ExampleComponent.vue";
//----------------------------------------------------------------------------------\\

import PieChartEjecucion from "./components/charts/PieChart_Ejecucion.vue";
import LineChartEjecucion from "./components/charts/LineChart_Ejecucion.vue";
import PieChartListado from "./components/charts/PieChart_Listado.vue";

//----------------------------------------------------------------------------------\\

import PmListComponent from "./components/ParadasMayores/PM_Listado.vue";
import PmPlanificacionComponent from "./components/ParadasMayores/PM_Planificacion.vue";
import PmEjecucionComponent from "./components/ParadasMayores/PM_Ejecucion.vue";
//----------------------------------------------------------------------------------\\

const app = createApp({});
//----------------------------------------------------------------------------------\\

app.component("example-componente", ExampleComponent);
//----------------------------------------------------------------------------------\\

app.component("listado_component", PmListComponent);
app.component("planificacion_component", PmPlanificacionComponent);
app.component("ejecucion_component", PmEjecucionComponent)
//----------------------------------------------------------------------------------\\
app.component("PieChart_Ejecucion", PieChartEjecucion);
app.component("LineChart_Ejecucion", LineChartEjecucion);
app.component("PieChart_Listado", PieChartListado);
//----------------------------------------------------------------------------------\\

app.mount("#app");
