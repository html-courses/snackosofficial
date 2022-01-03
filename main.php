<html>
<link rel="stylesheet" href="./styling/style.css">
<?php 
    include("header.php");
    include("filemain.php");
?>
 <div id="page-content">
<h1>Най-известни уроци:</h1><br>
<div class="col-sm">
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="./img/boilerplate.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">HTML Boilerplate</h5>
    <p class="card-text">HTML код, с който можеш да започнеш всеки един твой уебсайт.</p>
    <a href="./lessons/boilerplate.php" class="btn btn-dark">Урок</a>
  </div>
</div>
  </div>
  <br>
<footer id="sticky-footer" class="flex-shrink-0 py-4 bg-light text-dark-50">
    <div class="container text-center">
      <small>Copyright &copy; Snack OS</small>
    </div>
  </footer>
</body>

<script>
if ("name1" in localStorage) {

} else {
   alert("Не си регистриран (може да влезеш като гост)");
   window.location.href = "./index.php";
}
</script

</html>