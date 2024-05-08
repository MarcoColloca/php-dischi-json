<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>


<body>
    <div id="app">
        
        <header>
            <div class="title">
                <h1>
                    {{ title }}
                </h1>
            </div>
        </header>

        <main>
            <section class="disk-cards py-5">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-4" v-for="(disco, i) in dischi">
                            <div class="card text-bg-special p-5" @click="openModal(i)">
                                <img :src="disco.poster" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-center">{{disco.title}}</h5>
                                    <p class="card-text text-center">{{disco.author}}</p>
                                    <h5 class="card-title text-center">{{disco.year}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="my-modal" v-show="isOpenModal">
                    <div class="modal-card-container">
                        <div class="card text-bg-special p-5">
                            <img :src="modalDisk.poster" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">{{modalDisk.title}}</h5>
                                <p class="card-text text-center">{{modalDisk.author}}</p>
                                <h5 class="card-title text-center">{{modalDisk.year}}</h5>
                            </div>
                        </div>
                    </div>
                    <p class="close-modal" @click="closeModal">
                        X
                    </p>
                </span>
            </section>            
        </main>
        
       
    </div>


    <script src="./js/app.js"></script>
</body>


<style>

    /** Utilities */

    .my-d-none{
        display: none;
    }

    .my-d-block{
        display: block;
    }

    /** Style */
    .text-bg-special{
        background-color: #112030;
        color: white;
    }

    /** Header */

    header{
        background-color: #06131F;        
    }

    header .title{
        color: white;
        padding: 30px 0;
        text-align: center;
    }

    /** Main */
    main{
        background-color: #1D2D3C;
    }
    
    img{
        max-width: 300px;
    }

    .my-modal{        
        position: fixed;
        top: 30px;
        left: 30px;
        width: 95%;
        height: 95%;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .modal-card-container{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
    }

    .close-modal{
        color: white;
        font-size: 40px;
        position: absolute;
        top: 20px;
        right: 40px;
        cursor: pointer;
    }
</style>
</html>