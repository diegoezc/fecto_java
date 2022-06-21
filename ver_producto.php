<?php include("layouts/header.php"); ?>

<div class="container-fluid my-5" style="margin-top: 150px;">

    <div class="row">

    <div class="col md-8">
    <div class="card">
    <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">nombre</th>
                <th scope="col">precio</th>
                <th scope="col">actualizar</th>
                <th scope="col">borrar</th>
            </tr>
            </thead>
            <tbody>
                <?php 

                $query = "SELECT * FROM productos";
                $result_precio = mysqli_query($connection, $query);

                while($row = mysqli_fetch_array($result_precio)){?>

                <tr>
                    <td><?php echo $row['ID']?></td>
                    <td><?php echo $row['nombre']?></td>
                    <td><?php echo $row['precio']?></td>

                    <td>
                        <a href="actualizar_producto.php?id=<?php echo $row['ID']?>"> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                            </svg>
                        </a>
                    </td>
                    <td>
                        <form action="code_php/borrar.php" method="post">
                            <input type="hidden"  name="ID" value="<?Php echo $row['ID'] ?>">
                            <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                        </svg>
                            </button>
                        </form>
                        
                    </td>
               
                </tr>

                <?php
                }
                
                ?>
            </tbody>
        </table>
    </div>
    </div>
    </div>



    </div>
</div>

<?php include("layouts/footer.php"); ?>