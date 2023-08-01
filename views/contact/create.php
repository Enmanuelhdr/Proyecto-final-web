<?php
require_once("../../templates/head.php");
?>

<main>
    <h2 class="display-1 mt-5 pt-5 text-center fw-normal">Contacto</h2>
    <hr class="mx-5 px-5">
    <div class="container my-4">
        <div class="row">
            <!-- /Proyecto-final-web/controllers/contactController.php  -->
            <form action="/Proyecto-final-web/controllers/contactController.php" method="POST" autocomplete="off">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="exampleInputPassword1" placeholder="Ingrese su nombre">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="exampleInputPassword1" class="form-label">Asunto</label>
                        <input type="text" class="form-control" name="asunto" id="exampleInputPassword1" placeholder="Ingrese el asunto de su mensaje">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="correo" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="sucorreo@gmail.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Comentario</label>
                    <textarea class="form-control" name="comentario" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Fecha</label>
                    <input type="text" class="form-control" name="fecha" id="exampleInputPassword1" placeholder="Ingrese el asunto de su mensaje">
                </div>
                <button type="submit" class="btn btn-primary px-4">Enviar</button>
                <a href="http://localhost/Proyecto-final-web/index.php" class="btn btn-danger px-4">Cancelar</a>
            </form>
        </div>
    </div>

</main>

<?php
require_once("../../templates/footer.php");
?>