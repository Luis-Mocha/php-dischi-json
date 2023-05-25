<?php
// echo __DIR__;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio php-dischi-json</title>

    <!-- link Font-awesome -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css' integrity='sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==' crossorigin='anonymous' referrerpolicy='no-referrer'/>
    <!-- link Bootstrap Css -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD' crossorigin='anonymous'>
    <!-- link style -->
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>

    <div id="app">
        
        <?php include_once __DIR__ . '/components/header.php' ?>

        <main>
            <div id="album-container" class="container">

                <div v-for="(elem,index) in arrayDischi" :key="index" class="card-album rounded">
                    
                    <img :src="elem.poster" :alt="elem.title + ' Album poster'">

                    <div class="card-title text-uppercase mt-2 fs-4 text-center fw-bold">
                        {{ elem.title }}
                    </div>
                    <div class="card-author">
                        {{elem.author}}
                    </div>
                    <div class="card-year fw-bold fs-5">
                        {{elem.year}}
                    </div>
                </div>
            </div>

        </main>
    
    </div>  <!-- fine #app -->
    
    <!-- link Vue cdn -->
    <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
    <!-- link Axios cdn -->
    <script src='https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js'></script>
    <!-- link Bootstrap Js -->
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js' integrity='sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN' crossorigin='anonymous'></script>

    <!-- link js -->
    <script src="main.js"></script>
</body>
</html>