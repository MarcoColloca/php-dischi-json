const { createApp } = Vue

createApp({

    data() {
        return {
            title: 'PHP Dischi JSON!',
            dischi: [],

            modalDisk: {},

            isOpenModal: false,
        }
    },


    created(){
        this.fetchData();
    },


    methods:{
        /* 
            Funzione che recupera i dati effettuando una chiamata GET al file server.php,
            Quindi va a modificare il data dischi assegnandogli il valore results dentro il valore data della risposta ricevuta.
        */
        fetchData(){
            axios.get('./server.php').then((res) => {
				this.dischi = res.data.results
			})
        },

        /* 
            Funzione che passato un indice come parametro, va a modificare il data objectIndex (rendendolo uguale al parametro); 
            quindi esegue un ciclo for dell'Array dischi, andando ad assegnare all'oggetto modalDisk il valore dell'oggetto contenuto dentro dischi all'indice corrispodnente al parametro 
        */
        openModal(index){

            this.isOpenModal = true;
            this.modalDisk = this.dischi[index];
            /*
                this.objectIndex = index;

                for(let i = 0; i < this.dischi.length; i++){

                    if(i === this.objectIndex){
                        this.modalDisk = this.dischi[i]
                    }
                }
            */
        },


        /*
            Funzione che cambia il valore isOpenModal in false, utilizzata per chiudere il modale grazie alla direttiva v-show presente in index.php
        */
        closeModal(){
            this.isOpenModal = false;
        }
    }
}).mount('#app')