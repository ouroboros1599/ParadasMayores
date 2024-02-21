import { createApp } from "vue";
import axios from "axios";


import ExampleComponent from "./components/ExampleComponent.vue";

//----------------------------------------------------------------------------------\\
/*CHARTS*/
import PieChartEjecucion from "./components/charts/PieChart_Ejecucion.vue";
import LineChartEjecucion from "./components/charts/LineChart_Ejecucion.vue";
import PieChartListado from "./components/charts/PieChart_Listado.vue";
import BarChartPlanificacion from "./components/charts/BarChart_Planificacion.vue";

//----------------------------------------------------------------------------------\\
/*INDEXES*/ 
import IndexListadoComponent from "./components/ParadasMayores/Index/Listado.vue";
import IndexPlanificacionComponent from "./components/ParadasMayores/Index/Planificacion.vue";
import IndexEjecucionComponent from "./components/ParadasMayores/Index/Ejecucion.vue";
//----------------------------------------------------------------------------------\\
/*CREATE*/
import CreatePlanificacionComponent from "./components/ParadasMayores/Create/Planificacion.vue";

//----------------------------------------------------------------------------------\\

const app = createApp({});

//----------------------------------------------------------------------------------\\
/*TESTING*/
app.component("example-componente", ExampleComponent);

//----------------------------------------------------------------------------------\\
/*CHARTS*/
app.component("PieChart_Ejecucion", PieChartEjecucion);
app.component("LineChart_Ejecucion", LineChartEjecucion);
app.component("PieChart_Listado", PieChartListado);
app.component("BarChart_Planificacion", BarChartPlanificacion);

//----------------------------------------------------------------------------------\\
/*INDEXES*/
app.component("listado_component", IndexListadoComponent);
app.component("planificacion_component", IndexPlanificacionComponent);
app.component("ejecucion_component", IndexEjecucionComponent);

//----------------------------------------------------------------------------------\\
/*CREATE*/
app.component("CreatePlanificacion", CreatePlanificacionComponent);
//----------------------------------------------------------------------------------\\
app.mount("#app");
