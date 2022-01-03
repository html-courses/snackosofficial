<?php
include("../header.php");
?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>HTML DOM - Copy highlighted code to the clipboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Inter&family=Source+Code+Pro&display=swap"
        />
		<link href="../lessons/frame.css" rel="stylesheet">
    </head>
	    <body>
	<div class="sidebar">
  <a href="../lessons/how_to_frame.php">Начало</a>
  <a href="./install.php">Инсталация</a>
  <a href="./buttons.php">Бутони</a>
  <a href="./backgrounds.php">Фонове</a>
  <a href="./column.php">Колони</a>
  <a href="./colors.php">Цветове на текст</a> 
  <a href="../main.php">Snack OS</a>
</div>
<div class="content">
<p>Как да използваме този линк:</p>
<ol>
<li>Цъкате бутона "Копирай". Така този таг ще бъде копиран във вашия клипборд.</li>
<li>Поставяте го във вашия html код във <code>&lt;head&gt;</code> тага.</li>
<li>След това сте готови вече може да използвате snack.css!
</li>
</ol>
        <div style="align-items: center; display: flex; flex-direction: column; justify-content: center; padding: 1rem;">
            <div style="margin-bottom: 1rem; width: 100%;background-color: #E7E7E7">
                <pre
                    id="sampleCode"
                    class="language-js"
                ><code class="language-js"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">link</span> <span class="na">href</span><span class="o">=</span><span class="s">"https://cdn.jsdelivr.net/gh/html-courses/snackcss@main/css/snackframe.min.css"</span> <span class="na">rel</span><span class="o">=</span><span class="s">"stylesheet"</span> <span class="na">crossorigin</span><span class="o">=</span><span class="s">"anonymous"</span><span class="p">&gt;</span>
</code>
				</div>
            <button
                id="copyButton"
                type="button"
                class="btn btn-dark"
            >
                Копирай
            </button>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Query the elements
                const copyButton = document.getElementById('copyButton');
                const codeEle = document.getElementById('sampleCode');

                copyButton.addEventListener('click', function () {
                    const selection = window.getSelection();

                    // Save the current selection
                    const currentRange = selection.rangeCount === 0 ? null : selection.getRangeAt(0);

                    // Select the text content of code element
                    const range = document.createRange();
                    range.selectNodeContents(codeEle);
                    selection.removeAllRanges();
                    selection.addRange(range);

                    // Copy to the clipboard
                    try {
                        document.execCommand('copy');
                        copyButton.innerHTML = 'Копирано!';
                    } catch (err) {
                        // Unable to copy
                        copyButton.innerHTML = 'Копирай';
                    } finally {
                        // Restore the previous selection
                        selection.removeAllRanges();
                        currentRange && selection.addRange(currentRange);
                    }
                });
            });
        </script>
		</div>
    </body>
</html>