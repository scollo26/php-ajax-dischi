<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <title>Document</title>
</head>
<body>
  <!-- Header -->
  <?php include_once __DIR__ . '/partials/header.php' ?>

  <!-- Main -->
  <main id="app">
    <div class="container ">
        <div class="flex">

            
            <div class="card-container" v-for="disc in albums">
                <img class="card-img" :src="disc.poster" :alt="disc.title">
                <h4 class="card-title">{{ disc.title }}</h4>
                <h5 class="card-author">{{ disc.author }}</h5>
                <p class="card-year">{{ disc.year}}</p>
            </div>

        </div>
    </div>
  </main>
  <!-- Footer -->
  <?php include_once __DIR__ . '/partials/footer.php' ?>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

  <script src="js/script.js"></script>
</body>
</html>