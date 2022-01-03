<?php
 include("./header.php");
include("./filemain.php");
?>

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<style type="text/css">
br { display: none; }
 textarea{display: block;margin: 10px 0; width:100%; border: 1px solid #333;}
 
 iframe{display: block;margin: 10px 0; width:100%; resize:both; overflow: auto; border: 1px solid #333;}
</style>
<script type="text/javascript">
 function updateIframe(){
 var myFrame = $("#myframe").contents().find('body');
 var textareaValue = $("textarea").val();
 myFrame.html(textareaValue);
 }
</script>
<h1><marquee><font face="Calibri" color="#FF0000">Виж твоя HTML код!</font></marquee></h1>
<a class="btn btn-dark" href="./lessons.php">Върни се обратно</a>

<textarea rows="5" cols="50" placeholder="Можеш да пишеш код тук..."></textarea>

<button style="border:1" type="button" onclick="updateIframe()"><i class="fa fa-pencil-square-o"></i>Run The Code</button>

<iframe id="myframe"></iframe>

<div>