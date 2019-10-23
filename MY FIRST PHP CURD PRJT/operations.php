
<?php
$host = "localhost";
 $user = "id8941657_dbuser";
 $password = "siva@";
 $database = "id8941657_databasename";

 $id = "";
 $name = "";
 $address = "";
 //$address = "";

 mysqli_report(MYSQLI_REPORT_ERROR|MYSQLI_REPORT_STRICT);

 try{
     $connect = mysqli_connect($host, $user, $password, $database);
 } catch (Exception $ex) {
     echo 'Error';
 }

 function getPosts(){
     $posts = array();
     $posts[0] = $_POST['id'];
     $posts[1] = $_POST['name'];
     $posts[2] = $_POST['address'];
    // $posts[3] = $_POST['address'];
     return $posts;
 } 
        
        echo 'curd';
        //search
        if(isset($_POST['search']))
{
    $data = getPosts();
    
    $search_Query = "SELECT * FROM siva WHERE id = $data[0]";
    //$search_Query = "SELECT * FROM siva WHERE address = $data[2]";
    $search_Result = mysqli_query($connect, $search_Query);
    
    if($search_Result)
    {
        if(mysqli_num_rows($search_Result))
        {
            while($row = mysqli_fetch_array($search_Result))
            {
                $id = $row['id'];
                $name = $row['name'];
                $address = $row['address'];
                //$address = $row['address'];
            }
        }else{
            echo 'No Data For This Id';
        }
    }else{
        echo 'Result Error';
    }
}

//insert
if(isset($_POST['insert'])){
    $data = getPosts();
    $insert_Query = "INSERT INTO `siva`(`id`, `name`, `address`) VALUES ('$data[0]','$data[1]','$data[2]')";
    try {
        $insert_Result = mysqli_query($connect,$insert_Query);
        if($insert_Result){
            if(mysqli_affected_rows($connect) > 0){
                echo 'Data Inserted';
            }
            else{
                echo 'Data Not Inserted';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Insert'.$ex->getMessage();
    }

}

//delete
if(isset($_POST['delete'])){
    $data = getPosts();
    $delete_Query = "DELETE FROM `siva` WHERE `id` = $data[0]";
    try {
        $delete_Result = mysqli_query($connect,$delete_Query);
        if($delete_Result){
            if(mysqli_affected_rows($connect) > 0){
                echo 'Data deleted';
            }
            else{
                echo 'Data Not deleted';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Update'.$ex->getMessage();
    }

}

//update
if(isset($_POST['update'])){
    $data = getPosts();
    $update_Query = "UPDATE `siva` SET `id`='$data[0]',`name`='$data[1]',`address`= '$data[2]' WHERE `id` = $data[0]";
    try {
        $update_Result = mysqli_query($connect,$update_Query);
        if($update_Result){
            if(mysqli_affected_rows($connect) > 0){
                echo 'Data updated';
            }
            else{
                echo 'Data Not Updated';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Update'.$ex->getMessage();
    }

}
//retrive
//if (isset($_POST['retrive'])){
    //$data= getPosts();
   // $retrive_query="SELECT * from 'siva'";
    //try{
       // $retrive_Result =mysqli_query($connect,$retrive_query);
        //if($retrive_Result){
           // if(mysqli_affected_rows($connect)>0){
               // echo 'data retrived';
          //  }
            //else{
               // echo 'data not retrived';
           // }
       // }
    //}catch (Exception $ex) {
       // echo 'Error Update'.$ex->getMessage();
    //}


      //      }
            
        
    

?>