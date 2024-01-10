// require("./bootstrap");
import { createApp } from "vue";
import axios from "axios";

import './charts/pieChart.js';
import './charts/linearChart.js';
import './charts/progressBar.js';
import './charts/progressBar2.js';

import ExampleComponent from "./components/ExampleComponent.vue";

const app = createApp({});

app.component("example-componente", ExampleComponent);

app.mount("#app");
