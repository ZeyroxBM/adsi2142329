<?php 

include("db.php");

if(isset($_POST['save_task'])){
    $tipoDoc = $_POST['tipoDoc'];
    $numDoc = $_POST['numDoc'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    

    $query = "INSERT INTO clientes (tipoDoc, numDoc, nombres, apellidos, correo, telefono) VALUES ('$tipoDoc', '$numDoc', '$nombres', '$apellidos', '$correo', '$telefono')";
    $result = mysqli_query($conn, $query);

    if (!$result){
        die("query failed");
    }

    $_SESSION['message'] ='task saved successfully';
    $_SESSION['message_type']= 'success';

    header("location:index.php");
}
?>