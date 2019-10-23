<?php include("operations.php");
 //include("retrive.php");
?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->



<html>
    <head>
        <!<meta charset="UTF-8">
        <title>PHP CRUD</title>
    </head>
    <body>
        
        <form  method = "post" action = "index.php">
            
            <input type ="number" name ="id" placeholder="Id" value= "<?php echo $id;?>" ><br><br>
            <input type ="text" name ="name" placeholder=" Name" value="<?php echo $name;?>"><br><br>
            <input type ="text" name ="address" placeholder="address" value="<?php echo $address;?>"><br><br>
            
        
        <div>
            <input type="submit" name="insert" value="Add">
            <input type="submit" name="update" value="Update">
            <input type="submit" name="delete" value="Delete">
            <input type="submit" name="search" value="Search">
            
            <ul>

<li><a href="retrive.php">RETRIVE</a></li>

</ul>
            
           
            
            
           
        </div>
        </form>
    </body>
</html>


