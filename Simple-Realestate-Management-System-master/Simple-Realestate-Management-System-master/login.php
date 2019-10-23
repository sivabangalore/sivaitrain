<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <link rel="icon" href="logo.jpg">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="login.css">
</head>
<body>
  <nav class="navbar navbar-inverse" id="myHeader">
       <div class="container-fluid">
           <img class="lm1 img-responsive" src="logo.jpg">
           <div class="navbar-header">
               <button class="navbar-toggle" type="button" data-target="#pranto" data-toggle="collapse" aria-expanded="false">
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
               </button>
                 <a href="index.html" class="navbar-brand"><p class="plp" style="margin-left: 130% !important;">KPL</p></a>
           </div>
           <div class="collapse navbar-collapse" id="pranto">
               <ul class="nav navbar-nav">
                   <li class="nav-item">
                       <a class="nav-link" href="index.html">Home</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="services.html">Services</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="photogallery.html">Photo Gallery</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="about.html">About</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="contact.php">Contact</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="news.php">News</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="career.php">Career</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="login.php" id="log">Login</a>
                   </li>
               </ul>
           </div>
       </div>
   </nav>
   
   
   
   <form method="post" id="load">
   <div class="lcon container">
            <div class="row">

                <div class="ljum jumbotron">
                    <p class="lp1">Please Login</p>
                    <input class="form-control" type="text" placeholder="Enter Your Username" name="user" autocomplete="off">
                    <br>

                    <input class="form-control" type="password" name="pass"  placeholder="Enter Your Password" autocomplete="off">
                     <br>
                    <input type="submit" value="Login" class="btn1 btn-success" name="submit">

                </div>
            </div>
        </div>
    </form>
       
        <div class="inp container" id="page" style="display:none;">
        <div class="rn row">
            <div class="inj jumbotron">
               <form method="post">
                <div class="fn form-group">
    <label class="pcl1" for="news">Enter Your News:</label>
    <input class="form-control" type="text" name="nid"  placeholder="Enter Your News ID" autocomplete="off"><br>
    <textarea class="form-control" name="ntarea" rows="7" placeholder="News"></textarea>
    <input type="submit" value="Submit News" name="nsub" class="btn-success">
  </div>
                </form>
                
                <form method="post">
                <div class="fc form-group">
    <label class="pcl1" for="career">Career Post:</label>
    <input class="form-control" type="text" name="crp"  placeholder="Enter Your Career ID" autocomplete="off"><br>
    <input class="form-control" type="text" name="cre"  placeholder="Enter Your Position" autocomplete="off"><br>
    <input class="form-control" type="text" name="crv"  placeholder="Enter The Number Of Vacancy" autocomplete="off"><br>
    <textarea class="form-control" name="crt" rows="7" placeholder="Career"></textarea>
    <input type="submit" value="Submit Career" name="csub" class="btn-success">
  </div>
                </form>
                
                 <form method="post">
                <div class="fd1 form-group">
    <label class="pcl2" for="career">Delete News:</label>
    <input class="form-control" type="text" name="dln"  placeholder="Enter Your News ID" autocomplete="off"><br>
    
    <input type="submit" value="Delete News" name="dlnsub" class="btn2 btn-success">
  </div>
                </form>
                
                
                <form method="post">
                <div class="fd2  form-group">
    <label class="pcl2" for="career">Delete Career:</label>
    <input class="form-control" type="text" name="dlc"  placeholder="Enter Your Career ID" autocomplete="off"><br>
    
    <input type="submit" value="Delete Career" name="dlcsub" class="btn2 btn-success">
  </div>
                </form>
                
                
                <form method="post">
   <div class="scon container">
            <div class="row">

                <div class="sjum jumbotron">
                    <p class="sp1">If You Change Username and Password<br>Please Enter Username and Password</p>
                    <input class="form-control" type="text" placeholder="Enter Your Username" name="us" autocomplete="off">
                    <br>

                    <input class="form-control" type="password" name="pa"  placeholder="Enter Your Password" autocomplete="off">
                     <br>
                    <input type="submit" value="Resent Password" class="btn4 btn-success" name="ssub">

                </div>
            </div>
        </div>
    </form>
            </div>
        </div>
    </div>
      
      
      
   
      
      
      
      
      
      
      
      
      
      
      
      <?php
       require_once("connection.php");
         if(isset($_POST['nsub'])){
                $nid = $_POST['nid'];
                $area = $_POST['ntarea'];
             
             
             $result = "INSERT INTO news(newsid,message)
                           VALUES('$nid','$area')";
             
           
             
            if(empty($area) || empty($nid)){
                echo"<script>swal({
                    title: 'News Not Added',
                    text: 'Thank You',
                    icon: 'error',
                    timer: 3000,
                    button: false,

                });</script>";
            }
           
             else{
                  $res = mysql_query($result);
                 echo"<script>swal({
                    title: 'News Added',
                    text: 'Thank You',
                    icon: 'success',
                    timer: 3000,
                    button: false,

                });</script>";
             }
    
         }
    
    
    
    ?>
      
    
    
    
    
     <?php
       require_once("connection.php");
         if(isset($_POST['csub'])){
                $crp = $_POST['crp'];
                $cre = $_POST['cre'];
                $crv = $_POST['crv'];
                $crt = $_POST['crt'];
             
             
             $result = "INSERT INTO career(careerid,position,vacancy,post)
                           VALUES('$crp','$cre','$crv','$crt')";
             
           
             
            if(empty($crt) || empty($crp) || empty($cre) || empty($crv)){
                echo"<script>swal({
                    title: 'News Not Added',
                    text: 'Thank You',
                    icon: 'error',
                    timer: 3000,
                    button: false,

                });</script>";
            }
           
             else{
                  $res = mysql_query($result);
                 echo"<script>swal({
                    title: 'News Added',
                    text: 'Thank You',
                    icon: 'success',
                    timer: 3000,
                    button: false,

                });</script>";
             }
    
         }
    
    
    
    ?>
    
    
    
    
    
    
      
        
          
            
              
                
                  
                      
      <?php
    
        require_once("connection.php");
  
        
                    
              
                
         if(isset($_POST['dlnsub'])){
                $dn = $_POST['dln'];
                 
                $sql = "DELETE FROM news WHERE newsid =$dn";
                $res = mysql_query($sql); 
                 

    }
             
 
  
  
    
       ?>
       
       
       
       
                           
      <?php
    
        require_once("connection.php");
  
        
                    
              
                
         if(isset($_POST['dlcsub'])){
                $cn = $_POST['dlc'];
                 
                $sql = "DELETE FROM career WHERE careerid =$cn";
                $res = mysql_query($sql); 
                 

    }
             
 
  
  
    
       ?>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
       
      
        <?php
          
            require_once("connection.php");
                
                if(isset($_POST['submit'])){
                $username = $_POST['user'];
                $password = $_POST['pass'];
                
                   $sql = "SELECT * FROM kplt WHERE username='$username' AND password='$password'";
                    
                    $result = mysql_query($sql);
                   $count=mysql_num_rows($result);
                    
                    
                    
                    if($count == 1){
                      
                      echo'<script>
                           document.getElementById("load").style.display = "none";
                           document.getElementById("page").style.display = "block";
                           document.getElementById("log").innerHTML = "Logout";
                           
                           
                           </script>';
                    }
                    else{
                        echo"<script>swal({
                    title: 'Password or Username is Incorect',
                    text: 'Thank You',
                    icon: 'error',
                    timer: 3000,
                    button: false,

                });</script>";
                    }
                    
                
                }
    
    
    ?>
   
    <?php
          
            require_once("connection.php");
                
                if(isset($_POST['ssub'])){
                $us = $_POST['us'];
                $pa = $_POST['pa'];
                
                 
                    if(!empty($us) && !empty($pa)){
                        
                          $dlt = "DELETE FROM kplt";
                   $res = mysql_query($dlt);
                   
                    $sql = "INSERT INTO kplt(username,password)
                                   VALUES('$us','$pa')";
                    $result = mysql_query($sql); 
                      echo"<script>swal({
                    title: 'New Username and Password Set',
                    text: 'Thank You',
                    icon: 'success',
                    timer: 3000,
                    button: false,

                });</script>";   
                        
                    }
                   
                    else{
                        echo"<script>swal({
                    title: 'Fill Up All Field',
                    text: 'Thank You',
                    icon: 'error',
                    timer: 3000,
                    button: false,

                });</script>";
                    }
                   
                        
                    
                  
                    
                
                }
    
    
    ?>
   
    
</body>
</html>