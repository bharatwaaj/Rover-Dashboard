<!DOCTYPE html>
<html>
<?php

if(isset($_COOKIE["LoginState"])){
    header("Location: home.php");
}

setcookie("LoginState", "", time() + 30);
setcookie("userNameLoggedIn", null, time() + 30);

include 'headLink.php';


include 'databaseConnectivity.php';
?>
<body class="fixed-header">

<!-- START PAGE-CONTAINER -->
<div style="padding: 10%;">
    <!-- START PAGE CONTENT WRAPPER -->
    <div class="page-content-wrapper">
        <!-- START PAGE CONTENT -->
        <div class="content">
            <!-- START CONTAINER FLUID -->
            <div class="container-fluid container-fixed-lg">
                <!-- BEGIN PlACE PAGE CONTENT HERE -->
                <div style="width: 50%; margin: auto" class="modal-content my-login-css-class">
                    <div class="modal-header clearfix text-left">
                        <h5>Login</h5>
                    </div>
                    <div class="modal-body">
                        <form name="loginForm" action="loginAction.php" method="POST">
                            <?php
                            if(isset($_COOKIE['LoginState'])){
                                if($_COOKIE['LoginState'] == 'false'){
                                    echo "<label class=\"danger\"> Username or Password is invalid! </label>";
                                }
                            }
                            ?>
                            <div class="form-group form-group-default excerpt-css">
                                <label>Username</label>
                                <input name="username" class="form-control" type="email"/>
                            </div>
                            <div class="form-group form-group-default excerpt-css">
                                <label>Password</label>
                                <input name="password" class="form-control" type="password"/>
                            </div>
                            <input class="btn btn-primary btn-cons" value="Login" type="submit"/>
                        </form>
                    </div>
                </div>

                <!-- END PLACE PAGE CONTENT HERE -->
            </div>
            <!-- END CONTAINER FLUID -->
        </div>
        <!-- END PAGE CONTENT -->
    </div>
    <!-- END PAGE CONTENT WRAPPER -->
</div>
<!-- END PAGE CONTAINER -->
<?php
include 'bodyLink.php';
?>
</body>
</html>