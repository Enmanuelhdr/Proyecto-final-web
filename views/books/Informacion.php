<?php
    require_once("../../templates/head.php");
    require_once("../../controllers/booksInfoController.php");
    $obj = new booksInfoController();
    print_r($obj -> mostrarInformacion())
?>
<main>

</main>
<?php
    require_once("../../templates/footer.php");  
?>