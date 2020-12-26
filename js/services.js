$(document).ready(function() {
    var aktuser = document.getElementById('info').innerText;
    if(aktuser!=""){
        document.getElementById("btnlogin").innerHTML="Logout";
    } else {
        document.getElementById("btnlogin").innerHTML="Login";
    }
    
    var interval = setInterval(timestamphome, 1000);

    var d = new Date();
    var weekday = new Array(7);
    weekday[0] = "Sunday";
    weekday[1] = "Monday";
    weekday[2] = "Tuesday";
    weekday[3] = "Wednesday";
    weekday[4] = "Thursday";
    weekday[5] = "Friday";
    weekday[6] = "Saturday";
    
    var n = weekday[d.getDay()];
   
});



function timestamphome(){
    var date;
    date = new Date();
    "<?php $m_buksza = 'Lonyal' ?>";
    var time = document.getElementById('timediv'); 
    var m_credit = document.getElementById('credit');
    time.innerHTML = date.toLocaleTimeString();
    m_credit.innerHTML="<?php $m_buksza ?>";
}
   
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

            document.getElementById("inp_fog1").style.visibility="visible";
            document.getElementById("inp_fog2").style.visibility="hidden";
            document.getElementById("inp_fog2").value="";
            document.getElementById("inp_fog3").style.visibility="hidden";
            document.getElementById("inp_fog3").value="";
            document.getElementById("inp_fog4").style.visibility="hidden";
            document.getElementById("inp_fog4").value="";

            var date;
            date = new Date();
            var time = document.getElementById('inp_fog1'); 
            time.value = date.toLocaleTimeString();
        
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

            document.getElementById("inp_fog1").style.visibility="visible";
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

            document.getElementById("inp_fog1").style.visibility="visible";
            document.getElementById("inp_fog2").style.visibility="visible";
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
            
            document.getElementById("inp_fog1").style.visibility="visible";
            document.getElementById("inp_fog2").style.visibility="visible";
            document.getElementById("inp_fog3").style.visibility="visible";
            document.getElementById("inp_fog4").style.visibility="visible";

            break;
    }


}

function nullaz() {
    var x1 = document.getElementById("btnfogad1");
    var x2 = document.getElementById("btnfogad2");
    var x3 = document.getElementById("btnfogad3");
    var x4 = document.getElementById("btnfogad4");

    x1.classList.remove("myBtnFogadOFF");
    x2.classList.remove("myBtnFogadOFF");
    x3.classList.remove("myBtnFogadOFF");
    x4.classList.remove("myBtnFogadOFF");
    x1.classList.remove("myBtnFogadON");
    x2.classList.remove("myBtnFogadON");
    x3.classList.remove("myBtnFogadON");
    x4.classList.remove("myBtnFogadON");

    x4.classList.add("myBtnFogadOFF");
    x1.classList.add("myBtnFogadOFF");
    x2.classList.add("myBtnFogadOFF");
    x3.classList.add("myBtnFogadOFF");


    document.getElementById("inp_fog1").style.visibility="hidden";
    document.getElementById("inp_fog2").style.visibility="hidden";
    document.getElementById("inp_fog3").style.visibility="hidden";
    document.getElementById("inp_fog4").style.visibility="hidden";


function buksza(){

    $amu=$_SESSION(['amunt']);
    return $amu;
}

alert("<?php echo buksza() ?>");

}

