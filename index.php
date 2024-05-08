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
                    {{ message }}
                </h1>
            </div>
        </header>

        <main>
            <div class="container">
                <div class="row">
                    <p>
                        
                    </p>
                </div>
            </div>
        </main>
        
       
    </div>


    <script src="./js/app.js"></script>
</body>


<style>
    body{
        background-color: rgb(53, 53, 53);
    }


    header{
        background-color: coral;        
    }

    header .title{
        color: white;
        padding: 30px 0;
        text-align: center;
    }
</style>
</html>