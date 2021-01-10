$(document).ready(function() {

    $(document).on('click','#btn-payin', function(event){
        alert("Befizetés");
        var user_id = 1;
        $.ajax({
            type: "POST",
            url: "./php/ajax_wallet_in.php",
            dataType: "json",
            data: {user_id:user_id},
            success: function(data){
                refWallet();
                window.close();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert("Ajax HIBA ts: "+textStatus+" thrown: "+errorThrown);
                console.log(textStatus, errorThrown)}
    
        })
    })

    $(document).on('click','#btn-payout', function(event){
        alert("Kifizetés");
        var user_id = 1;
        $.ajax({
            type: "POST",
            url: "./php/ajax_wallet_out.php",
            dataType: "json",
            data: {user_id:user_id},
            success: function(data){
                window.close();
                refWallet();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert("Ajax HIBA ts: "+textStatus+" thrown: "+errorThrown);
                console.log(textStatus, errorThrown)}
    
        })
    })


});



