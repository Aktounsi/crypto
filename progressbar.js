var cp= 3000;
function refresh(){
    $.ajax({
        url:"progressionCalculMultiParties.php",
        success:function(data){
                    document.getElementsByTagName('progress')[0].value = data;
                    if(data==1) document.getElementById("myBtn").disabled = false;
                    }     
            })
}
intervalId  = setInterval(refresh,cp); 

$(window).on('load', function() {    
    $.ajax({
        url:"progressionCalculMultiParties.php",
        success:function(data){
                    document.getElementsByTagName('progress')[0].value = data;
                    if(data==1) document.getElementById("myBtn").disabled = false;
                    }     
            })
            })

            