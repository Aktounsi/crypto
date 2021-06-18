/*$('.candidat').on("click",function() {
            e.preventDefault(); // stops the default action
            //$("#loader").show(); // shows the loading screen
            window.swal({
              title: "Checking...",
              text: "Please wait",
              imageUrl: "images/ajaxloader.gif",
              showConfirmButton: false,
              allowOutsideClick: false
            });
            $.ajax({
                url: test.php,
                type: "POST"
                success: function (returnhtml) {
                    //$("#loader").hide(); // hides loading sccreen in success call back
                    window.swal({
                      title: "Finished!",
                      showConfirmButton: false,
                      timer: 1000
                    });
                }
            });
        });*/



        /**************************************************************** */
        $(document).ready(function(){
            let del = $('a.candidat');
        
            $(del).each(function(){
                $(this).on('click', function(e){
                    e.preventDefault(); 
                    let link = $(this);
                    let target = $(this).attr('href');
                    swal.fire({
                        title: 'Confirmez vous cette action?',
                        text: 'Cette action est irréversible',
                        type: 'warning',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Continuer',
                        cancelButtonText: 'Annuler',
                        confirmButtonColor: "#5cb85c"
                    }).then((result) => {
                        if(result.value){
                            fetch(target, {method: 'get'}).then(response => response.json()).then(message => {
                                console.log(message);
                                Swal.fire({
                                    title: 'Résultat de l\'opération',
                                    html: '<p>'+message.success+'</p>',
                                    type: '\''+message.type+'\'',
                                    icon: message.type ,
                                    confirmButtonColor: "#5cb85c"
                                });
        
                            });
                            $(link).closest('tr').fadeOut();
                           //document.location.reload(true);
                        }
                    }).catch(err => {
                        console.log(err);
                        Swal.fire({
                            title: 'Oups!',
                            text: 'Une erreur est survenue.',
                            type: 'error',
                            confirmButtonColor: "#5cb85c"
                            
                        });
                    });
        });
        });
        });