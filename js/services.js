$(document).ready(function() {
    var aktuser = document.getElementById('info').innerText;
    if(aktuser!=""){
        document.getElementById("btnlogin").innerHTML="Logout";
        refWallet()
    } else {
        document.getElementById("btnlogin").innerHTML="Login";
        refWallet()
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


    $(document).on('click','#paypal_in', function(event){
        window.open("./paypal_in.php","width=700,height=800");
        
    })

    $(document).on('click','#paypal_out', function(event){
        window.open("./paypal_out.php");
    })
   
});



function timestamphome(){
    var date;
    date = new Date();
    var time = document.getElementById('timediv'); 
    time.innerHTML = date.toLocaleTimeString();
    
}

function refWallet(){
    var m_credit = document.getElementById('credit');
    var m_bonus1 = document.getElementById('btnBonus1');
    var m_bonus2 = document.getElementById('btnBonus2');
    var m_bonus3 = document.getElementById('btnBonus3');
    var m_bonus4 = document.getElementById('btnBonus4');
    var user_id = document.getElementById("inp_id").value;

    $.ajax({
        type: "POST",
        url: "./php/ajax_wallet.php",
        dataType: "json",
        data: {user_id:user_id},
        success: function(data){
            m_credit.innerHTML = "<h1>"+data.amunt+"</h1>";
            m_bonus1.innerHTML = Math.trunc(data.bonus)+"<br>Hour";
            m_bonus2.innerHTML = Math.trunc(data.bonus/4)+"<br>Daily";
            m_bonus3.innerHTML = Math.trunc(data.bonus/12)+"<br>Weekly";
            m_bonus4.innerHTML = Math.trunc(data.bonus/24)+"<br>Monthly";
        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert("Ajax HIBA ts: "+textStatus+" thrown: "+errorThrown);
            console.log(textStatus, errorThrown)}

    })
}


function clc_fogad(melyik,bonus){

    var mb = document.getElementById("inp_bonus");
   
    var x1 = document.getElementById("btnfogad1");
    var x2 = document.getElementById("btnfogad2");
    var x3 = document.getElementById("btnfogad3");
    var x4 = document.getElementById("btnfogad4");
    var b1 = document.getElementById("btnBonus1");
    var b2 = document.getElementById("btnBonus2");
    var b3 = document.getElementById("btnBonus3");
    var b4 = document.getElementById("btnBonus4");
    
    var m_bonus = (bonus==='false') ? "false":"true";
    mb.value = m_bonus;

    x1.classList.remove("myBtnFogadOFF");
    x2.classList.remove("myBtnFogadOFF");
    x3.classList.remove("myBtnFogadOFF");
    x4.classList.remove("myBtnFogadOFF");
    x1.classList.remove("myBtnFogadON");
    x2.classList.remove("myBtnFogadON");
    x3.classList.remove("myBtnFogadON");
    x4.classList.remove("myBtnFogadON");
    b1.classList.remove("myBtnFogadOFF");
    b2.classList.remove("myBtnFogadOFF");
    b3.classList.remove("myBtnFogadOFF");
    b4.classList.remove("myBtnFogadOFF");
    b1.classList.remove("myBtnFogadON");
    b2.classList.remove("myBtnFogadON");
    b3.classList.remove("myBtnFogadON");
    b4.classList.remove("myBtnFogadON");

    switch (melyik) {
        case "btnfogad1":
            x1.classList.add("myBtnFogadON");

            x2.classList.add("myBtnFogadOFF");
            x3.classList.add("myBtnFogadOFF");
            x4.classList.add("myBtnFogadOFF");
            b1.classList.add("myBtnFogadOFF");
            b2.classList.add("myBtnFogadOFF");
            b3.classList.add("myBtnFogadOFF");
            b4.classList.add("myBtnFogadOFF");

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
            x2.classList.add("myBtnFogadON");

            x1.classList.add("myBtnFogadOFF");
            x3.classList.add("myBtnFogadOFF");
            x4.classList.add("myBtnFogadOFF");
            b1.classList.add("myBtnFogadOFF");
            b2.classList.add("myBtnFogadOFF");
            b3.classList.add("myBtnFogadOFF");
            b4.classList.add("myBtnFogadOFF");

            document.getElementById("inp_fog1").style.visibility="visible";
            document.getElementById("inp_fog2").style.visibility="visible";
            document.getElementById("inp_fog3").style.visibility="hidden";
            document.getElementById("inp_fog4").style.visibility="hidden";
            
            break;
        case "btnfogad3":
            x3.classList.add("myBtnFogadON");

            x1.classList.add("myBtnFogadOFF");
            x2.classList.add("myBtnFogadOFF");
            x4.classList.add("myBtnFogadOFF");
            b1.classList.add("myBtnFogadOFF");
            b2.classList.add("myBtnFogadOFF");
            b3.classList.add("myBtnFogadOFF");
            b4.classList.add("myBtnFogadOFF");

            document.getElementById("inp_fog1").style.visibility="visible";
            document.getElementById("inp_fog2").style.visibility="visible";
            document.getElementById("inp_fog3").style.visibility="visible";
            document.getElementById("inp_fog4").style.visibility="hidden";

            break;
        case "btnfogad4":
            x4.classList.add("myBtnFogadON");

            x1.classList.add("myBtnFogadOFF");
            x2.classList.add("myBtnFogadOFF");
            x3.classList.add("myBtnFogadOFF");
            b1.classList.add("myBtnFogadOFF");
            b2.classList.add("myBtnFogadOFF");
            b3.classList.add("myBtnFogadOFF");
            b4.classList.add("myBtnFogadOFF");
            
            document.getElementById("inp_fog1").style.visibility="visible";
            document.getElementById("inp_fog2").style.visibility="visible";
            document.getElementById("inp_fog3").style.visibility="visible";
            document.getElementById("inp_fog4").style.visibility="visible";

            break;

            case "btnBonus1":
                b1.classList.add("myBtnFogadON");
                
                x1.classList.add("myBtnFogadOFF");
                x2.classList.add("myBtnFogadOFF");
                x3.classList.add("myBtnFogadOFF");
                x4.classList.add("myBtnFogadOFF");
                b2.classList.add("myBtnFogadOFF");
                b3.classList.add("myBtnFogadOFF");
                b4.classList.add("myBtnFogadOFF");
    
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
        
            case "btnBonus2":
                b2.classList.add("myBtnFogadON");
                
                x1.classList.add("myBtnFogadOFF");
                x2.classList.add("myBtnFogadOFF");
                x3.classList.add("myBtnFogadOFF");
                x4.classList.add("myBtnFogadOFF");
                b1.classList.add("myBtnFogadOFF");
                b3.classList.add("myBtnFogadOFF");
                b4.classList.add("myBtnFogadOFF");
    
                document.getElementById("inp_fog1").style.visibility="visible";
                document.getElementById("inp_fog2").style.visibility="visible";
                document.getElementById("inp_fog3").style.visibility="hidden";
                document.getElementById("inp_fog4").style.visibility="hidden";
                
                break;
            case "btnBonus3":
                b3.classList.add("myBtnFogadON");
                
                x1.classList.add("myBtnFogadOFF");
                x2.classList.add("myBtnFogadOFF");
                x3.classList.add("myBtnFogadOFF");
                x4.classList.add("myBtnFogadOFF");
                b1.classList.add("myBtnFogadOFF");
                b2.classList.add("myBtnFogadOFF");
                b4.classList.add("myBtnFogadOFF");
    
                document.getElementById("inp_fog1").style.visibility="visible";
                document.getElementById("inp_fog2").style.visibility="visible";
                document.getElementById("inp_fog3").style.visibility="visible";
                document.getElementById("inp_fog4").style.visibility="hidden";
    
                break;
            case "btnBonus4":
                b4.classList.add("myBtnFogadON");

                x1.classList.add("myBtnFogadOFF");
                x2.classList.add("myBtnFogadOFF");
                x3.classList.add("myBtnFogadOFF");
                x4.classList.add("myBtnFogadOFF");
                b1.classList.add("myBtnFogadOFF");
                b2.classList.add("myBtnFogadOFF");
                b3.classList.add("myBtnFogadOFF");
                
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

    refWallet();
}

