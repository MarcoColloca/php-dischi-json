const { createApp } = Vue

createApp({

    data() {
        return {
            title: 'PHP Dischi JSON!',
            dischi: [],

            objectIndex: 0,
            modalDisk: {},

            isOpenModal: false,
        }
    },


    created(){
        this.fetchData();
    },


    methods:{
        fetchData(){
            axios.get('./server.php').then((res) => {
				//console.log(res.data.results)
				this.dischi = res.data.results
                //console.log(this.dischi)
			})
        },

        openModal(index){
            //console.log('funziona');
            this.isOpenModal = true;

            this.objectIndex = index;
            //console.log(this.objectIndex)

            
            
            //console.log(this.dischi)

            for(let i = 0; i < this.dischi.length; i++){
                // console.log(i)
                // console.log( this.dischi[i])

                if(i === this.objectIndex){
                    this.modalDisk = this.dischi[i]
                }

                
            }
           
        },

        closeModal(){
            this.isOpenModal = false;
        }
    }
}).mount('#app')