<?php include("model\pool.php"); ?>
<?php include("include\header.php"); ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <?php if(isset($_SESSION['Message'])){?>
                <div class="alert alert-dismissible alert-<?= $_SESSION['Message_type']?>">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <?= $_SESSION['Message']?>
                </div>
            <?php session_unset(); } ?>
           <div class="card card-body">
                <form action="saveTask.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Titutlo" autofocus required>
                    </div>
                    <div class="form-group">
                        <textarea name="description" rows="2" class="form-control" placeholder="Descricion" required></textarea>
                    </div>
                    <input type="submit" class="btn btn-outline-success btn-block" name="saveTask" value="save Task">
                </form>
           </div>
        </div>

        <div class="col-md-8">
        <table class="table">
            <thead>
                <tr class="table-dark">
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Create at</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody class="table-hover">
                <?php
                    $query= "SELECT * FROM TASK";
                    $result_query=mysqli_query($conn,$query);

                    while($row = mysqli_fetch_array($result_query)){?>
                        <tr class="table-active">
                            <td><?php echo $row['title']?></td>
                            <td><?php echo $row['description']?></td>
                            <td><?php echo $row['created_at']?></td>
                            <td>
                                <a href="editTask.php?id=<?php echo $row['id']?>" class="btn btn-outline-warning"><i class="fas fa-pen"></i></a>
                                <a href="deletTask.php?id=<?php echo $row['id']?>" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                
            </tbody>
            </table> 
        </div>
    </div>
</div>

<?php include("include\Footer.php"); ?>