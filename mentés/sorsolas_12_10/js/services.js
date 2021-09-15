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

function sub_login() {
    alert("LOGIN GOMB");
}

function sub_fogadas(){
    alert("FOGADAS GOMB");
}

function sub_jatek(){
    alert("JATÉK GOMB");
}

//$('#myModal').modal('show');
// www.jquery2dotnet.com