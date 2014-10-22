jQuery( document ).ready( function( $ ) {
 
    $( '#form-add-lorem' ).on( 'submit', function() {
 
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
 
    $( '#form-userform' ).on( 'submit', function() {
 
        $.post(
            $( this ).prop( 'action' ),
            {
                "_token": $( this ).find( 'input[name=_token]' ).val(),
                "usersNum": $( '#usersNum' ).val()
            },
            function( data ) {
                //first remove existing users, if any
                $(".users").remove();

                //test data is ok
                console.log(data.msg[0].name);

                //loop to create users in boxes
                for(i = 0; i < $( '#usersNum' ).val(); i++){
                  $("#users").append(
                  "<div class='generate'>"+
                    "<h4>"+data.msg[i].name+"</h4>"+
                    "<p>Birthday: "+data.msg[i].bday+"</p>"+
                    "<p>Company: "+data.msg[i].company+"</p>"+
                    "<p>Address: "+data.msg[i].address+"</p>"+
                    "<p>Description: "+data.msg[i].description+"</p>"+
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