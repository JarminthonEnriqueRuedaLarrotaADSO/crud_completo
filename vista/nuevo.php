<?php
require_once("layouts/header.php");
?>
<h1 class="text-center" >NUEVOP</h1>
<form action="" method="get">
    <input type="text" name="nombre"><br>
    <input type="text" name="precio"><br>
    <input type="submit" class="btn" value="GUARDAR" name="btn"><br>
    <input type="hidden" name="m" value="guardar">
</form>
<?php
require_once("layouts/footer.php");