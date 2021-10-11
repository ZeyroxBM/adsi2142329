<?php 

include('db.php');

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $query ="DELETE FROM clientes WHERE idCliente = $id";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die('Query Failed');
    }

    $_SESSION['message'] = 'task removed successfully';
    $_SESSION['message_type'] = 'danger';

    header("location:index.php");

}

?>