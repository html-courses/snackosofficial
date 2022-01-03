<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="./icon.png"/>
    <title>Snack OS</title>

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
          <meta name="google-signin-client_id" content="609430438230-i85uss0lkea6lk57doj447rtfpu1ho2c.apps.googleusercontent.com">
	<style>
	.login {
		background-color: #343A40;
		color: white;
		border-radius: 8px;
		border-top: none;
		border-right: none;
		border-left: none;
		border-bottom: none;
		padding: 12px;
	}
	</style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>
    <div class="container">
        <h1 class="text-center">Влез</h1>
		<h4 class="text-center">* Бележка: Ако сте влезли като гост имейла и паролата са "Няма"</h4>

        <div class="col-md-8 col-md-offset-2">
            <br />
            Е-мейл:
            <input type="text" class="form-control" name="" id="email"><br />
            Парола:
            <input type="password" class="form-control" name="" id="pass"><br />
			<p id="show">Покажи парола:</p>
			<input type="checkbox" onclick="showPass()">
            <br /><br/>
            <button type="button" onclick="login()" class="login"> Влез </button>
            <button class="login" id="clear"> Изчисти </button>
			<p>Още нямаш регистрация? <a href="./signup.php">Регистрирай се</a></p>

      <center><h4>Влез със социални медии:</h4></center><br />
      <center> <div class="g-signin2" data-onsuccess="onSignIn"></div></center>
        </div>
    </div>

    <script>

var a=localStorage.getItem("abc");

if(a=="save password"){
   
}

function login(){



    var email=document.getElementById("email").value;
    var pass=document.getElementById("pass").value;

    var email1=localStorage.getItem("email1");
    var pass1=localStorage.getItem("pass1");

    if(email==email1 && pass==pass1){
        
        localStorage.setItem("code","secret");
        window.location.href="verify.php";

    }else {
        alert("Имейл и паролата са грешни")
    }

}


let btnClear = document.querySelector('#clear');
let inputs = document.querySelectorAll('input');
btnClear.addEventListener('click', () => {
    inputs.forEach(input =>  input.value = '');
});

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


    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<script src="https://apis.google.com/js/platform.js" async defer></script>
<script>
function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  localStorage.setItem("name1", profile.getName())
  localStorage.setItem("email1", profile.getEmail())
  localStorage.setItem("img", profile.getImageUrl())
  localStorage.setItem("google", "true")
  window.location.href="main.php";
  loginBtn.style.display = "none";

  if(localStorage.getItem("name1") == profile.getName()) {
    var theBtn = document.getElementById("theBtn");
    theBtn.style.display = 'block';
  }

}

</script>

<script>
  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      alert('Ти излезе от своя Google акаунт!');
    });
  }
</script>


</body>

</html>