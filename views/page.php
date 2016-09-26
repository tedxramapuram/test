<?php
/**
 * Created by PhpStorm.
 * User: Akshaya Krishnaswamy
 * Date: 9/24/2016
 * Time: 12:08 PM
 */
?>

<html>
<head>
    <title>Demo</title>
</head>

<body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<h1>Login</h1>
<div id="login">
    <form action="http://localhost/test/controller/page.php" method="post" id="form-one"  name="form-one">
        <p id="pTag1"></p>
        <label>Username :</label>
        <input id="username" name="username" type="text" placeholder="Username" >
        <label>Password :</label>
        <input id="password" name="password" type="password" placeholder="password" >
        <button type="submit" id="btnSubmit" value="submit">Login</button>
    </form>
</div>

<script>
    var validate = function(formElem){
        console.log(formElem.username.value);
        console.log(formElem.username.value);

        return false;
    };
    $('body').on('click','#btnSubmit',function(e){

        var xdata={};
        xdata.username = $('#username').val();
        xdata.password = $('#password').val();


        $.ajax({
            type:"POST",
            url:'/test/controller/page.php',
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


    });
</script>
</body>

</html>

