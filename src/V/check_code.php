<head>
    <link type="text/css" rel="stylesheet" href="V/css/forgetPassword.css">
</head>
<?php
    require('header.php');
?>
 
<br/><br/><br/><br/>
<center>
            <br/>
            <h3 id="emble">Forgot your password ?</h3>
                <br/>
            <h5 id="slogan">Enter your e-mail and code to verify your identity.</h5>
                <br/><br/><br/><br/>
            <form method="post" action="index.php?controle=connect&action=check">
                <div class="form-group">
                    <br/>
                    <input type="number" name="verif_code" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your verification code" required>
                </div>
                <br/><br/><br/>
                <input type="submit" value="Validate the code" name="verif_submit" class="btn btn-primary" style="  background-color:#E9467C;color:white; border-color:white; border-radius:10px;width:27%;" onclick="myFunction()" required>
            </form>
</center>

 <?php
    require('footer.php');
?>