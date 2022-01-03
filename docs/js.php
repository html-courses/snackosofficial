<html>
<head>
 <title>Snack OS</title>

<link rel="stylesheet" href="./progress-bar.css" />
<script defer src="./position-tracker.min.js" type="module"></script>  
<script defer src="./index.js" type="module"></script>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
<br>
<a id="btttn" class="btn btn-dark" href="./index.php">Връщане назад</a>
<br>
<br>

<div id="toc_container" class="no_bullets"><p class="toc_title">Съдържание <span class="toc_toggle">[<button id="toggle">скрий</button>]</span></p><ul class="toc_list" id="hided"><li><a href="#js_beginners"><span class="toc_number toc_depth_1">1</span> JavaScript за абсолютно начинаещи</a><ul><li><a href="#what_is_js"><span class="toc_number toc_depth_2">1.1</span> Какво е JavaScript?</a></li><li><a href="#js-history"><span class="toc_number toc_depth_2">1.2</span> Историята на JavaScript</a></li><li><a href="#js-with-html"><span class="toc_number toc_depth_2">1.3</span> Как да го използваме съвместно с HTML?</a></li><li><a href="#js-editors"><span class="toc_number toc_depth_2">1.4</span> JavaScript Editors</a></li><li><a href="#first-js-page"><span class="toc_number toc_depth_2">1.5</span> Създаване на първата ви JavaScript уеб страница</a></li></ul></li><li><a href="../lessons.php"><span class="toc_number toc_depth_1">2</span> Подобрете своите JavaScript умения</a></li></ul></div>

<style type="text/css">
    body {
    	font-family: sans-serif;
    }

    a {
    	color: black;
    	text-decoration: none;
    }

    #toggle{
    	background-color: white;
    	border: none;
    }

	#toc_container {
    background: #f9f9f9;
    border: 1px solid #aaa;
    padding: 10px;
    margin-bottom: 1em;
    width: auto;
    display: table;
    font-size: 95%;
}

.wp-block-code {
	background-color: #F5F5F5;
	color: black;
	font-size: 26px;
	border-radius: 8px;
	border: 1px solid black;
}

#btttn {
text-decoration: none;
}

#btttn:hover {
text-decoration: underline;
}
</style>
<script type="text/javascript">
const targetDiv = document.getElementById("hided");
const btn = document.getElementById("toggle");
btn.onclick = function () {
  document.getElementById("toggle").innerHTML = "покажи";	

  if (targetDiv.style.display !== "none") {
    targetDiv.style.display = "none";
  } else {
    targetDiv.style.display = "block";
    document.getElementById("toggle").innerHTML = "скрий";
  }
};
</script>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div id="js_beginners">
<h1>JavaScript за абсолютно начинаещи</h1><br>
<p>
JavaScript е език за скриптове или програмиране, който ви позволява да внедрявате сложни функции на уеб страници — всеки път, когато уеб страница прави нещо повече от просто да седи там и да показва статична информация, която да гледате — показва навременни актуализации на съдържанието, интерактивни карти, анимирани 2D/ 3D графики, превъртащи видео джубоксове и т.н. — можете да се обзаложите, че вероятно е замесен JavaScript. Това е третият слой от слоевете на стандартните уеб технологии, два от които (<a href="./html.php">HTML</a> и <a href="./css.php">CSS</a>) вече сме разгледали.
</p>
</div>
<br>
<div id="what_is_js">
	<h1>Какво е JavaScript?</h1><br>
	<p>
JavaScript е скриптов език, който ви позволява да създавате динамично актуализирано съдържание, да управлявате мултимедия, да анимирате изображения и почти всичко останало. (Добре, не всичко, но е невероятно какво можете да постигнете с няколко реда JavaScript код.)
	</p>
</div>
<br>
<div id="js-history">
	<h1>Историята на JavaScript</h1><br>
	<p>
		JavaScript е изобретен от Брендън Айх през 1995 г. Разработен е за Netscape 2 и става стандарт ECMA-262 през 1997 г. След като Netscape предаде JavaScript на ECMA, фондацията Mozilla продължи да разработва JavaScript за браузъра Firefox. Последната версия на Mozilla беше 1.8.
	</p>
</div>
<br>
<div id="js-with-html">
	<h1>Какво представляват етикетите и атрибутите?</h1><br>
	<p>	
HTML маркерът <code>&lt;script&gt;</code> се използва за дефиниране на скрипт от страна на клиента (JavaScript).
<br><br>
Елементът <code>&lt;script&gt;</code> или съдържа скриптови оператори, или сочи към външен скриптов файл чрез атрибута src.
<br><br>
Често срещаните употреби на JavaScript са манипулиране на изображения, валидиране на формуляри и динамични промени на съдържанието.
<br><br>
За да изберете HTML елемент, JavaScript най-често използва метода document.getElementById().
<br><br>
Този пример за JavaScript пише "Здравей, JavaScript!" в HTML елемент с id="demo":
	</p>
</div><br>

<div id="js-editors">
<h1>
	JavaScript редактори
</h1>
<p>Тук ще ви представим най-добрите JavaScript редактори:</p>
<br>
<ul>
<li><p><i class="fas fa-code"></i>&nbsp;<a href="https://www.sublimetext.com/3">Sublime Text 3</a></p></li>
<li><p><i class="fas fa-file"></i>&nbsp;<a href="https://code.visualstudio.com/download">Visual Studio Code</a></p></li>
<li><p><i class="far fa-sticky-note"></i>&nbsp;<a href="https://notepad-plus-plus.org/downloads/">Notepad++</a></p></li>
<li><p><i class="fas fa-file-code"></i>&nbsp;<a href="../codeeditor.php">Snack OS Code Editor</a></p></li>
</ul>
</div><br>

<div id="first-html-page">
	<h1>Създаване на първата ви JavaScript уеб страница</h1>
	<h3>Името на файла е <code>index.html</code></h3>
	<p>
	  <pre class="wp-block-code"><code>&lt;!DOCTYPE html>&gt;
&lt;html&gt;
&lt;body&gt;

&lt;h1>My First JavaScript&lt;/h1&gt;

&lt;p&gt;JavaScript can change the content of an HTML element:&lt;/p&gt;

&lt;button type="button" onclick="myFunction()"&gt;Click Me!&lt;/button&gt;

&lt;p id="demo"&gt;This is a demonstration.&lt;/p&gt;

&lt;script&gt;
function myFunction() { 
  document.getElementById("demo").innerHTML = "Hello JavaScript!";
}
&lt;/script&gt;

&lt;/body&gt;
&lt;/html&gt;
	  	
	  </code></pre>
	</p>
</div>
</body>
</html>