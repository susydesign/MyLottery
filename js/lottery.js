$(document).ready(function() {
    
    $(document).on('click','#btn-daily', function(event){
        lottaryDaily(23,59,59);
    });
    $(document).on('click','#btn-weekley', function(event){
        lottaryWeekly();
    })
    $(document).on('click','#btn-monthly', function(event){
        lottaryMonthly();
    })


})
    
function lottaryDaily(hrs, mins, sec) {

    hrs  = Math.round(Math.random()*hrs);
    mins = Math.round(Math.random()*mins);    
    sec  = Math.round(Math.random()*sec);    

    var shrs  = (hrs<10 ? "0"+hrs : hrs) ;
    var smins = (mins<10 ? "0"+mins : mins) ;
    var ssec  = (sec<10 ? "0"+sec : sec) ;

    var lotD=shrs+":"+smins+":"+ssec;
    var m_game_id=1;
 
    document.getElementById("ldaily").innerHTML = lotD;

    $.ajax({
        type: "POST",
        url: "./php/winers.php",
        dataType: "json",
        data: {game_id:m_game_id,sorsolt:lotD},
        success: function(data){
            alert(data);
            console.log(data['game_id']);
            console.log(data['eredmeny1']);
            console.log(data['mikor']);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert("Ajax HIBA ts: "+textStatus+" thrown: "+errorThrown+"<br>Game Id: "+m_game_id+"<br>Sorsolt: "+lotD);
            console.log(textStatus, errorThrown)}

    })



}

function lottaryWeekly() {
    var days=["Monday","Thuesday","Wendesday","Tursday","Friday","Saturday","Sunday"];

    var lotW = days[Math.floor(Math.random() * 7)];

    document.getElementById("lweekly").innerHTML=lotW;   
}
    
function lottaryMonthly() {
    var lotM = Math.floor(Math.random() * 51);

    document.getElementById("lmonthly").innerHTML=lotM;   
}

function lottaryYear() {
    var months=["January","February","March","April","May","June","July","August","September","Oktober","November","December"];

    var lotY = months[Math.floor(Math.random() * 11)];

    document.getElementById("lyear").innerHTML=lotY;   
}

