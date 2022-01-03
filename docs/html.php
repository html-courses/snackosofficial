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

<div id="toc_container" class="no_bullets"><p class="toc_title">Съдържание <span class="toc_toggle">[<button id="toggle">скрий</button>]</span></p><ul class="toc_list" id="hided"><li><a href="#html_beginners"><span class="toc_number toc_depth_1">1</span> HTML за абсолютно начинаещи</a><ul><li><a href="#what_is_html"><span class="toc_number toc_depth_2">1.1</span> Какво е HTML?</a></li><li><a href="#html-history"><span class="toc_number toc_depth_2">1.2</span> Историята на HTML</a></li><li><a href="#tags-attributes"><span class="toc_number toc_depth_2">1.3</span> Какво представляват етикетите и атрибутите?</a></li><li><a href="#html-editors"><span class="toc_number toc_depth_2">1.4</span> HTML Editors</a></li><li><a href="#first-html-page"><span class="toc_number toc_depth_2">1.5</span> Създаване на първата ви HTML уеб страница</a></li><li><a href="#close"><span class="toc_number toc_depth_2">1.6</span> Как да затворите HTML документ</a></li></ul></li><li><a href="../lessons.php"><span class="toc_number toc_depth_1">2</span> Подобрете своите HTML умения</a></li></ul></div>

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

<div id="html_beginners">
<h1>HTML за абсолютно начинаещи</h1><br>
<p>
Докато много ръководства в интернет се опитват да преподават HTML, използвайки много умопомрачителна теория, този урок вместо това ще се съсредоточи върху това да ви даде практическите умения за изграждане на вашия първи сайт.
<br><br>
Целта е да ви покаже „как“ да създадете първата си уеб страница, без да харчите целия урок, фокусиращ се твърде много върху „защо“.
<br><br>
До края на този урок вие ще имате ноу-хау за създаване на основен уебсайт и се надяваме, че това ще ви вдъхнови да навлезете по-нататък в света на HTML, като използвате нашите последващи ръководства.
</p>
</div>
<br>
<div id="what_is_html">
	<h1>Какво е HTML?</h1><br>
	<p>
Добре, значи това е единствената задължителна теория. За да започнете да пишете HTML, помага, ако знаете какво пишете.
<br><br>
HTML е езикът, на който са написани повечето уебсайтове. HTML се използва за създаване на страници и да ги направи функционални.
<br><br>
Кодът, използван, за да ги направи визуално привлекателни, е известен като CSS и ние ще се съсредоточим върху това в следващ урок. Засега ще се съсредоточим върху това да ви научим как да изграждате, а не да проектирате.
	</p>
</div>
<br>
<div id="html-history">
	<h1>Историята на HTML</h1><br>
	<p>
		HTML е създаден за първи път от Тим ​​Бърнърс-Лий, Робърт Кайо и други, започвайки през 1989 г. Той е съкращение от Hyper Text Markup Language.
<br><br>
Хипертекст означава, че документът съдържа връзки, които позволяват на читателя да прескача до други места в документа или до друг документ като цяло. Последната версия е известна като HTML5.
<br><br>
Езикът за маркиране е начин, по който компютрите говорят един с друг, за да контролират как текстът се обработва и представя. За да направи това, HTML използва две неща: тагове и атрибути.
	</p>
</div>
<br>
<div id="tags-attributes">
	<h1>Какво представляват етикетите и атрибутите?</h1><br>
	<p>	
Таговете и атрибутите са в основата на HTML.
<br><br>
Те работят заедно, но изпълняват различни функции – струва си да отделите 2 минути, за да ги разграничите.
	</p>
</div><br>

<div>
<h1>Какво са HTML тагове?</h1><br>
<p>
	Таговете се използват за маркиране на началото на HTML елемент и обикновено са затворени в ъглови скоби. Пример за таг е: <code>&lt;h1&gt;</code>.
<br><br>
Повечето тагове трябва да бъдат отворени <code>&lt;h1&gt;</code> и затворени <code>&lt;/h1&gt;</code>, за да функционират.
</p>
</div><br>

<div>
<h1>Како са HTML атрибути?</h1>
<p>
	Атрибутите съдържат допълнителна информация. Атрибутите са под формата на отварящ маркер и допълнителна информация се поставя вътре.
<br>
<br>
Пример за атрибут е:<br>

<code>&lt;img src="mydog.jpg" alt="Снимка на моето куче"&gt;</code>
</p>

<p>
В този случай източникът на изображението (src) и алтернативният текст (alt) са атрибути на <code>&lt;img&gt;</code> тага.
</p>

</div><br>

<div id="html-editors">
<h1>
	HTML редактори
</h1>
<p>Тук ще ви представим най-добрите HTML редактори:</p>
<br>
<ul>
<li><p><i class="fas fa-code"></i>&nbsp;<a href="https://www.sublimetext.com/3">Sublime Text 3</a></p></li>
<li><p><i class="fas fa-file"></i>&nbsp;<a href="https://code.visualstudio.com/download">Visual Studio Code</a></p></li>
<li><p><i class="far fa-sticky-note"></i>&nbsp;<a href="https://notepad-plus-plus.org/downloads/">Notepad++</a></p></li>
<li><p><i class="fas fa-file-code"></i>&nbsp;<a href="../codeeditor.php">Snack OS Code Editor</a></p></li>
</ul>
</div><br>

<div id="first-html-page">
	<h1>Създаване на първата ви HTML уеб страница</h1>
	<p>
		Първо, трябва да отворите своя HTML редактор, където ще намерите чиста бяла страница, на която да напишете своя код.
		<br><br>
От там трябва да оформите страницата си със следните тагове:
<pre class="wp-block-code"><code>&lt;html&gt;
&lt;head&gt;
&lt;title&gt;My First Webpage&lt;/title&gt;
&lt;<a href="/tags/meta/">meta</a> charset="UTF-8"&gt;
&lt;meta name="author" content="Conor Sheils"&gt;
&lt;/head&gt;
&lt;body&gt;

&lt;/body&gt;
&lt;/html&gt;
</code></pre>
	</p>
</div>

<div id="close">
	<h1>Как да затворите HTML документ</h1>
	<p>		
Стигнахте до края на нашия HTML урок за абсолютно начинаещи.
<br><br>
Последната стъпка, която трябва да завършим, е да затворим етикетите <code>&lt;body&gt;</code> и <code>&lt;html&gt;</code> в края на всяка страница, използвайки следния HTML код:
<br>
<br>
<pre class="wp-block-code"><code>&lt;/body&gt;
&lt;/html&gt;</code></pre>
	</p>
</div>
</body>
</html>