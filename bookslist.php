<?php
session_start();

if (isset($_SESSION['user'])) {
    include_once 'DAO/BooksDAO.php';
    include_once 'Model/Books.php';

    $bdao = new BooksDAO();

    $be = $bdao->listByCondition(" and 2=2 ");
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
                <h2>Books List</h2>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Ibsn</th>
                            <th>Pages</th>
                            <th>Publisher</th>
                            <th>Year</th>
                            <th>Language</th>
                            <th>Barcode</th>
                            <th>Purchase Date</th>
                            <th>Author</th>
                            <th>Edition</th>                                            
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $cond = true;
                        foreach ($be as $b) {
                            echo "<tr>";
                            echo "<td>" . $b->getId() . "</td>";
                            echo "<td>" . $b->getTitle() . "</td>";
                            echo "<td>" . $b->getIbsn() . "</td>";
                            echo "<td>" . $b->getPages() . "</td>";
                            echo "<td>" . $b->getPublisher() . "</td>";
                            echo "<td>" . $b->getYear() . "</td>";
                            echo "<td>" . $b->getLanguage() . "</td>";
                            echo "<td>" . $b->getBarcode() . "</td>";
                            echo "<td>" . $b->getPurchase_date() . "</td>";
                            echo "<td>" . $b->getAuthor() . "</td>";
                            echo "<td>" . $b->getEdition() . "</td>";
                            ?>                       
                        <td><a href = "">Edit</a><span> </span><a href = "">Delete</a></td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </body>
    </html>
    <?php
} else {
    header("Location:index.php");
}
?>