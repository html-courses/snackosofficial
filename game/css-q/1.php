
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Snack OS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</head>
<br>
<body>
<a href="../index.php">Връщане назад</a>
<br>
<br>

<center><h1>За какво използваме CSS:</h1></center>
<center><h3>Да стилизираме(украсяваме) уеб страницата или Да се създават уеб страници?</h3></center>
<center><p>* Бележка: Копирайте и поставете отговора</p></center>
<div class="form-group"><br>
  <center>
    <input style="width: 32rem" type="text" class="form-control" id="answer" placeholder="Отговор...">
  </center><br>
  <center>
    <button type="button" id="go" class="btn btn-primary">Отговори</button>
  </center>
</div>

<!--Modal-->
<div class="modal fade" id="#myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>

        </button>
        <h4 class="modal-title">Правилен отговор!</h4>

      </div>
      <div class="modal-body">
        <p>Твоя отговор беше правилен!</p>
      </div>
      <div class="modal-footer">
        <a href="./2.php" class="btn btn-primary">Следващ въпрос</a>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="#myModal2">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>

        </button>
        <h4 class="modal-title">Грешен отговор!</h4>

      </div>
      <div class="modal-body">
        <p>Твоя отговор беше грешен!</p>
      </div>
      <div class="modal-footer">
        <a href="./2.php" class="btn btn-primary">Следващ въпрос</a>
		<a href="./1.php" class="btn btn-primary">Опитай пак...</a>
      </div>
    </div>
  </div>
</div>

<script>
$('#go').click(function() {
  var an = $('#answer').val();

  if (an === "Да стилизираме(украсяваме) уеб страницата") {
    $('#\\#myModal').modal('show');
  }
  
  if (an != "Да стилизираме(украсяваме) уеб страницата") {
    $('#\\#myModal2').modal('show');
  }
  
  if(an === "") {
	  alert("Моля въведи отговор...")
  }
});
</script>

</body>
</html>