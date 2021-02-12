function printError(elemdId, hintMsg) {
    document.getElementById(elemdId).innerHTML = hintMsg;
}

function validateForm() {
    var emri = document.Signup.emri.value;
    var mbiemri = document.Signup.mbiemri.value;
    var username = document.Signup.username.value;
    var email = document.Signup.email.value;
    var password = document.Signup.password.value;
    var KonfPassword = document.Signup.KonfPassword.value;


    var EmriErr = MbiemriErr = usernameErr = emailErr = passwordErr = KpasswordErr = true;

    if (emri == "") {
        printError("EmriErr", "Emri eshte i zbrazet!");
    } else {
        var regex = /^[a-zA-Z\s]+$/;
        if (regex.test(emri) === false) {
            printError("EmriErr", "Emri duhet te permbaj vetem shkronja!");

        } else {
            printError("EmriErr", "");
            EmriErr = false;
        }
    }
    if (mbiemri == "") {
        printError("MbiemriErr", "Mbiemri eshte i zbrazet!");
    } else {
        var regex = /^[a-zA-Z\s]+$/;
        if (regex.test(mbiemri) === false) {
            printError("MbiemriErr", "Mbiemri duhet te permbaj vetem shkronja!");

        } else {
            printError("MbiemriErr", "");
            MbiemriErr = false;
        }
    }
    if (username == "") {
        printError("usernameErr", "Username eshte i zbrazet!");
    } else {
        var regex = /^[a-zA-Z\s]+[0-9]+$/;
        if (regex.test(username) === false) {
            printError("usernameErr", "Username duhet te permbaj vetem shkronja dhe numra!");

        } else {
            printError("usernameErr", "");
            usernameErr = false;
        }
    }
    if (email == "") {
        printError("emailErr", "Email eshte i zbrazet!");
    } else {
        var regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/
        if (regex.test(email) === false) {
            printError("emailErr", "Email nuk eshte valid!");

        } else {
            printError("emailErr", "");
            emailErr = false;
        }
    }
    if (password == "") {
        printError("passwordErr", "password eshte i zbrazet!");
    } else {
        var regex = /^[a-zA-Z\s]+[0-9]+$/;
        if (regex.test(password) === false) {
            printError("passwordErr", "Password duhet te permbaj vetem shkronja dhe numra!");

        } else {
            printError("passwordErr", "");
            passwordErr = false;
        }
    }
    if (KonfPassword == "") {
        printError("KpasswordErr", "Password eshte i zbrazet!");
    } else {
        var regex = /^[a-zA-Z\s]+[0-9]+$/;
        if (regex.test(KonfPassword) === false) {
            printError("KpasswordErr", "Password duhet te permbaj vetem shkronja dhe numra!");
        } else {
            printError("KpasswordErr", "");
            KpasswordErr = false;
        }
    }

    if ((EmriErr || MbiemriErr || usernameErr || emailErr || passwordErr || KpasswordErr) == true) {
        return false;
    } else {
        var dataPreview = "Ju jeni Regjistruar me Sukses!";
        alert(dataPreview);
    }
};