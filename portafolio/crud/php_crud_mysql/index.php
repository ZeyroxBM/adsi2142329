<?php include("db.php") ?>
<?php include("includes/header.php") ?>

<div class="container p-2">
    <div class="row">
        <div class="col-md-3">

            <?php if (isset($_SESSION['message'])){?>
            <div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message'] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php session_unset(); } ?>

            <div class="card card-body text-center">
                <form action="save_task.php" method="POST">

                    <div class="form-group">
                        <input type="text" name="tipoDoc" class="form-control" placeholder="tipo de Documento" autofocus>
                    </div><br>

                    <div class="form-group">
                        <input type="number" name="numDoc" class="form-control" placeholder="documento" autofocus>
                    </div><br>

                    <div class="form-group">
                        <input type="text" name="nombres" class="form-control" placeholder="Nombre" autofocus>
                    </div><br>

                    <div class="form-group">
                        <input type="text" name="apellidos" class="form-control" placeholder="apellido" autofocus>
                    </div><br>

                    <div class="form-group">
                        <input type="email" name="correo" class="form-control" placeholder="Correo Electronico" autofocus>
                    </div><br>

                    <div class="form-group">
                        <input type="number" name="telefono" class="form-control" placeholder="Numero telefonico" autofocus>
                    </div><br>

                    <input type="submit" class='btn btn-success btn-block ' name="save_task" value="enviar">
                </form>
            </div>
        </div>
        <div class="col-md-9 ">
            <table class="table table-bordered">
                <thead class='text-center'>
                    <tr>
                        <th>tipo doc</th>
                        <th>doc</th>
                        <th>nombre</th>
                        <th>apellido</th>
                        <th>correo</th>
                        <th>telefono</th>
                        <th>created at</th>
                        <th>accion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        
                        $query = "SELECT * FROM clientes ";                    
                        $result_tasks = mysqli_query($conn, $query);
                        
                        while($row = mysqli_fetch_array($result_tasks)) { 
                            ?>

                    <tr>
                        <td>
                            <?php echo $row['tipoDoc'] ?>
                        </td>
                        <td>
                            <?php echo $row['numDoc'] ?>
                        </td>
                        <td>
                            <?php echo $row['nombres'] ?>
                        </td>
                        <td>
                            <?php echo $row['apellidos'] ?>
                        </td>
                        <td>
                            <?php echo $row['correo'] ?>
                        </td>
                        <td>
                            <?php echo $row['telefono'] ?>
                        </td>
                        <td>
                            <?php echo $row['created_at'] ?>
                        </td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['idCliente'] ?>" class='btn btn-secondary'><i class="fas fa-marker"></i></a>

                            <a href="delete_task.php?id=<?php echo $row['idCliente'] ?>" class='btn btn-danger'><i class="far fa-trash-alt"></i></a>
                        </td>
                    </tr>


                    <?php  } ?>


                </tbody>
            </table>
        </div>
    </div>
</div>


<?php include("includes/footer.php") ?>