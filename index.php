<?php include 'template/header.php' ?>

<?php 

    include_once "model/conexion.php";
    $sentencia = $bd -> query("select * from persona");
    $persona = $sentencia->fetchAll(PDO::FETCH_OBJ);
    



?>



<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-7">
      
      <!-- inicio alerta -->
      <?php
        if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'faltallenar'){

      ?>

      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong> ¡Ojo Pues...!</strong> Llena todos los campos
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
      </div>

      <?php
        }
      ?>
      
      <?php
        if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado'){

      ?>

      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong> ¡Registrado...!</strong> Se ha registrado exitosamente 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
      </div>

      <?php
        }
      ?>
      <?php
        if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'error'){

      ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong> ¡Error...!</strong> Vuelve a Intentar
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
      </div>
      <?php
        }
      ?>

<?php
        if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'editado'){

      ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong> ¡Perfecto...!</strong> El registro ha sido actualizado exitosamente
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
      </div>
      <?php
        }
      ?>



      <!-- fin alerta -->

      <div class="card">
        <div class="card-header">
          Lista Personas
        </div>
        <div class="p-4">
          <table class="table align-middle">
            
              
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Signo</th>
                    <th scope="col" colspan="2">Opciones</th>
                  </tr>
                </thead>

                <tbody>

                  <?php
                  foreach($persona as $dato){
                  ?>


                  <tr class="">
                    <td scope="row"><?php echo $dato->codigo;?></td>
                    <td><?php echo $dato->nombre;?></td>
                    <td><?php echo $dato->edad;?></td>
                    <td><?php echo $dato->signo;?></td>
                    <td class="text-success"><a href="editar.php?codigo=<?php echo $dato->codigo;?>"><i class="bi bi-pencil-square"></i></a></td>
                    <td class="text-danger"><i class="bi bi-trash-fill"></i></td>
                  </tr>

                  <?php
                  }
                  ?>

                </tbody>
          </table>

        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">
          Ingresar datos:
        </div>
        <form class="p-2" method="POST" action="registrar.php">
        <div class="mb-3">
          <label class="form-label">Nombre: </label>
          <input type="text" class="form-control" name="txtNombre" autofocus required>
        </div>
        <div class="mb-3">
          <label class="form-label">Edad: </label>
          <input type="number" class="form-control" name="txtEdad" autofocus required>
        </div>
        <div class="mb-3">
          <label class="form-label">Signo: </label>
          <input type="text" class="form-control" name="txtSigno" autofocus required>
        </div>
        <div class="d-grid">
          <input type="hidden" name="oculto" value="1">
          <input type="submit" class="btn btn-primary" value="Registrar">
        </div>
        </form>
      </div>
    </div>
  </div>
</div>


<?php include 'template/footer.php' ?>

