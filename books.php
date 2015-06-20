<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include 'navbar.html' ?>
        <div class="container">
            <h2>Books Registration</h2>
            <form class="form-horizontal" method="post" action="Control/actionbooks.php" role="form" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="text">Title:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="title" required="true" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="text">IBSN:</label>
                    <div class="col-sm-10">          
                        <input type="number" class="form-control" id="ibsn" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="text">Pages:</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="pages" >
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="text">Publisher:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="publisher">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="text">Release Year:</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="year" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="text">Language:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="language" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="text">Barcode:</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="barcode" >
                    </div>
                </div>   
                <div class="form-group">
                    <label class="control-label col-sm-2" for="text">Purchase Date:</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="purchase_date" required="true">
                    </div>
                </div> 
                <div class="form-group">
                    <label class="control-label col-sm-2" for="text">Author:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="author" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="text">Edition:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="edition" >
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