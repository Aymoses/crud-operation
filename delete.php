<?php 

include "config.php"; 

if (isset($_GET['deleteid'])) {

    $id = $_GET['deleteid'];
//delete query
    $sql = "DELETE FROM coursereg WHERE id=$id";

     $result = mysqli_query($conn, $sql);

     if ($result) {

        // echo "Record deleted successfully.";
        header('location:view.php');

    }else{
        die(mysqli_error($conn));
    }

} 

?>

