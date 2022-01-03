
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack OS</title>
	<link rel="icon" type="image/png" href="./icon.png"/>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <meta name="google-signin-client_id" content="609430438230-i85uss0lkea6lk57doj447rtfpu1ho2c.apps.googleusercontent.com">
</head>
<body>    
    <section class="wrapper">
  <div class="g-signin2" data-onsuccess="onSignIn"></div><br />
  <center><h1>Сигурен ли си, че искаш да излезеш от твоя Google акаунт?</h1></center>

<center><div>
<div class="btn-group">
<button id="theBtn" style="display: none;" onclick="signOut()" class="btn btn-dark"> Излез от Google акаунт </button>
</div>

<div class="btn-group">
  <a class="btn btn-dark" href="./userinfo.php"> Не </a>
</div>
</div></center>
	</section>

<script src="https://apis.google.com/js/platform.js" async defer></script>

<script type="text/javascript">

function onSignIn(googleUser) {
  var loginBtn = document.querySelector(".g-signin2")
  var profile = googleUser.getBasicProfile();
  localStorage.setItem("name1", profile.getName())
  localStorage.setItem("email1", profile.getEmail())
  localStorage.setItem("img", profile.getImageUrl())
  localStorage.setItem("google", "true")
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
      localStorage.removeItem("img");
      localStorage.removeItem("name1");
      alert('Ти излезе от своя Google акаунт!');
      window.location.href="index.php"
    });
  }
</script>

</body>
</html>