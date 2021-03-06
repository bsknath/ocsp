<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <title>DBCourse</title>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,800">
        <link rel='stylesheet' href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel='stylesheet' id='child-theme-css'  href='https://blog.coursera.org/wp-content/themes/coursera-blog/style.css' type='text/css' media='all' />
        
    </head>
    <body>
        
        <div class="bg-image"></div>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="logo">
				<a class="navbar-brand" href="index.php"><img src="dbcourse.png" width="100" height="40"/></a>
			</div>
                
                <div class="collapse navbar-collapse" id="navbarsupportedContent">
                    <ul class="navbar-nav ml-auto">
                        
                        <li class="nev-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        
                        <li class="nev-item">
                            <a class="nav-link" href="login.php">Log In</a>
                        </li>
                        <li class="nev-item">
                                <a class="nav-link" href="contactus.php">Contact</a>
                            </li>
                        <li class="nev-item">
                                <a class="nav-link" href="about.php">About Us</a>
                            </li>
                    </ul>
                </div>
            </nav>    


<!--<body data-spy="scroll" data-target="#myScrollspy" data-offset="1">
-->    
        <div class="row">
            <div class="col-lg-6">
                <h2>Student Login</h2>
                <form action="stu_login_check.php" method="post">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <input type="submit" name="submit" value="submit">
                    <br>
                    <br>
                    <a href="fcty_login.php">Login As Faculty</a><br>
                    <a href="admin_login.php">Login As Admin</a>
                </form>
            </div>
            <div class="col-lg-3">
                <h2>Register Here</h2>
                <a href="stu_register.php">Register As Student</a><br>
                <a href="fcty_register.php">Register As Faculty</a>

            </div>
        </div>
    </div></div>
    <footer class="site-footer" itemscope itemtype="https://schema.org/WPFooter">
            <div class="site-footer">
                <div class="inner-wrapper">
                    <div class="info">
                        <div class="logo"><img src="dbcourse.png"/>
                        </div>
                        <p class="about">DBCourse provides universal access to the world’s best education, partnering with top universities and organizations to offer courses online.</p>
                        <p class="copyright">© 2018 DBCourse OpenSource</p> 
                    </div>
                    <div class="menu">
                        <ul>
                            <li class="plain">DBCourse</li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="contactus.php">Contact</a></li>
                        </ul>
                        <ul>
                            <li class="plain">Community</li>
                            <li><a href="www.nitc.ac.in">Partners</a></li>
                        </ul>
                        <ul>
                            <li class="plain">Admin</li>
                            <li><a href="admin_login.php">Admin Login</a></li>
                        </ul>
                        
                    </div>
                </div>
        </div>
    </footer>
</body>
</html>
