<?php
include('connection.php');
session_start();

//if(!$_SESSION['email'])
//{
//    header('Location:stu_home.php');
//}
$x=$_SESSION['email'];
$query = "SELECT * from stu_register where stu_email='$x'";  
$result = mysqli_query($conn, $query);  
if (mysqli_num_rows($result) === 0) {
    header('Location:stu_home.php');
}
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <title>DBCourse</title>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

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
				<a href="index.php"><img src="dbcourse.png" alt="Coursera" /></a>
			</div>
                
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                      
                
                <div class="collapse navbar-collapse" id="navbarsupportedContent">
                    <ul class="navbar-nav ml-auto">
                        
                        <li class="nev-item">
                            <a class="nav-link" href="stu_home.php">Home</a>
                        </li>
                 <!--       <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown">Category</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Database MS</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">OS</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Number Theory And Cryptography</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Artificial Intelligence</a>
                        </div>
                        </li>-->
                        <li class="nev-item">
                            <a class="nav-link" href="test.php" > Available Courses</a>
                        </li>
                        <li class="nev-item">
                            <a class="nav-link" href="test1.php" > My Courses</a>
                        </li>
                        
                        <li class="nev-item">
                            <a class="nav-link" href="logout.php">Log Out</a>
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
            <div>
                <div >
                <h3>My Courses</h3>
                <div>
                    
                   <br /><br /> 

                 <div class="row" >
                <?php  
                    include('connection.php');
                    $y=$_SESSION['email'];
                $query = "SELECT c.c_id,c_name,c_about,f.fcty_name,f.fcty_email from course_list as c, stu_course as s,fcty_register as f where stu_email='$y' and s.c_id=c.c_id and s.fcty_email=f.fcty_email
                ";  
                $result = mysqli_query($conn, $query); 
                $count=0; 
                    if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_array($result))  
                {  
                    echo '  
                    <div class="col">
              <div class="card mb-4" style="border:0px;">
            <div class="card-body text-center">
               <div class="card" style="width:300px">
                          <div class="card-body">
                                 <h4 class="card-title"><b>'.$row['c_name'].'</u></b></h4>
                                 <h5 class="card-title"><i>'."-".$row['fcty_name'].'</i></h5>
                                 <p class="card-text">'.$row['c_about'].'</p>
                                 <table border="0">
                                 <tr>
                                 <td>
                                <form action="seefiles.php" method="post">
                                    <input type="hidden" name="cid" value="'.$row['c_id'].'">
                                    <input type="hidden" name="fmail" value="'.$row['fcty_email'].'">
                                    <button type="submit" name="submit" class="btn btn-sm"> See Content</button>
                                </form>
                               
                               </td>
                                 <td>
                                 <form action="discuss.php" method="GET" >
                                 <button type="submit" name="submit" class="btn btn-sm" value="'.$row['fcty_email'].",".$row['c_id'].'">Discussion Box</button>
                               </form></td>
                               </tr>
                               </table>
                               <form action="delete.php" method="GET" >
                                 <button type="submit" name="submit" class="btn btn-primary" value="'.$row['fcty_email'].",".$row['c_id'].'">Un-Register</button>
                               </form>
                                 
                                  
                      
                        </div></div></div></div>
                      </div><br><br>
               '; 
              
               $count++;

                        
                        
                }  }
                    else{echo '0 record found';}
                ?> 
                </table> 
       
                </div>
            </div>
            
        </div>
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
                            <li class="plain">Coursera</li>
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







