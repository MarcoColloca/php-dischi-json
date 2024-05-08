const { createApp } = Vue

createApp({

    data() {
        return {
            title: 'PHP Dischi JSON!',
            dischi: [],
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
                console.log(this.dischi)
			})
        }
    }
}).mount('#app')