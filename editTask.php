<?php
    include("model\pool.php");
    include("include\header.php");

    if(isset($_GET['id']))
    {
        $id=$_GET['id'];

        $query = "SELECT * FROM task WHERE id=$id";
        $result = mysqli_query($conn,$query);
        $row=mysqli_fetch_array($result);

        if(mysqli_num_rows($result)==1)
        {?>

        <div class="container p-4">
            <div class="col-md-6">
                <div class="row">
                <table class="table">
                    <thead>
                        <tr class="table-dark">
                        <th scope="col" style="text-align:center;">Edition</th>
                        </tr>
                    </thead>
                </table>
                </div>
            </div>
        </div>

<?php
            //echo $row['title'];
        }
    }
?>


<?php include("include\Footer.php"); ?>