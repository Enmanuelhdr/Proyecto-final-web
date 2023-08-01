<?php
    require_once("../../templates/head.php");
    require_once("../../controllers/autorsInfoController.php");
    $obj = new autorsInfoController();
    print_r($obj -> mostrarInformacion())
?>
<main>

</main>
<?php
    require_once("../../templates/footer.php");  
?>