/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
    
    function updateTime(){
        $.ajax({
            type: 'POST',
            url: 'dateTime.php',
            timeout: 1000,
            success: function(data) {
                $("#serverDate").html(data);
                window.setTimeout(update, 1000);
            }
        });
    }
    update();
});
