jQuery(document).ready(function(){

    jQuery('.ajaxform').submit( function() {

        $.ajax({

            url     : $(this).attr('action'),
            type    : $(this).attr('method'),
            data    : $(this).serialize(),
            success : function( data ) {
               document.getelementbyId("form").reset();
                         

                      },
            error   : function(){
                         alert('Something wrong');
                      }
        });

        return false;
    });

});