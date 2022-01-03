<?php
include("./header.php");
include("./filemain.php");
?>

<body><br />
<center><p>* Бележка: Ако сте влезли като гост вашата стара парола е "Няма".</p></center>
<center><input type="text" class="form-control" name="" id="oldpass" placeholder="Стара Парола" required></center><br />
 <center><input type="password" class="form-control" name="" id="pass" placeholder="Нова Парола" required></center><br />
 <p id="show">Покажи парола:</p>
 &nbsp;<input type="checkbox" onclick="showPass()"><br />
 <center><button type="button" onclick="signup()" class="btn btn-dark"> Смени </button></center>
</body>

<script>
function signup() {
	var old = document.getElementById("oldpass").value;
	var pass = document.getElementById("pass").value;
	
	if(old == localStorage.getItem("pass1")) {
    alert("Паролата ви бе сменена!");
	localStorage.setItem("pass1", pass);
	document.getElementById("pass").value="";
	window.location.href = "./userinfo.php";
	}else {
		alert("Такава парола не съществува!");
	}
}

function showPass() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
	document.getElementById("show").innerHTML = "Скрий парола:";
  } else {
    x.type = "password";
	document.getElementById("show").innerHTML = "Покажи парола:";
  }
  }

</script>