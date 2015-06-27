<?php
session_start();

if (isset($_SESSION['user'])) {
    ?>

    <!DOCTYPE html>
    <html lang="en">
        <head>
            <title>Library</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <script src="js/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
        </head>
        <body>
            <?php include 'navbar.php' ?>
            <div class="container">                
                <?php if (($_GET["msg"]==1)) {
                    ?>
                    <div class = "alert alert-success" role = "alert">
                        <span class = "glyphicon glyphicon-exclamation-sign" aria-hidden = "true"></span>
                        <span class = "sr-only">Error:</span>
                        Successful Operation 
                    </div>
                    <?php
                } else if(isset($_GET["msg"])) {
                    ?>
                    <div class = "alert alert-danger" role = "alert">
                        <span class = "glyphicon glyphicon-exclamation-sign" aria-hidden = "true"></span>
                        <span class = "sr-only">Error:</span>
                        Error during Operation
                    </div>
                    <?php
                }
                ?>
                <h2>Books Registration</h2>
                <form class="form-horizontal" method="post" action="Control/actionbooks.php?act=insert" role="form" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="text">Title:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="title" name="title" required="true" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="text">IBSN:</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="ibsn" name="ibsn">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="text">Pages:</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="pages" name="pages">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="text">Publisher:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="publisher" name="publisher">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="text">Release Year:</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="year" name="year">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="text">Language:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="language" name="language">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="text">Barcode:</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="barcode" name="barcode">
                        </div>
                    </div>   
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="text">Purchase Date:</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="purchase_date" name="purchase_date" required="true">
                        </div>
                    </div> 
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="text">Author:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="author" name="author" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="text">Edition:</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="edition" name="edition">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="text">Cover:</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="cover" name="cover" required="true">
                        </div>
                    </div>
                    <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </body>
    </html>
    <?php
} else {
    header("Location:index.php");
}
?>