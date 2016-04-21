<?php require 'php/paginacion.php';?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Paginacion</title>
</head>
<body>
    <div>
        <ul>
            <?php foreach($articulos as $articulo): ?>
            <li><?php echo $articulo['id'] . ' - ' . utf8_encode($articulo['articulo']) ?></li><br>
            <?php endforeach; ?>
        </ul>
        <ul>
            <?php if($pagina==1): ?>
                <li style="color: darkgray;">&laquo;</li>
            <?php else: ?>
                <li style="color: aqua"><a href="?pagina=<?php echo $pagina-1; ?>">&laquo;</a></li>
            <?php endif ?>

            <?php for($i=1;$i<=$totalPaginas;$i++) {
                if($i==$pagina){
                    echo "<li>$i</li>";
                }else{
                    echo "<li><a href='?pagina=$i'>$i</a></li>";
                }
            }
            ?>

            <?php if($pagina==$totalPaginas): ?>
                <li style="color: darkgray;">&raquo;</li>
            <?php else: ?>
                <li style="color: aqua"><a href="?pagina=<?php echo $pagina+1; ?>">&raquo;</a></li>
            <?php endif ?>
        </ul>
    </div>
</body>
</html>
