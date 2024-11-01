<?php 
    require 'partials/Config.php';

    $id_buku = $_GET['id'];
    $result = mysqli_query($conn, "DELETE FROM book WHERE id_buku = $id_buku");


    if(mysqli_affected_rows($conn) > 0) {
        header("Location:Books.php");
    }

?>