<?php include 'template/header.php' ?>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-7">
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
                  <tr class="">
                    <td scope="row">1</td>
                    <td>Miller Jaramillo</td>
                    <td>25</td>
                    <td>Acuario</td>
                    <td>Editar</td>
                    <td>Elimnar</td>

                  </tr>
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
        <form action="" class="p-2" method="POST" action="registrar.php">
        <div class="mb-3">
          <label class="form-label">Nombre: </label>
          <input type="text" class="form-control" name="txtNombre" autofocus>
        </div>
        <div class="mb-3">
          <label class="form-label">Edad: </label>
          <input type="number" class="form-control" name="txtEdad" autofocus>
        </div>
        <div class="mb-3">
          <label class="form-label">Signo: </label>
          <input type="text" class="form-control" name="txtSigno" autofocus>
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

