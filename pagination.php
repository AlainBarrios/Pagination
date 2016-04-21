<?php
require 'conn.php';

$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1 ;
$postPorPagina = 5;

$inicio  = ($pagina > 1) ? ($pagina*$postPorPagina - $postPorPagina): 0;

$articulos = $conn->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos LIMIT $inicio, $postPorPagina");

$articulos->execute();
$articulos = $articulos->fetchAll();

$totalArticulos = $conn->query('SELECT FOUND_ROWS() as total');
$totalArticulos = $totalArticulos->fetch()['total'];

$totalPaginas = ceil($totalArticulos/$postPorPagina);

if(file_exists('document.txt')){

}
