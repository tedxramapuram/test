<?php
/**
 * Created by PhpStorm.
 * User: Akshaya Krishnaswamy
 * Date: 9/25/2016
 * Time: 12:03 PM
 */
?>
<html>
<head>
    <h1>Sign-up Page</h1>
</head>
<body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<div id="signUpPage">

    <p id="p"></p>
<label>Enter a Username</label>
<input type="text" id="sUserName" placeholder="Enter a username">
<label>Password</label>
<input type="password" id="sPassword" placeholder="Password">
<label>Confirm Password</label>
<input type="password" id="sConfirmPassword" placeholder="Confirm Password">
<button type="submit" id="btnConfirm" value="confirm">Confirm</button>
</div>


<script>

$('body').on('click','#btnConfirm',function(e){

var xdata={};
xdata.sUserName = $('#sUserName').val();
xdata.sPassword = $('#sPassword').val();
    xdata.sConfirmPassword = $('#sConfirmPassword').val();


    if(xdata.sPassword != xdata.sConfirmPassword){

        $("#p").append("The password does not match with the confirm Password");
    }
   else {
        $.ajax({
            type: "POST",
            url: '/test/controller/signup.php',
            data: xdata,
            success: function () {

            }

        });

    }

});

</script>

</body>
</html>
