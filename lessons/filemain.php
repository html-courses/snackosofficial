<!DOCTYPE html>
<html lang="en">
<head>
<title> Bootstrap </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" ></script>
</head>

<style>
#launch {
  color: black; 
  text-decoration: none;
}

.tooltip-test {
	color: black;
	text-decoration: none;
}
</style>

<body>
	
	<nav class="navbar navbar-light bg-light">
	  <div class="container-fluid">
		<a class="navbar-brand" href="#">
		      <img id="preview" src="" alt="" width="49px" style="border-radius: 60%;"><button type="button" class="btn btn-link" id="launch" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Навигационна лента
</button></a>
	  </div>
	</nav>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Навигационна лента</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
  <p><a href="../main.php" class="tooltip-test" title="Tooltip">Главна страница</a> <br> <a href="../userinfo.php" class="tooltip-test" title="Tooltip">Акаунт</a> <br> <a href="./lessons.php" class="tooltip-test" title="Tooltip">Уроци</a> <br> <a href="../dowlnload.php" class="tooltip-test" title="Tooltip">Изтегли</a></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Затвори</button>
		<button type="button" class="btn btn-dark" data-bs-dismiss="modal" onclick="logout()">Изход от акаунт</button>
      </div>
    </div>
  </div>
</div>


</body>
</html>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    const recentImageDataUrl = localStorage.getItem("img");
    if (recentImageDataUrl) {
      document.querySelector("#preview").setAttribute("src", recentImageDataUrl);
    }
	
	if (recentImageDataUrl == null) {
		document.querySelector("#preview").setAttribute("src", "https://thebenclark.files.wordpress.com/2014/03/facebook-default-no-profile-pic.jpg");
	}
  });
  
function logout() {
if(localStorage.getItem("google") == "false") {
  window.location.href="../logout.php"
}

if(localStorage.getItem("google") == "true") {
  window.location.href="../logout-google.php"
}
}
</script>

