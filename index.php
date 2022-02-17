<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-ajax-dischi</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div id="app">
        <main>
            <div class="container"> 
                <div class="card"  v-for="disco in dischiList">
                    <div>
                        <div class="picture">
                            <img :src="disco.poster" alt="">
                        </div>
                        <div class="title">
                        {{disco.title}}
                        </div>
                    </div>
                    <div>
                        <div class="details">
                            <div>{{disco.author}}</div>
                            <div> {{disco.year}} </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                dischiList: []
            },
            mounted() {
                axios.get('http://localhost/php-ajax-dischi/api/apiCall.php')
                .then(resp => {
                        this.dischiList = resp.data;
                })
            }
        })
    </script>
</body>
</html>