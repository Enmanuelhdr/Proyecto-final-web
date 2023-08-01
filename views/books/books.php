<?php
    require_once("../../templates/head.php");
    require_once("../../controllers/booksController.php");
    $obj = new booksController();
    $books = $obj -> showBooks();
    /* print_r($obj -> showBooks()); */
?>

<main>
    <h2 class="display-1 mt-5 pt-5 text-center fw-normal">Catalogo de libros</h2>
    <hr class="mx-5 px-5">
    <h3 class="display-3 my-5 py-5 text-center">Entregas recientes</h3>
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
    <h3 class="display-3 my-5 py-5 text-center">Listado de libros</h3>
    <div class="container mb-3">
        <div class="row g-4">
        <?php foreach($books as $book){?>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <img src="http://localhost/Proyecto-final-web/assets/img/home/home-img-slider-02.jpg" alt="" srcset="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $book['titulo']; ?></h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo ucfirst($book['tipo']); ?></h6>
                        <p class="card-text"><?php echo $book['notas']; ?></p>
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