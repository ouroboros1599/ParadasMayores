import { createApp } from "vue";
import axios from "axios";

import ExampleComponent from "./components/ExampleComponent.vue";
import ComentarioComponent from "./components/Comentario.vue";
import HallazgoComponent from "./components/Hallazgos.vue";

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
import CreateListadoComponent from "./components/ParadasMayores/Create/Listado.vue";
import CreateEjecucionComponent from "./components/ParadasMayores/Create/Ejecucion.vue";
//----------------------------------------------------------------------------------\\
/*EDIT*/
import EditPlanificacionComponent from "./components/ParadasMayores/Edit/Planificacion.vue";
import EditListadoComponent from "./components/ParadasMayores/Edit/Listado.vue";
import EditEjecucionComponent from "./components/ParadasMayores/Edit/Ejecucion.vue";
//----------------------------------------------------------------------------------\\
/*DELETE*/
import DeletePlanificacionComponent from "./components/ParadasMayores/Delete/Planificacion.vue";
import DeleteListadoComponent from "./components/ParadasMayores/Delete/Listado.vue";
import DeleteEjecucionComponent from "./components/ParadasMayores/Delete/Ejecucion.vue";

//----------------------------------------------------------------------------------\\
const app = createApp({});

//----------------------------------------------------------------------------------\\
/*TESTING*/
app.component("example-componente", ExampleComponent);
app.component("Comentario_Ejecucion", ComentarioComponent);
app.component("Hallazgo_Ejecucion", HallazgoComponent);
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
app.component("create_planificacion", CreatePlanificacionComponent);
app.component("create_listado", CreateListadoComponent);
app.component("create_ejecucion", CreateEjecucionComponent);
//----------------------------------------------------------------------------------\\
/*EDIT*/
app.component("edit_planificacion", EditPlanificacionComponent);
app.component("edit_listado", EditListadoComponent);
app.component("edit_ejecucion", EditEjecucionComponent);
//----------------------------------------------------------------------------------\\
/*DELETE*/
app.component("delete_planificacion", DeletePlanificacionComponent);
app.component("delete_listado", DeleteListadoComponent);
app.component("delete_ejecucion", DeleteEjecucionComponent);

//----------------------------------------------------------------------------------\\

app.mount("#app");
