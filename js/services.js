$(document).ready(function() {
    var aktuser = document.getElementById('info').innerText;
    if(aktuser!=""){
        document.getElementById("btnlogin").innerHTML="Logout";
    } else {
        document.getElementById("btnlogin").innerHTML="Login";
    }
    
});

function logaction(){
    var aktshow = document.getElementById('btnlogin').innerText;
    $.ajax({
        type: "POST",
        url: '../php/logout.php',
        dataType: "json",
        data: {akcio:"Logout"},
        success: function(data){
            if (data.code == "200"){
                alert("Sikeres logot");
                document.getElementById("btnlogin").innerHTML="Login";
                document.getElementById("info").innerHTML="";
            }else{
                alert("Nincs kiléptetve");
            };
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown)}

    })
}

function clc_fogad0() {

        var x = document.getElementById("btnfogad1");
    x.classList.toggle("myBtnFogadOFF");
}


function clc_fogad(melyik){
    var x1 = document.getElementById("btnfogad1");
    var x2 = document.getElementById("btnfogad2");
    var x3 = document.getElementById("btnfogad3");
    var x4 = document.getElementById("btnfogad4");

    switch (melyik) {
        case "btnfogad1":
            x1.classList.remove("myBtnFogadOFF");
            x2.classList.remove("myBtnFogadOFF");
            x3.classList.remove("myBtnFogadOFF");
            x4.classList.remove("myBtnFogadOFF");
            x1.classList.remove("myBtnFogadON");
            x2.classList.remove("myBtnFogadON");
            x3.classList.remove("myBtnFogadON");
            x4.classList.remove("myBtnFogadON");
            
            x1.classList.add("myBtnFogadON");
            x2.classList.add("myBtnFogadOFF");
            x3.classList.add("myBtnFogadOFF");
            x4.classList.add("myBtnFogadOFF");

            document.getElementById("inp_fog2").style.visibility="hidden";
            document.getElementById("inp_fog3").style.visibility="hidden";
            document.getElementById("inp_fog4").style.visibility="hidden";


            break;
    
        case "btnfogad2":
            x1.classList.remove("myBtnFogadOFF");
            x2.classList.remove("myBtnFogadOFF");
            x3.classList.remove("myBtnFogadOFF");
            x4.classList.remove("myBtnFogadOFF");
            x1.classList.remove("myBtnFogadON");
            x2.classList.remove("myBtnFogadON");
            x3.classList.remove("myBtnFogadON");
            x4.classList.remove("myBtnFogadON");

            x2.classList.add("myBtnFogadON");

            x1.classList.add("myBtnFogadOFF");
            x3.classList.add("myBtnFogadOFF");
            x4.classList.add("myBtnFogadOFF");

            document.getElementById("inp_fog2").style.visibility="visible";
            document.getElementById("inp_fog3").style.visibility="hidden";
            document.getElementById("inp_fog4").style.visibility="hidden";

            
            break;
        case "btnfogad3":
            x1.classList.remove("myBtnFogadOFF");
            x2.classList.remove("myBtnFogadOFF");
            x3.classList.remove("myBtnFogadOFF");
            x4.classList.remove("myBtnFogadOFF");
            x1.classList.remove("myBtnFogadON");
            x2.classList.remove("myBtnFogadON");
            x3.classList.remove("myBtnFogadON");
            x4.classList.remove("myBtnFogadON");

            x3.classList.add("myBtnFogadON");

            x1.classList.add("myBtnFogadOFF");
            x2.classList.add("myBtnFogadOFF");
            x4.classList.add("myBtnFogadOFF");

            document.getElementById("inp_fog2").style.visibility="hidden";
            document.getElementById("inp_fog3").style.visibility="visible";
            document.getElementById("inp_fog4").style.visibility="hidden";

            break;
        case "btnfogad4":
            x1.classList.remove("myBtnFogadOFF");
            x2.classList.remove("myBtnFogadOFF");
            x3.classList.remove("myBtnFogadOFF");
            x4.classList.remove("myBtnFogadOFF");
            x1.classList.remove("myBtnFogadON");
            x2.classList.remove("myBtnFogadON");
            x3.classList.remove("myBtnFogadON");
            x4.classList.remove("myBtnFogadON");

            x4.classList.add("myBtnFogadON");

            x1.classList.add("myBtnFogadOFF");
            x2.classList.add("myBtnFogadOFF");
            x3.classList.add("myBtnFogadOFF");
            
            document.getElementById("inp_fog2").style.visibility="hidden";
            document.getElementById("inp_fog3").style.visibility="hidden";
            document.getElementById("inp_fog4").style.visibility="visible";

            break;
    }


}

function sub_login() {
    alert("LOGIN GOMB");
}

function sub_fogadas(){
    alert("FOGADAS GOMB");
}

function sub_jatek(){
    alert("JATÉK GOMB");
}
