$(document).ready(function () {
    var e = ace.edit("code");
    e.getSession().setMode("ace/mode/html");
    e.setTheme("ace/theme/xcode");
    e.setValue(`<!DOCTYPE html>
<html>
<head>
<title>HTML Tutorial</title>
</head>
<body>

<h1>This is a heading</h1>
<p>This is a paragraph.</p>

</body>
</html>`);

    $("#btn").on("click", function () {
        $("#output").html(e.getValue());
    });
});