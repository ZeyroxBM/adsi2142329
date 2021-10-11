<?php 

include ('db.php');

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $query = " SELECT * FROM clientes WHERE idCliente = $id";
    $result = mysqli_query ($conn, $query);
    
    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $tipoDoc = $row['tipoDoc'];
        $numDoc = $row['numDoc'];
        $nombres = $row['nombres'];
        $apellidos = $row['apellidos'];
        $correo = $row['correo'];
        $telefono = $row['telefono'];
    }
}

if(isset($_POST['update'])){
    $id = $_GET['id'];
    $tipoDoc = $_POST['tipoDoc'];
    $numDoc = $_POST['numDoc'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];

    $query = "UPDATE clientes set tipoDoc = '$tipoDoc', numDoc = '$numDoc', nombres = '$nombres', apellidos = '$apellidos', correo = '$correo', telefono = '$telefono' WHERE idCliente = $id ";
    mysqli_query($conn, $query);

    header('location:index.php');

}

?>

<?php include('includes/header.php') ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-6 mx-auto text-center">
            <div class="card card-body">
                <form method="POST" action="edit.php?id=<?php echo $_GET['id'];?>">

                    <div class="form-group">
                        <input type="text" name="tipoDoc" value="<?php echo $tipoDoc; ?>" class="form-control" placeholder="update tipoDoc">
                    </div><br>

                    <div class="form-group">
                        <input type="number" name="numDoc" value="<?php echo $numDoc; ?>" class="form-control" placeholder="update numero de documento">
                    </div><br>

                    <div class="form-group">
                        <input type="text" name="nombres" value="<?php echo $nombres; ?>" class="form-control" placeholder="update nombres">
                    </div><br>

                    <div class="form-group">
                        <input type="text" name="apellidos" value="<?php echo $apellidos; ?>" class="form-control" placeholder="update apellidos">
                    </div><br>

                    <div class="form-group">
                        <input type="email" name="correo" value="<?php echo $correo; ?>" class="form-control" placeholder="update correo">
                    </div><br>

                    <div class="form-group">
                        <input type="number" name="telefono" value="<?php echo $telefono; ?>" class="form-control" placeholder="update telefono">
                    </div><br>

                    <button type="submit" class=" btn btn-success" name="update">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>



<?php include('includes/footer.php') ?>