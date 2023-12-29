// require("./bootstrap");
import { createApp } from "vue";
import axios from "axios";

import ExampleComponent from "./components/ExampleComponent.vue";

const app = createApp({});

app.component("example-componente", ExampleComponent);

app.mount("#app");
