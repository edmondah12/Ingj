function printError(elemdId, hintMsg) {
    document.getElementById(elemdId).innerHTML = hintMsg;
}

function validateForm() {
    var emri = document.AboutUs.emri.value;
    var mbiemri = document.AboutUs.mbiemri.value;
    var email = document.AboutUs.email.value;
    var Arsyeja = document.AboutUs.Arsyeja.value;



    var EmriErr = MbiemriErr = emailErr = true;

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
    if (Arsyeja == "") {
        printError("arsyejaErr", "Arsyeja eshte e zbrazet!");
    } else {
        printError("arsyejaErr", "");
        arsyejaErr = false;
    }



    if ((EmriErr || MbiemriErr || emailErr || arsyejaErr) == true) {
        return false;
    } else {
        var dataPreview = "Ju keni kontaktur me Sukses!-Do te ju pergjigjemi sa me shpejt qe eshte e mundur!";
        alert(dataPreview);
    }
};