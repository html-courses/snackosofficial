<?php
include("./filemain.php");
include("./lessons/header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="./icon.png"/>
    <title>Snack OS</title>
</head>
<body> 
<script>


var abc=localStorage.getItem("code"); //

if(abc=="secret"){

    var test=localStorage.getItem("abc");
    
	if(localStorage.getItem("name1") == null){
      localStorage.setItem("name1", "Гост");
			localStorage.setItem("age1", "Няма");
			localStorage.setItem("email1", "Няма");
			localStorage.setItem("address1", "Няма");
			localStorage.setItem("pass1", "Няма");
	}

  if(localStorage.getItem("age1") == null) {
  localStorage.setItem("аge1", "Няма")
  localStorage.setItem("аddress1", "Няма")
  localStorage.setItem("gender1", "Няма")
  localStorage.setItem("pass1", "Няма")
  }
	
	if(localStorage.getItem("gender1") == null){
	  localStorage.setItem("gender1", "Не е избран")
	}
	
    if(test=="save password" )
{

}else {
    var al=confirm("МОЛЯ, Щракнете върху OK, ЗА ЗАПИСВАНЕ НА ПАРОЛА ИЛИ Щракнете върху ОТКАЗ, ЗА ДА НЕ ЗАПАЗИТЕ ПАРОЛА")

    if(al==true){
    var savepass=localStorage.setItem("abc","save password");
}else {

}

}

}
else {

}




// var sec=localStorage.getItem("code");

// if(sec=="secret"){

// }
// else {
//     
// }

// var bool=document.cookie; 
// // var getlocal=localStorage.getItem("email1");

//  if(bool){
// // alert("es k pass to null value h ");
// }else {
//     
// }


</script>
<div id="page-content">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Име</th>
	  <th scope="col">Е-мейл</th>
      <th scope="col">Години</th>
      <th scope="col">Адрес</th>
      <th scope="col">Парола</th>
	  <th scope="col">Пол</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><p id="name"><script>document.write(localStorage.getItem("name1"))</script></p></td>
      <td><script>document.write(localStorage.getItem("email1"))</script></td>
      <td><script>document.write(localStorage.getItem("age1"))</script></td>
      <td><script>document.write(localStorage.getItem("address1"))</script></td>
	  <td><script>document.write(localStorage.getItem("pass1"))</script></td>
	  <td><script>document.write(localStorage.getItem("gender1"))</script></td>
    </tr>
  </tbody>
</table>
<script>

// var abc= confirm("КЛИКНЕТЕ ОК ЗА ДА ИЛИ ОТКАЗ ЗА НЕ");

// if(abc==true){

//     var getitem1=localStorage.getItem("email1");
//     var getitem2=localStorage.getItem("pass1");

// document.cookie="emailc= "+getitem1+"; max-age="+60*60*24*2;
// document.cookie="passc= "+getitem2+"; max-age="+60*60*24*2;

    
// }
</script>

&nbsp;<button class="btn btn-dark" onclick="signOut()"> Изход </button> <a class="btn btn-dark" href="forgotPass.php"> Смени паролата </a> <a class="btn btn-dark" href="./setting.php"> Настройки </a>

<script>
function signOut() {
if(localStorage.getItem("google") == "false") {
  window.location.href="./logout.php"
}

if(localStorage.getItem("google") == "true") {
  window.location.href="./logout-google.php"
}
}
</script>

</body>
</html>