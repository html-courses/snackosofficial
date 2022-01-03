let parameters = {
    count : false,
    letters : false,
    numbers : false,
    special : false
}
let strengthBar = document.getElementById("strength-bar");
let msg = document.getElementById("msg");
let req1 = document.getElementById("req-1");
let req2 = document.getElementById("req-2");
let req3 = document.getElementById("req-3");
let req4 = document.getElementById("req-4");

function strengthChecker(){
    let password = document.getElementById("password").value;

    parameters.letters = (/[A-Za-z]+/.test(password))?true:false;
    parameters.numbers = (/[0-9]+/.test(password))?true:false;
    parameters.special = (/[!\"$%&/()=?@~`\\.\';:+=^*_-]+/.test(password))?true:false;
    parameters.count = (password.length > 7)?true:false;

    let barLength = Object.values(parameters).filter(value=>value);

    console.log(Object.values(parameters), barLength);

    strengthBar.innerHTML = "";
    for( let i in barLength){
        let span = document.createElement("span");
        span.classList.add("strength");
        strengthBar.appendChild(span);
    }

    let spanRef = document.getElementsByClassName("strength");
    for( let i = 0; i < spanRef.length; i++){
        switch(spanRef.length - 1){
            case 0 :
                spanRef[i].style.background = "#ff3e36";
                msg.textContent = "Your password is very weak";
                break;
            case 1:
                spanRef[i].style.background = "#ff691f";
                msg.textContent = "Your password is weak";
                break;
            case 2:
                spanRef[i].style.background = "#ffda36";
                msg.textContent = "Your password is good";
                break;
            case 3:
                spanRef[i].style.background = "#0be881";
                msg.textContent = "Your password is strong";
                break;
        }
    }
	
	if(parameters.letters == true) {
		req1.setAttribute("class", "fas fa-check");
	}else {
		req1.setAttribute("class", "");
	}
	
	if(parameters.count == true) {
		req2.setAttribute("class", "fas fa-check");
	}else {
		req2.setAttribute("class", "");
	}
	
	if(parameters.numbers == true) {
		req3.setAttribute("class", "fas fa-check");
	}else {
		req3.setAttribute("class", "");
	}
	
	if(parameters.special == true) {
		req4.setAttribute("class", "fas fa-check");
	}else {
		req4.setAttribute("class", "");
	}
	
	}
	
	function savePass() {
		localStorage.setItem("perfect-pass", password.value)
		alert("Парола се въвежда...");
    window.location.href = "../signup.php";
	}