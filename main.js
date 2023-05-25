const { createApp } = Vue 

createApp ({
    data() {
        return {
            apiUrl: 'apis/listaDischi.php',
            arrayDischi: [],
            
        }
    },
    methods: {
        apiDischi() {
            axios.get(this.apiUrl)
            .then ( (res) => {
                this.arrayDischi = res.data
            })
        },

    },
    mounted() {
        this.apiDischi();
    },

}).mount('#app')