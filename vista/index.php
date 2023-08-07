<?php
require_once("layouts/header.php");
?>
<a href="index.php?m=nuevo" class="btn">NUEVO</a>
<table>
    <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>ACCION</th>
    </tr>
    <tbody>
        <?php
        if (!empty($dato)) {
            foreach ($dato as $value ){?>  
            <?php foreach($value as $v) { ?>                      
            <tr>
                <td><?= $v['id'] ?></td>
                <td><?= $v['nombre'] ?></td>
                <td><?= $v['precio'] ?></td>   
                <td>
                    <a class="btn" href="index.php?m=editar&id=<?= $v['id']?>">Editar</a>
                    <a class="btn" href="index.php?m=eliminar&id=<?= $v['id']?>" onclick="return confirm('En verdad desea eliminar?')">Eliminar</a>
                    <?php } ?>
                    <?php } ?>
                    <?php } ?>
                </td>         
            </tr>
    </tbody>
</table>
<?php
require_once("layouts/footer.php");