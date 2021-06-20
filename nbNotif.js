var cp= 3000;
function refresh(){

    $.ajax({
        url:"nombrenotif.php",
        success:function(data){

            if((data > 0) && (100 > data)){
                    $('#spanNotif').fadeOut();
                    $('#spanNotif').fadeIn().text(data);
                    $('#spanNotif').css('background', 'red');    
                        }else if(data > 99){
                            $('#spanNotif').fadeOut();
                    $('#spanNotif').fadeIn().text('+99');
                    $('#spanNotif').css('background', 'red'); 
                        }
                        else{$('#spanNotif').css('display', 'hidden');}
                    } 
                
            })
}
intervalId  = setInterval(refresh,cp); 

$(window).on('load', function() {    
    $.ajax({
    type:"POST",
    url:"nombrenotif.php",
    data:'username=kk',
    success:function(data){
            if((data > 0) && (100 > data)){
                            $('#spanNotif').fadeOut();
                            $('#spanNotif').fadeIn().text(data);
                            $('#spanNotif').css('background', 'red');    
                                    }else if(data > 99){
                                            $('#spanNotif').fadeOut();
                            $('#spanNotif').fadeIn().text('+99');
                            $('#spanNotif').css('background', 'red'); 
                                    }
                                    else{$('#spanNotif').css('display', 'hidden');}
                            } 
            
    })
            })