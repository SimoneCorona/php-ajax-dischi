<!-- Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.
Seconda Milestone:
Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà, attraverso una chiamata api, i dischi a php e li stamperà attraverso vue.
Bonus:
Attraverso un’altra chiamata api, filtrare gli album per genere. -->

<?php
include_once __DIR__ ."/database.php";
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"
      integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
</head>
<body>
    <!-- header -->
    <header>
        <div class="header_wrapper">
            <img src="./img/logo-small.svg" alt="">
        </div>
    </header>
    <!-- main -->
    <main id="root">
        <!-- PHP -->
        <?php foreach ($database as $single_album) {
            echo "<div>
                    <img src=$single_album[poster] alt=>
                    <h1>$single_album[title]</h1>
                    <p>$single_album[author]</p>
                    <p>$single_album[year]</p>
                </div>";
            }?>
        <!-- VUE -->
        <div v-for="item in albums">
            <img :src='item.poster' alt= "">
            <h1> {{ item.title }} </h1>
            <p>{{ item.author }}</p>
            <p>{{ item.year }}</p>
        </div>
    </main>

    <script src="js/script.js"></script>
</body>
</html>