<?php 
  require_once ('./Database.php');
  require_once('./confirmar_exclusao.php');  


  if(isset($_POST['excluir'])){
        deletarAgente ($_GET['id']);
        echo $_POST['excluir'];
        header ('location: index.php?status=error');
        exit;
  }


?>