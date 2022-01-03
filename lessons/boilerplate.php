<?php
include("./header.php");
include("./filemain.php");
?>

<html>
<head>
  <title>Lesson 1</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<div id="Page1">
<div class="w3-panel w3-card w3-light-grey"> 
  <h4>Това е първият код, който трябва да съдържа всеки ваш уебсайт!</h4>
  <div class="w3-code htmlHigh notranslate">
    &lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>
	&lt;head&gt;<br>
    &lt;title&gt;HTML Tutorial&lt;/title&gt;<br>
	&lt;/head&gt;<br>
    &lt;body&gt;<br><br>
    &lt;h1&gt;This is a heading&lt;/h1&gt;<br>
    &lt;p&gt;This is a paragraph.&lt;/p&gt;<br><br>
    &lt;/body&gt;<br>
    &lt;/html&gt;
  </div>
    <p><a class="w3-button w3-blue" onclick="return show('Page2','Page1');">Пробвайте сега!</a></p>
</div>
<h1>
Инструкции за ползване:
</h1>
<p>Първо отваряте вашия Code Editor или можете да ползвате вградения в това прилложение!</p><br>
<p>След това копирате кода по-горе и го поставяте във вашия файл, който <b>ЗАДЪЛЖИТЕЛНО</b> трябва да завършва с <b>.html</b></p><br>
<p>Накрая по желание може да промените тага <b>title</b> с вашето собствено!</p><br>
<p>И така вече сте готови вие създадохте вашия първи уебсайт!</p>

<h1>Изтегли кода:</h1>
<p><a href="http://localhost/snackos/snackosapp/web/www/lesson_dowlnloads/index.html" class="w3-button w3-blue" onclick="change_text()" id="install" download>Изтегли кода</a></p>
<script src="https://www.w3schools.com/lib/w3codecolor.js"></script>

<script>
w3CodeColor();
</script>

<script>
function change_text(){
 document.getElementById("install").innerHTML = "Изтегля се...";
}
</script>

</div>
 <script>
 function show(shown, hidden) {
  document.getElementById(shown).style.display='block';
  document.getElementById(hidden).style.display='none';
  return false;
}

var intervalID = window.setInterval(myCallback, 10000);

function myCallback() {
	document.getElementById("install").innerHTML = "Изтегли кода";
}

 </script>
 <div id="Page2" style="display:none">
 <style>
 * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

#code {
    min-height: 600px;
}

#output {
    min-height: 600px;
    background: #eee;
    padding: 3px;
}
 </style>
  <div class="container">
        <h1 class="title text-center">HTML Editor Online</h1>
        <div class="row">
            <div class="col-lg-6 col-12">
                <h3 class="text-center">Code</h3>
                <button class="btn btn-outline-primary mb-3" id="btn">Активирай</button>
				<a class="btn btn-outline-primary mb-3" href="./boilerplate.php">Върни се</a>
                <div id="code"></div>
            </div>
            <div class="col-lg-6 col-12 output">
                <h3 class="text-center">Output</h3>
                <div id="output"></div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.12/ace.js"></script>
    <script src="./boilerplate.js"></script>
 </div>
</body>
</html>