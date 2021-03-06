<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Coil</title>
    <!-- Bootstrap -->
    <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="lib/typed.min.js" type="text/javascript"></script>
    <!-- This page's style sheet -->
    <link href="styles/index.css" rel="stylesheet">
    <!-- Mobile Friendly-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon in tab-->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato:black,400,900" rel="stylesheet">
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-90907253-2', 'auto');
        ga('send', 'pageview');
    </script>
  </head>
  <body>
      <div class="col-sm-12">
        <div class="wrapper">
                <div class="loginButtons">
                    <img src="images/landing-page-logo.png" id="landing-page-logo" alt="coil logo">
                    <nav class="cl-effect-1">
                        <a href="http://coilapp.com:8080/">login</a>
                        <a href="http://coilapp.com:8080/sign-up">signup</a>
                    </nav>
                    <!--
                    <a class="button" href="#" id="loginButton"><strong>login</strong></a>     
                    <a class="button" href="#" id="signupButton"><strong>signup</strong></a>-->
                </div>
                    <ul class="bg-bubbles hidden-xs">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <ul class="bg-bubbles visible-xs hidden-sm hidden-md hidden-lg">   
                    </ul>
                <!-- typed.js injection -->
                <div class="type-wrap">
                    <div id="typed-strings">
                        <h1>Collaborate with your <strong>classmates</strong></h1>
                        <h1>Or get <strong>tutored</strong> by them.</h1>
                    </div>
                    <span id="typed"></span>
                </div>
                <!-- typed.js ends here -->
                <div class="hidden-xs">
                    <center><a href="/product.php" id="productButton" class="btn btn-default btn-lg"><strong>Take the tour</strong></a></center>
                </div>
                 <div class="visible-xs hidden-sm hidden-md hidden-lg">
                    <center><a href="/product.php" id="productButtonXS" class="btn btn-default btn-lg"><strong>Take the tour</strong></a></center>
                </div>
                <!-- typed.js script -->
                <script>
                    var typed = new Typed('#typed', {
                    stringsElement: '#typed-strings',
                    typeSpeed: 40,
                    loop: true,
                    backDelay: 900,
                    startDelay: 1000,
                    showCursor: true,
                    backSpeed: 20,
                    });
                </script>
                <!--typed.js ends here -->
            </div>
        </div>

    <footer>
        <div class="row">
            <div class="col-sm-4">
                <center><p id="usingCoilFooter"> using coil</p>
                <div class="footerLinks">
                    <a href="/product.php"> product </a><br>
                    <a href="#"> prove it </a>
                </div></center>
            </div>
            <div class="col-sm-4">
                <center><span class="glyphicon glyphicon-heart" id="coilFooter" aria-hidden="true">coil</span> 
                <div class="footerLinks">
                    <a href="#"> policy </a><br>
                    <a href="mailto:support@coilapp.com?Subject=Hi%20again!" target="_top">contact us</a>
                </div></center>
            </div>
            <div class="col-sm-4">
                <center><p id="handyLinksFooter">tool box</p></center>
                <div class="footerLinks">
                    <a id="toolBox" href="#"> iOS app</a>
                    <a id="gurusLink" href="/windows/index.html">guru board</a>
                </div>
            </div>
        </div>
    </footer>


    <!-- jQuery 
    <script src="js/jquery.js"></script>-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <!--<script src="js/bootstrap.min.js" type="text/javascript"></script>-->
    <!-- Including The jQuery Library -->
    <script src="http://code.jquery.com/jquery-1.6.3.min.js"></script>
    <!-- Including the PointPoint() Plugin -->
    <script src="pointpoint/jquery.pointpoint/transform.js"></script>
    <script src="pointpoint/jquery.pointpoint/jquery.pointpoint.js"></script>
    <!-- The main script file -->
    <script src="pointpoint/js/script.js"></script>    
    <script src="lib/index.js"></script>
  </body>
</html>