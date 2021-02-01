function printError(elemdId, hintMsg) {
    document.getElementById(elemdId).innerHTML = hintMsg;
}

function validateforms() {
    var name = document.Login.name.value;
    var password = document.Login.password.value;

    var nameErr = passwordErr = true;

    if (name == "") {
        printError("nameErr", "Ju Lutem Shtoni Username Valide!");
    } else {
        var regex = /^[a-zA-Z\s]+[0-9]+$/;
        if (regex.test(name) === false) {
            printError("nameErr", "Ju Lutem Shtoni Username Valide!");
        } else {
            printError("nameErr", "");
            nameErr = false;
        }
    }
    if (password == "") {
        printError("passwordErr", "Ju Lutem Shtoni Passwordin Valide!");
    } else {
        var regex = /^[a-zA-Z\s]+[0-9]+$/;
        if (regex.test(password) === false) {
            printError("passwordErr", "Ju Lutem Shtoni Passwordin Valide!");
        } else {
            printError("passwordErr", "");
            passwordErr = false;
        }
    }

    if ((nameErr || passwordErr) == true) {
        return false;
    } else {
        var dataPreview = "Ju jeni kyqyr me Sukses!";
        alert(dataPreview);
    }
};


var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}