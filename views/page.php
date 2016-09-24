<?php
/**
 * Created by PhpStorm.
 * User: Akshaya Krishnaswamy
 * Date: 9/24/2016
 * Time: 12:08 PM
 */
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <h1>Login</h1>
<div id="login"
     <p id="pTag1"></p>
<label>
<input id="username" type="text" placeholder="Username" > Username :
<input id="password" type="text" placeholder="password" >Password :
    <button type="submit" id="btnSubmit" value="submit">Submit</button>
</label>
</div>

<script>
    $('body').on('click','#btnSubmit',function(e){

        var xdata={};
        xdata.username = $('#username').val();
        xdata.password = $('#password').val();


        if(!xdata.password){
            $( "#pTag1" ).append( "Enter a password" );
        }
        else
        {
            $.ajax({
                type:"POST",
                url:'/controller/page',
                data: xdata,
                success: function( response ){

                    if( response.success ){

                        $.msgGrowl ({
                            type: 'success',
                            text: response.message
                        });

                    }
                }

            });

        }
    });
</script>

