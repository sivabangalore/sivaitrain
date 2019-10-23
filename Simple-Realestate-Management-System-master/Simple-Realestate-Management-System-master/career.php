<!DOCTYPE html>
<html lang="en">
<head>
  <title>Career</title>
  <link rel="icon" href="logo.jpg">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="photo.css">
  <style>
      @media only screen and (min-width:320px) and (max-width: 768px){
          .c1{
              margin-top: 13% !important;
          }
      }
    
    
    </style>
</head>
<body>
      <nav class="navbar navbar-inverse navbar-fixed-top">
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
                       <a class="nav-link" href="login.php">Login</a>
                   </li>
               </ul>
           </div>
       </div>
   </nav>
   
   
   <?php

require_once("connection.php");


$result="SELECT S.careerid,S.position,S.vacancy,S.post
          FROM career S";


$result = mysql_query($result);


?>

   
    <div class="c1" style="margin-top:5%;">
            <div class="container">
                <div class="row">
                    <div class="col1 col-xl-12">

                        <table class="table table-hover">


                            <tr>
                                <th  style="text-align:center; color:blue;">Career ID</th>
                                <th  style="text-align:center; color:blue;">Position</th>
                                <th  style="text-align:center; color:blue;">Number Of Vacancy</th>
                                <th  style="text-align:center; color:blue;">Details</th>
                               
                            </tr>

                            <?php

      while ($res = mysql_fetch_array($result)) {

             ?>

                                <tr>

                                    <td>
                                        <?php echo $res['careerid']; ?>
                                    </td>
                                    <td>
                                        <?php echo $res['position']; ?>
                                    </td>
                                    <td>
                                        <?php echo $res['vacancy']; ?>
                                    </td>
                                    <td>
                                        <?php echo $res['post']; ?>
                                    </td>
                                    
                                </tr>


                                <?php


      }


    ?>




                        </table>
                    </div>
                </div>
            </div>
        </div>

   
   
   
   
   
   
   
   
   
   
   
   
   
   
    </body>
</html>