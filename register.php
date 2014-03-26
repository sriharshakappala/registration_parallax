<?php
    require_once('functions.php');
    if(isset($_POST['submit']))
    {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $company = $_POST['company'];
        register_user($firstname, $lastname, $email, $username, $password, $company);
    }
?>

<html lang="en">
    <head>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>      
        <script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/bootstrap.css">        
    </head>
    <body>        
        <script src="js/main.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/jquery-2.1.0.min.js"></script>
        <script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>
        <script>
            $(document).ready(function(){
                $(document).mousemove(function(e){
                    TweenLite.to($('body'), 
                    .5, 
                    { css: 
                        {
                            'background-position':parseInt(event.pageX/8) + "px "+parseInt(event.pageY/12)+"px, "+parseInt(event.pageX/15)+"px "+parseInt(event.pageY/15)+"px, "+parseInt(event.pageX/30)+"px "+parseInt(event.pageY/30)+"px"
                        }
                    });
                });
            });
        </script>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <div class="container">
            <div class="row vertical-offset-100">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><b>Register for FixNix GRC</b></h3>
                        </div>
                        <div class="panel-body">
                            <form name="submit" method="post" action="">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="First Name" name="firstname" id="firstname" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Last Name" name="lastname" id="lastname" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" id="email" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" id="username" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" id="password" type="password" value="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Confirm Password" name="cpassword" id="cpassword" type="password" value="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Company Name" name="company" id="company" type="text">
                                </div>
                                <div class="form-group">
                                    <?php create_country_dropdown(); ?>
                                </div>
                                <input class="btn btn-lg btn-success btn-block" type="submit" name="submit" value="Register">
                                <a href="login.php" class="btn btn-lg btn-info btn-block">Already a Member?</a>
                            </fieldset>
                            </form>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>