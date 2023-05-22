<?php ob_start();

include 'liste.php';

?>

<?php

if(isset($_GET['espagnol'])){
    include 'espagnol.php';
}elseif(isset($_GET['anglais'])){
    include 'anglais.php';
}else{
    include 'français.php';
} 
?>

<?php
    $content =ob_get_clean();
    require "template.php";
?>
