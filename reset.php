<?php include("layouts/header.php"); ?>

<div class="container" >
     <div class="row">
        <div class="col-md-4"></div>
         <div class="col-md-8">  
             <div class="card my-5">
                 <div class="card-body">
                     <div class="card-title ">
                         <h1 class="text-center"  style="color: black;">Crear usuario</h1>

                     </div>
                     <form class="form" action="code_php/crear_usuario.php" method="post">

                         <div class="form-group my-3">
                             <input class="input-group form-control" name="nombre" placeholder="nombre">
                         </div>
                         <div class="form-group my-3">
                             <input class="input-group form-control"  name="email" placeholder="email">
                         </div>
                         <div class="form-group my-3">
                             <input class="input-group form-control" name="password" placeholder="password">
                         </div>
                         <button class=" btn btn-info">guardar</button>
                     </form>
                 </div>
             </div>

         </div>
        
     </div>
 </div>
 <?php include("layouts/footer.php"); ?>