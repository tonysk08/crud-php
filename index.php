<?php include("model\pool.php"); ?>
<?php include("include\header.php"); ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
           <div class="card card-body">
                <form action="saveTask.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Titutlo" autofocus>
                    </div>
                    <div class="form-group">
                        <textarea name="description" rows="2" class="form-control" placeholder="Descricion"></textarea>
                    </div>
                    <input type="submit" class="btn btn-outline-success btn-block" name="saveTask" value="save Task">
                </form>
           </div> 
           <?php if(isset($_SESSION['Message'])){?>
                <div class="alert alert-dismissible alert-<?= $_SESSION['Message_type']?>">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <?= $_SESSION['Message']?>
                </div>
            <?php session_unset(); } ?>
        </div>

        <div class="col-md-8">
        </div>
    </div>
</div>

<?php include("include\Footer.php"); ?>