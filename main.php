<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <?php include 'template/menu.inc.php' ?>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">
        <?php
            echo $greetings
        ?>
        </h1>
        <p class="lead text-muted">
        Меня зовут
        <?php 
            echo $name, ' ', $surname . '<br>';
            echo 'Город', ' ', $city; ?>
        </p>

        <p>
        <?php
            echo '<img src="/img/php.jpg">';
        ?>
        </p>
        <p>
        Мы научились создавать переменные
        </p>
        <p>
        Изучили простые операции с ними
        </p>
      </div>
    </div>
  </section>

  <section class="py-5 text-center container-fluid bg-light">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Knowledge</h1>
        <p class="lead text-muted">
            <?php include 'template/knowledge.inc.php'; ?>
            <?php
            echo $a, ' ', $b, ' ', $c;
            ?>
            <br>
            <?php
            $a = 10;
            $b = 20;
            $c = $a + $b;
            echo $c;
            ?> <br>
            <?php echo $d;
            ?>
        </p>
        <p>

        </p>
      </div>
    </div>
  </section>

  <footer class="my-5 text-muted text-center text-small">
  <div class="container">
  <p class="mb-6">Мы изучили основы PHP</p>
    <p class="mb-6">
      <a href="#">Вверх</a>
    </p>
  </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>