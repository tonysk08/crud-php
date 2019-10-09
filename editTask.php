<?php
    include("model\pool.php");

    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        //$query = "DELETE FROM task where id=$id";
        //$result=mysqli_query($conn,$query);

        if(!$result)
        {
            $_SESSION['Message'] = "Error Editing the task";
            $_SESSION['Message_type'] = "danger";
        }
        else
        {
            $_SESSION['Message'] = "Editing task successful";
            $_SESSION['Message_type'] = "success";
        }
        header("Location: index.php");
    }
?>