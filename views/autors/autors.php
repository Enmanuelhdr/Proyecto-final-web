<?php
    require_once("../../templates/head.php");
    require_once("../../controllers/autorsController.php");
    $obj = new autorsController();
    $autors = $obj -> showAutors();
    /* print_r($obj -> showAutors()); */
    
?>
<main>
    <h2 class="display-1 mt-5 pt-5 text-center fw-normal">Catalogo de Autores</h2>
    <hr class="mx-5 px-5">
    <h3 class="display-3 my-5 py-5 text-center">Autores celebres</h3>
    <div class="container mb-3">
        <div class="row g-3">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <img src="http://localhost/Proyecto-final-web/assets/img/home/home-img-slider-02.jpg" alt="" srcset="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Libros</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, iusto ea dolore optio dolor maiores sequi ex animi, vel consequatur sed est earum magni quasi quisquam veritatis quo totam labore?</p>
                    </div>
                </div>
                
            </div>
            <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
                    <img src="http://localhost/Proyecto-final-web/assets/img/home/home-img-slider-03.jpg" alt="" srcset="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Libros</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, iusto ea dolore optio dolor maiores sequi ex animi, vel consequatur sed est earum magni quasi quisquam veritatis quo totam labore?</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
                    <img src="http://localhost/Proyecto-final-web/assets/img/home/home-img-slider-04.jpg" alt="" srcset="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Libros</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, iusto ea dolore optio dolor maiores sequi ex animi, vel consequatur sed est earum magni quasi quisquam veritatis quo totam labore?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr class="mx-5 px-5">
    <h3 class="display-3 my-5 py-5 text-center">Listado de autores</h3>
    <div class="container mb-3">
        <div class="row g-3">
        <?php foreach($autors as $autor){?>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <img src="http://localhost/Proyecto-final-web/assets/img/home/home-img-slider-02.jpg" alt="" srcset="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $autor['nombre']; ?> <?php echo $autor['apellido']; ?></h5>
                        <h5 class="card-title"><?php echo $autor['telefono']; ?></h5>
                        <h5 class="card-title"><?php echo $autor['direccion']; ?></h5>
                        <h5 class="card-title"><?php echo $autor['ciudad']; ?></h5>
                        <h5 class="card-title"><?php echo $autor['estado']; ?></h5>
                        <h5 class="card-title"><?php echo $autor['pais']; ?></h5>
                        <h5 class="card-title"><?php echo $autor['cod_postal']; ?></h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, iusto ea dolore optio dolor maiores sequi ex animi, vel consequatur sed est earum magni quasi quisquam veritatis quo totam labore?</p>
                        <a href="#" class="btn btn-primary">Ver información</a>
                    </div>
                </div>  
            </div>
        <?php }?>
        </div>
    </div>
</main>
<?php
    require_once("../../templates/footer.php");  
?>