<?php
require_once("layouts/header.php");
?>
<h1 class="text-center" >EDITAR</h1>
<form action="" method="get">
            <?php foreach ($dato as $key =>$value );{ 
            foreach($value as $v) { ?>    
    <input type="text" value="<?= $v['nombre'] ?>" name="nombre"><br>
    <input type="text" value="<?= $v['precio'] ?>" name="precio"><br>
    <input type="hidden" value="<?= $v['id'] ?>" name="id"><br>
    <input type="submit" class="btn" value="ACTUALIZAR" name="btn"><br>
    <input type="hidden" name="m" value="update">
    <?php } 
    } ?>
</form>
<?php
require_once("layouts/footer.php");