<?php

    require "includes/header.php"
?>


    <div class="container">
        <h1>Login Below</h1>
        <form action="includes/makelogin.php" method="POST">
        <div class="form-group">
                <label>Email Address</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
        </div>
        <input type="submit" name="login-submit" value="submit" class="btn btn-primary">
        </form>
    </div>
    
<?php    include "includes/footer.php";
?>
