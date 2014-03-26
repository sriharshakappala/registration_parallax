<?php

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
                            <h3 class="panel-title"><b>Login</b></h3>
                        </div>
                        <div class="panel-body">
                            <form name="submit" method="post" action="">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" id="username" type="text">                                    
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" id="password" type="text">
                                </div>                                
                                <input class="btn btn-lg btn-success btn-block" type="submit" name="submit" value="Login">
                                <a href="register.php" class="btn btn-lg btn-info btn-block">New Member</a>
                            </fieldset>
                            </form>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>