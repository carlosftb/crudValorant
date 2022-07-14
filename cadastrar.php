<?php
require_once ('./Database.php');
require_once ('./formulario.php');






if(isset($_POST['codinome'],$_POST['nacionalidade'],$_POST['classe'],$_POST['radiante'])){
    $_POST['classe'] = substr($_POST['classe'],0,1);
    cadastrarAgente($_POST['codinome'],$_POST['nacionalidade'],$_POST['classe'],$_POST['radiante']);
}
?>