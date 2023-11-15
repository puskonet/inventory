<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7 ielt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Inventory | PuskoNet</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<br/><br/><br/><br/><br/><br/>
<div class="container">
    <section id="content">
    <p class="login-box-msg" style="color : red; font-weight: gold;"><?php if (isset($_GET['error'])) {echo 
                  "
                  $_GET[error]
                  ";} else { echo "";} ?></p>
        <form action="proseslogin.php" method="post">
            <h1>PuskoNet</h1>
            <div>
                <input type="text" name="username" id="username" placeholder="Username" required="" id="username" autocomplete="off" />
            </div>
            <div>
                <input type="password" name="password" id="password" placeholder="Password" required="" id="password" autocomplete="off" />
            </div>
            <div>
                <input type="submit" value="Log in" />
                <a href="www.puskomedia.net.id" style="text-decoration: none;"> www.puskomedia.net.id &copy; 2023</a>
            </div>
        </form><!-- form -->
        
    </section><!-- content -->
</div><!-- container -->
</body>
</html>