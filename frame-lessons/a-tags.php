<?php
include("../header.php");
?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Snack OS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="preconnect" href="https://fonts.gstatic.com" />
		 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Inter&family=Source+Code+Pro&display=swap"
        />
		<link href="https://cdn.jsdelivr.net/gh/html-courses/snackcss@main/css/snackframe.min.css" rel="stylesheet" crossorigin="anonymous">
		<link href="../lessons/frame.css" rel="stylesheet">
    </head>
	    <body>
	<div class="sidebar">
  <a href="../lessons/how_to_frame.php">Начало</a>
  <a href="./install.php">Инсталация</a>
  <a href="./buttons.php">Бутони</a>
  <a href="./backgrounds.php">Фонове</a>
  <a href="./column.php">Колони</a>
  <a href="./colors.php">Цветове на текст</a> 
  <a href="../main.php">Snack OS</a>
</div>
      <div class="content">
	  <h1>В този урок ще научите как да използвате бутоните, но да можете да препращате към линкове с <code>&lt;a&gt;</code> препратката предоставени от SnackCSS:
	  <p>Всички бутони са с фонт <code>sans-serif</code>, но сега ще разберете всички налични цветове:</p>
	  <br>
	  <button class="btn-green" href="#">Бутон</button><br><br>
	  <button class="btn-blue" href="#">Бутон</button><br><br>
	  <button class="btn-red" href="#">Бутон</button><br><br>
	  <div class="btn-bg">
	  <button class="btn-white" href="#">Бутон</button><br><br>
	  </div>
	  <button class="btn-dark" href="#">Бутон</button>
	  <br>
	  <br>
	  <div class="w3-panel w3-card w3-light-grey"> 
  <h4>Това е кода, който може да използвате,за да добавите всеки един бутон във вашия уебсайт!</h4>
  <div class="w3-code htmlHigh notranslate">
    &lt;a href="#" style="text-decoration: none;" class="btn-green"&gt;Бутон&lt;/a&gt;<br>
    &lt;a href="#" style="text-decoration: none;" class="btn-blue"&gt;Бутон&lt;/a&gt;<br>
    &lt;a href="#" style="text-decoration: none;" class="btn-red"&gt;Бутон&lt;/a&gt;<br>
    &lt;a href="#" style="text-decoration: none;color: black;" class="btn-white"&gt;Бутон&lt;/a&gt;<br>
    &lt;a href="#" style="text-decoration: none;" class="btn-dark"&gt;Бутон&lt;/a&gt;
  </div>
</div>
<h1>Искате да използвате <code>&lt;button&gt;</code> бутони?</h1>
<p><a class="btn btn-primary" href="./buttons.php">Цъкнете тук!</a></p>
      </div>
<script src="https://www.w3schools.com/lib/w3codecolor.js"></script>
<script>
w3CodeColor();
</script>
    </body>
</html>