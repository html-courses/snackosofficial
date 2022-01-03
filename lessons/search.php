<html>
<head>
 <link rel="stylesheet" href="./search.css">
 <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<?php include("header.php");
    include("filemain.php");
?>
 <body>
 
<div class="container">
  <div class="jumbotron">
    <h1>Всички Уроци</h1>      
    <p>Това са всички уроци за HTML,CSS,JavaScript!</p>
  </div>

<div class="row">
<center><input id="searchbar" onkeyup="search_lesson()" type="text"
        name="search" placeholder="Потърси урок..."></center><br><br><center><button class="btn btn-dark" onclick="reload()">Ново търсене (ако вече си потърсил...)</button></center><br><br>
  
  <div class="col-sm">
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="https://www.w3schools.com/colors/img_colormap.gif" alt="Card image cap"><br>
  <h6 class="card-subtitle mb-2 text-muted"><i class="fas fa-thumbtack"></i>&nbsp;Пиннато</h6>
  <div class="card-body">
    <h5 class="card-title">Средство за избиране на цвят</h5>
    <p class="card-text">Искате да построите уебсайт, но не знает hex кода на цвета, който искате? Използвайте това!</p>
    <a href="./colorpick.php" class="btn btn-dark">Избери цвят</a>
  </div>
</div>
  </div><br><br>
  
   <div class="col-sm">
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="https://image.flaticon.com/icons/png/512/30/30818.png" alt="Card image cap"><br>
  <h6 class="card-subtitle mb-2 text-muted"><i class="fas fa-thumbtack"></i>&nbsp;Пиннато</h6>
  <div class="card-body">
    <h5 class="card-title">Упражнения</h5>
    <p class="card-text">Упражнете знанията си за HTML, CSS и JavaScript!</p>
    <a href="./game/index.php" class="btn btn-dark">Започни</a>
  </div>
</div>
  </div><br><br>

  <div class="col-sm">
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="https://www.freeiconspng.com/thumbs/document-icon/document-icon-19.png" alt="Card image cap"><br>
  <h6 class="card-subtitle mb-2 text-muted"><i class="fas fa-thumbtack"></i>&nbsp;Пиннато</h6>
  <div class="card-body">
    <h5 class="card-title">Документи</h5>
    <p class="card-text">Всички документи за HTML, CSS, JavaScript, PHP!</p>
    <a href="./docs/index.php" class="btn btn-dark">Отвори</a>
  </div>
</div>
  </div><br><br>

  <div class="col-sm">
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="../img/start.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Как да започнеш?</h5>
    <p class="card-text">Урок с,който всеки може да започне да изучава Web Design!</p>
    <a href="./lessons/how_to.php" class="btn btn-dark">Урок</a>
  </div>
</div>
  </div>
    <div class="col-sm">
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b7/Html-source-code.png/209px-Html-source-code.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Какво е HTML?</h5>
    <p class="card-text">В този урок ще разбереш какво е HTML и как да го използваш!</p>
    <a href="./lessons/what_is_html.php" class="btn btn-dark">Урок</a>
  </div>
</div>
  </div><br><br>
  <div class="col-sm">
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="../img/boilerplate.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">HTML Boilerplate</h5>
    <p class="card-text">HTML код, с който можеш да започнеш всеки един твой уебсайт!</p>
    <a href="./lessons/boilerplate.php" class="btn btn-dark">Урок</a>
  </div>
</div>
  </div><br><br>
   <div class="col-sm">
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="https://miro.medium.com/max/1400/1*tJo05eBcS3pAkdcBFWXuNg.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Css Framework</h5>
    <p class="card-text">Сега можеш да използваш Snack OS Framework вместо CSS!</p>
    <a href="./lessons/how_to_frame.php" class="btn btn-dark">Урок</a>
  </div>
</div>
  </div><br><br>
     <div class="col-sm">
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="https://miro.medium.com/max/1400/1*tJo05eBcS3pAkdcBFWXuNg.png" alt="Card image cap">
    <h5 class="card-title">Какво е SnackCSS?</h5>
  <div class="card-body">
    <p class="card-text">В този урок ще разбереш какво е SnackCSS и как да го използваш!</p>
    <a href="./lessons/what_is_snackcss.php" class="btn btn-dark">Урок</a>
  </div>
</div>
  </div><br><br>
       <div class="col-sm">
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="https://assets.hongkiat.com/uploads/top-css-editors-reviewed/vscode.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Какво е CSS?</h5>
    <p class="card-text">В този урок ще разбереш какво е CSS и как да го използваш!</p>
    <a href="./lessons/what_is_css.php" class="btn btn-dark">Урок</a>
  </div>
</div>
  </div>
</div>  
</div>  
</div>

<script src="./search.js"></script>

</body>
</html>

