<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">

<script>
var min = 10000;
var max = 99999;
var num = Math.floor(Math.random() * (max - min + 1)) + min;
localStorage.setItem('code', num);
</script>

<style>
  #codeI {
    height: 25px;
    width: 15rem;
  }
</style>
<body onload="sendMail()">
<center><h1>Верификация</h1></center>
<center><h4 class="text-secondary">При рефрешване на страницата имейлът ще бъде изпратен отновово!</h4></center>
<center><input type="text" id="codeI"></center><br />
<center><input type="submit" onclick="check()" class="btn btn-dark"></center><br>
<center><p class="text-secondary">* На вашия е-мейл беше изпратен код за верификация копирайте го и го поставете!</p></center>
<center><p class="text-secondary">* Ако кода не е в главната секция значи е в спам секцията!</p></center>

<script>

  if(localStorage.getItem('verified') == 'true') {
    alert("Вие вече сте потвърдили!");
    window.location.href = "./main.php";
    debugger;
  }
  
  function check() {
 var input =    document.getElementById("codeI").value;

    if(input != localStorage.getItem('code')) {
      alert("Грешен код!");
    }else {
      alert("Поздравления вашия код е правилен!");
      localStorage.setItem('verified', 'true')
      window.location.href="./signed.php";
    }
    
  }
</script>
<br>
<br>
<br>
<script src="https://smtpjs.com/v3/smtp.js">
</script>
<script>
  function sendMail() {

  Email.send({
    SecureToken : "c12fb9b6-6527-4a51-8bfe-737a844d7cff",
    To : localStorage.getItem('email1'),
    From : "ossnackbusiness@gmail.com",
    Subject : "Код за верификация",
    Body : "Това е вашият код за верификация " + num
}).then(
  alert("Имейлът беше изпратен на " + localStorage.getItem('email1') + "!")
);
  }
</script>
</body>