<?php

    include("model\pool.php");

    $title = $_POST['title'];
    $describe = $_POST['description'];
    $query = "INSERT INTO task (title,description) VALUES ('$title','$describe')";
    
    if(isset($_POST['saveTask']))
    {
       $result= mysqli_query($conn,$query);

       if(!$result)
       {
           echo "query fail";
       }
       else
       {
           $_SESSION['Message'] = "saved task successful";
           $_SESSION['Message_type'] = "success";
           header("Location: index.php");
       }
    }
?>