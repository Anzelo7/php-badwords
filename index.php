<?php

    $object = $_GET["item"];

    $listaSpesa = 'Comprare ' . $object;


?>
<?php echo $listaSpesa ?>
<?php

    $none = str_replace($object, '***', $listaSpesa);

?>

<div>
    <?= $none ?>
</div>

<?php

    var_dump($_GET);

?>