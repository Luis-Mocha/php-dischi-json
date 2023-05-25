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

        showModal(par) {

            const newModal = document.getElementById('modal')
            newModal.classList.remove('d-none')
            const infoModal = document.getElementById('modal-card')

            infoModal.innerHTML = `
                    <img src="${par.poster}" alt="${par.title} Album Poster">

                    <div class="card-title text-uppercase mt-2 fs-4 text-center fw-bold">
                        ${par.title} 
                    </div>
                    <div class="card-year fw-bold fs-4">
                        ${par.genre}
                    </div>
                    <div class="card-author">
                        ${par.author}
                    </div>
                    <div class="card-year fw-bold fs-5">
                        ${par.year}
                    </div>                
            `;
        },

        closeModal() {
            const infoModal = document.getElementById('modal-card')
            infoModal.innerHTML = '';
            
            const newModal = document.getElementById('modal');
            newModal.classList.add('d-none');
        },

    },
    mounted() {
        this.apiDischi();
    },

}).mount('#app')