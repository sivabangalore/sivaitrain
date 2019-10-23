<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="contact.css">
  <style>
    .ccon2{
    margin-top: 5%;
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
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "mahpranto@outlook.com";
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $comment = $_REQUEST['comment'];
  
  if(!empty($email) || !empty($subject) || !empty($comment)){
       mail($admin_email, "$subject", $comment, "From:" . $email);
       echo"<script>swal({
                    title: 'Email Sent',
                    text: 'Thank You',
                    icon: 'success',
                    timer: 3000,
                    button: false,

                });</script>";
}
      else{
           echo"<script>swal({
                    title: 'Email Not Sent',
                    text: 'Please Fill Up All Field',
                    icon: 'error',
                    timer: 3000,
                    button: false,

                });</script>";
      }
 
}
  
 
  
?>

  

   <div class="ccon container">
<div class="jumbotron">
 <form method="post">
  <p class="cp1">Please Email Us</p>   

  <div class="form-group">
    <label class="cl1" for="email">Email address:</label>
    <input type="email" class="form-control" name="email" autocomplete="off" placeholder="Email">
  </div>

  <div class="form-group">
    <label class="cl1" for="subject">Subject:</label>
    <input type="text" class="form-control" name="subject" autocomplete="off" placeholder="Subject">
  </div>

 <div class="form-group">
    <label class="cl1" for="message">Enter Your Message:</label>
    <textarea class="form-control" name="comment" rows="7" placeholder="Message"></textarea>
  </div>

  <input type="submit" class="btn-success" value="Submit" />
  </form>
    </div>
    </div>

   <div class="ccon2 container">
      <div class="row">
      <div class="col-md-6">
       <p class="cp2"><label style="color:green;">House :</label> “Niloy” 3rd Floor (East),<br> 
<label style="color:green;">House :</label> 8/B, Road: 2/B, Sector#11,<br><label style="color:green;">Area :</label>Uttara, 
<br>
       
       
       <label style="color:green;">City :</label> Dhaka<br>
       <label style="color:green;">Postal Code :</label> 1230<br>
       <label style="color:green;">Country : </label>Bangladesh.</p>
          </div>
          <div class="col-md-6">
        <p class="cp2"><label style="color:green;">Email Address : </label>****************<br>
         <label style="color:green;">Mobile Number : </label> +880 1711 231552<br>
         <label style="color:green;">Telephone Number : </label>  *************<br>
         <label style="color:green;">Fax Number :</label>: *************</p>
          </div>
       </div>
   </div>   

</body>
</html>