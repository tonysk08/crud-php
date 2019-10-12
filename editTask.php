<?php
    include("model\pool.php");
    include("include\header.php");

    if(isset($_GET['id']))
    {
        $id=$_GET['id'];

        $query = "SELECT * FROM task WHERE id=$id";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result)==1)
        {
            $row=mysqli_fetch_array($result);
            echo $row['title'];
        }
    }
?>


<?php include("include\Footer.php"); ?>