require('./bootstrap');
import axios from 'axios';
import {CreateApp} from 'vue';
import ExampleComponent from './components/ExampleComponent.vue';

CreateApp({
    components:{
        ExampleComponent
    }
}).mount('#app');