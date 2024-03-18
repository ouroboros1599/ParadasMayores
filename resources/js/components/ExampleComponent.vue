<template>
    <div class="bg-blue-300 w-100 p-5 rounded-full m-5">
        <h1 class="">Hola, mundo!</h1>
        {{ test }}
    </div>
</template>

<script>
export default {
    data() {
        return {
            test: null,
        };
    },
    methods: {
        getActividades() {
            axios.get("test").then((response) => {
                this.test = response.data;
            });
        },
    },
    mounted() {
        this.getActividades();
    },
};
</script>
