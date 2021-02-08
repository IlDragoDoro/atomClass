
            function separado(){
                var supermail = document.getElementById("superEmail").value;
                var separated = supermail.split("@");
                document.getElementById("emailDiv").innerHTML = "L'usuari és: " + separated[0] + "<br> El domini és: " + separated[1];
            }
