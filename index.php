<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi Json</title>
    <!-- Bootstrap v5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.5/axios.min.js"
        integrity="sha512-JEXkqJItqNp0+qvX53ETuwTLoz/r1Tn5yTRnZWWz0ghMKM2WFCEYLdQnsdcYnryMNANMAnxNcBa/dN7wQtESdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Vue 3 -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- Custom css -->
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-secondary">
    <div id="app">
        <header class="mb-4">
            <nav class="navbar bg-dark">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/84/Spotify_icon.svg/991px-Spotify_icon.svg.png"
                            alt="Spotify Logo" width="30" height="30">
                    </a>
                </div>
            </nav>
        </header>
        <main>
            <div class="container">
                <div class="row g-3">
                    <div v-for="(disk, index) in diskList" class="col-4">
                        <div class="card bg-dark text-white text-center">
                            <img :src="disk.poster" class="card-img-top img-fluid" :alt="disk.author">
                            <div class="card-body">
                                <h5 class="card-title">{{disk.title}}</h5>
                                <p class="card-text">{{disk.author}}</p>
                                <p cass="card-text">{{disk.year}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="./script.js" type="text/javascript"></script>
</body>

</html>