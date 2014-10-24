jQuery( document ).ready( function( $ ) {
 
    $( '#add-lorem' ).on( 'submit', function() {
 
        $.post(
            $( this ).prop( 'action' ),
            {
                "_token": $( this ).find( 'input[name=_token]' ).val(),
                "parNumber": $( '#parNumber' ).val()
            },
            function( data ) {
                var result = data.msg;

                $("#lorem-result").html(result);
            },
            'json'
        );
 
        //prevent the form from actually submitting in browser
        return false;
    } );
 
} );


jQuery( document ).ready( function( $ ) {
 
    $( '#userform' ).on( 'submit', function() {
 
        $.post(
            $( this ).prop( 'action' ),
            {
                "_token": $( this ).find( 'input[name=_token]' ).val(),
                "usersNum": $( '#usersNum' ).val()
            },
            function( data ) {
                $(".users").remove();
                console.log(data.msg[0].name);


               for(i = 0; i < $( '#usersNum' ).val(); i++){

           
                  $("#users").append(
                  "<div class='generate'>"+
                    "<b>"+data.msg[i].name+"</b>"+
                    "<p>Birthday: "+data.msg[i].bday+"</p>"+
                    "<p>Email: "+data.msg[i].email+"</p>"+
                  "</div>"
                  );
                }
                
            },
            'json'
         );
 
        //prevent the form from actually submitting in browser
        return false;
    } );
 
} );