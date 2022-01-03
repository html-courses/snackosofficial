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

<div id="toc_container" class="no_bullets"><p class="toc_title">Съдържание <span class="toc_toggle">[<button id="toggle">скрий</button>]</span></p><ul class="toc_list" id="hided"><li><a href="#what_is_css"><span class="toc_number toc_depth_1">1</span> CSS за абсолютно начинаещи</a><ul><li><a href="#what_is_css"><span class="toc_number toc_depth_2">1.1</span> Какво е CSS?</a></li><li><a href="#css-history"><span class="toc_number toc_depth_2">1.2</span> Историята на CSS</a></li><li><a href="#adding-to-html"><span class="toc_number toc_depth_2">1.3</span> Как да го добавим към HTML?</a></li><li><a href="#css-editors"><span class="toc_number toc_depth_2">1.4</span> CSS Editors</a></li><li><a href="#first-css-page"><span class="toc_number toc_depth_2">1.5</span> Създаване на първата ви CSS уеб страница</a></li><li><a href="#close"><span class="toc_number toc_depth_2">1.6</span> Как да затворите CSS таг</a></li></ul></li><li><a href="../lessons.php"><span class="toc_number toc_depth_1">2</span> Подобрете своите CSS умения</a></li></ul></div>

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

<br>
<div id="what_is_css">
    <h1>Какво е CSS?</h1><br>
    <p>
CSS е съкращение от Cascading Style Sheets, където HTML дефинира структурата на уеб страницата, а CSS ни помага да променим външния вид на HTML. HTML без CSS е грозен, следователно HTML и CSS вървят ръка за ръка. Версията на CSS, която ще използваме тук, е известна като CSS3 (като HTML5). Освен структурата и външния вид, ако искате да добавите функционалност към уеб страницата, тогава се нуждаем от нещо, известно като Javascript, което ще бъде тема за друг блог, така че сега без да се замисляме, нека се потопим в CSS3.
    </p>
</div>
<br>
<div id="css-history">
    <h1>Историята на CSS</h1><br>
    <p>
        CSS е предложен за първи път от Håkon Wium Lie на 10 октомври 1994 г. По това време Lie работи с Тим Бърнърс-Лий в CERN. Няколко други езика за стилови листове за мрежата бяха предложени приблизително по същото време и дискусии за публични списъци с пощенски съобщения и вътре в World Wide Web Consortium доведе до публикуването на първата препоръка на W3C CSS (CSS1) през 1996 г. По-специално, предложението на Берт Бос беше влиятелно; той става съавтор на CSS1 и се счита за съ-създател на CSS.
<br>
<br>
Стиловите таблици съществуват в една или друга форма от началото на стандартния генерализиран език за маркиране (SGML) през 80-те години на миналия век, а CSS е разработен за предоставяне на стилови таблици за мрежата. Едно изискване за език за уеб стилови листове беше стиловите таблици да идват от различни източници в мрежата. Следователно съществуващите езици за стилови листове като DSSSL и FOSI не бяха подходящи. CSS, от друга страна, позволява стилът на документа да бъде повлиян от множество стилови таблици чрез „каскадни“ стилове.
    </p>
</div>
<br>
<div id="adding-to-html">
    <h1>Как да го добавим към HTML?</h1><br>
    <p> 
Има три начина за вмъкване на стилова таблица:
<br>
<br>
<ul>
<li>Външен CSS</li>
<li>Вътрешен CSS</li>
<li>Вграден CSS</li>
</ul>
<br>
<h2>Външен</h2>
<br>
<h3>Името на файла е index.html</h3>
<pre class="wp-block-code"><code>&lt;html&gt;
&lt;head&gt;
&lt;title&gt;My First Webpage&lt;/title&gt;
&lt;link rel="stylesheet" href="./style.css"&gt;
&lt;/head&gt;
&lt;body&gt;

&lt;h1&gt;Текст&lt;/h1&gt;

&lt;/body&gt;
&lt;/html&gt;
</code></pre>

<h3>Името на файла е style.css</h3>
<pre class="wp-block-code"><code>body {
background-color: black;
color: white;
}

h1 {
margin-left: 20px;
}
</code></pre>

<br>
<h2>Вграден</h2>
<br>
<h3>Името на файла е index.html</h3>
<pre class="wp-block-code"><code>&lt;html&gt;
&lt;head&gt;
&lt;title&gt;My First Webpage&lt;/title&gt;
&lt;/head&gt;
&lt;body style="background-color: black;"&gt;
&lt;h1 style="color: white; margin-left: 20px;"&gt;Текст&lt;/h1&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>

<h2>Вътрешен</h2>
<br>
<h3>Името на файла е index.html</h3>
<pre class="wp-block-code"><code>&lt;html&gt;
&lt;head&gt;
&lt;title&gt;My First Webpage&lt;/title&gt;
&lt;/head&gt;

&lt;style&gt;
body {
background-color: black;
color: white;
}

h1 {
margin-left: 20px;
}
&lt;/style&gt;

&lt;body&gt;
&lt;h1"&gt;Текст&lt;/h1&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>

</p>
</div><br>

<div id="css-editors">
<h1>
    CSS редактори
</h1>
<p>Тук ще ви представим най-добрите CSS редактори:</p>
<br>
<ul>
<li><p><i class="fas fa-code"></i>&nbsp;<a href="https://www.sublimetext.com/3">Sublime Text 3</a></p></li>
<li><p><i class="fas fa-file"></i>&nbsp;<a href="https://code.visualstudio.com/download">Visual Studio Code</a></p></li>
<li><p><i class="far fa-sticky-note"></i>&nbsp;<a href="https://notepad-plus-plus.org/downloads/">Notepad++</a></p></li>
<li><p><i class="fas fa-file-code"></i>&nbsp;<a href="../codeeditor.php">Snack OS Code Editor</a></p></li>
</ul>
</div><br>

<div id="first-css-page">
    <h1>Създаване на първата ви CSS уеб страница</h1>
    <p>
        Първо, трябва да отворите своя CSS редактор, където ще намерите чиста бяла страница, на която да напишете своя код.
        <br><br>
От там трябва да оформите страницата си със следните тагове:
<pre class="wp-block-code"><code>&lt;html&gt;
&lt;head&gt;
&lt;title&gt;My First Webpage&lt;/title&gt;
&lt;/head&gt;

&lt;style&gt;
body {
background-color: black;
color: white;
}

h1 {
margin-left: 20px;
}
&lt;/style&gt;

&lt;body&gt;
&lt;h1"&gt;Текст&lt;/h1&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
    </p>
</div>

<div id="close">
    <h1>Как да затворите CSS документ</h1>
    <p>     
Стигнахте до края на нашия CSS урок за абсолютно начинаещи.
<br><br>
Последната стъпка, която трябва да завършим, е да затворите таговете, които се отвярят със <code>{</code> в края на всяка страница, използвайки следния CSS код:
<br>
<br>
<pre class="wp-block-code"><code>body{
// твоя css код тук
}
.class{
// твоя css код тук
}/code></pre>
    </p>
</div>

</body>
</html>