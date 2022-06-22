<?php include("layouts/header.php"); ?>


<div class="container" >
     <div class="row">
        <div class="col-md-4"></div>
         <div class="col-md-8">  
             <div class="card my-5">
                 <div class="card-body">
                     <div class="card-title ">
                         <h1 class="text-center"  style="color: black;">Crear Producto</h1>

                     </div>
                     <form class="form" action="code_php/crear_mercancia.php" method="post">

                         <div class="form-group my-3">
                             <input class="input-group form-control" name="nombre" placeholder="nombre">
                         </div>
                         <div class="form-group my-3">
                             <input class="input-group form-control"  name="cantidad" placeholder="cantidad">
                         </div>
                         <div class="form-group my-3">
                             <input class="input-group form-control"  name="categoria" placeholder="categoria">
                         </div>
                         <button class=" btn btn-info">guardar</button>
                     </form>
                 </div>
             </div>

         </div>
        
     </div>
 </div>
 <div>
    <h5><a href="ver_mercancia.php">ver tabla de mercancias</a></h5>
 </div>
    <?php include("layouts/footer.php"); ?>