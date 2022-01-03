
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
    <style>
	*
	{
		margin: 0;
		padding: 0;
	}
	
	body
	{
		color: white;
		font-family: sans-serif;
		background-color: #0E1E25;
	}
	
	h1
	{
		font-size: 3.5rem;
	}
	
	section
	{
		position: relative;
		width: 100%;
		height: 100vh;
		background: #0E1E25;
		overflow: hidden;
	}
	
.wrapper {
  padding: 32px;
}

.cookie-container {
  position: fixed;
  bottom: -100%;
  left: 0;
  right: 0;
  background: #2f3640;
  color: #f5f6fa;
  padding: 0 32px;
  box-shadow: 0 -2px 16px rgba(47, 54, 64, 0.39);

  transition: 400ms;
}

.cookie-container.active {
  bottom: 0;
}

.cookie-container a {
  color: #f5f6fa;
}

.cookie-btn {
  background: #DC3545;
  border: 0;
  color: #f5f6fa;
  padding: 12px 48px;
  font-size: 18px;
  margin-bottom: 16px;
  border-radius: 8px;
  cursor: pointer;
}
	</style>
</head>
<body onload="myFunction()">    
    <section class="wrapper">

	<center><h1>Добре дошъл в Snack OS</h1></center>
	<center><p style="margin-top: 27px;margin-bottom: 27px;">За да продължиш трябва да се регистрираш, така че направи го сега:</p></center><br>
	<center><p style="margin-top: 27px;margin-bottom: 27px;">*Бележка: Вашата регистрация в официалния ни уебсайт не важи в приложението!</p></center>
	<center><div class="col-sm-6">
	<a style="background-color: #DC3545;color: white;padding: 12px;border-radius: 8px;text-decoration: none;" href="signup.php">Регистрация</a>
	<a style="background-color: #DC3545;color: white;padding: 12px;border-radius: 8px;text-decoration: none;" href="guest.php">Влизане като гост</a>
  <br />
  <br />
  <p>или</p>
  <br />
  <div class="g-signin2" data-onsuccess="onSignIn"></div><br />
  <button id="theBtn" style="display: none;" onclick="signOut()" class="btn btn-dark"> Излез от Google акаунт </button>
	</div></center>
	</section>

	<div class="cookie-container">
      <p>
        Ние използваме бисквитки в този уебсайт, за да ви осигурим най-доброто изживяване на нашия
        сайт и да ви показва подходящи реклами. За да научите повече, прочетете нашата
        <a href="privacy.php">политика за поверителност</a>.
      </p>

      <button class="cookie-btn">
        Ок
      </button>
    </div>

<script src="https://apis.google.com/js/platform.js" async defer></script>

<script type="text/javascript">
function myFunction() {
  localStorage.setItem("google", "false")
}

const cookieContainer = document.querySelector(".cookie-container");
const cookieButton = document.querySelector(".cookie-btn");

cookieButton.addEventListener("click", () => {
  cookieContainer.classList.remove("active");
  localStorage.setItem("cookieBannerDisplayed", "true");
});

setTimeout(() => {
  if (!localStorage.getItem("cookieBannerDisplayed")) {
    cookieContainer.classList.add("active");
  }
}, 2000);

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