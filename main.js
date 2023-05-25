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
            console.log(par);
            const newModal = document.createElement('div');
            newModal.classList.add('modal')
            newModal.innerHTML = `
                <div class="modal-card">
                    <img src="${par.poster}" alt="${par.title} Album Poster">

                    <div class="card-title text-uppercase mt-2 fs-4 text-center fw-bold">
                        ${par.title} 
                    </div>
                    <div class="card-author">
                        ${par.author}
                    </div>
                    <div class="card-year fw-bold fs-5">
                        ${par.year}
                    </div>
                </div
            `;
            const mainDiv = document.querySelector('main');
            mainDiv.appendChild(newModal);
        }

    },
    mounted() {
        this.apiDischi();
    },

}).mount('#app')