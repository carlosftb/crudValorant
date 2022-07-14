<?php 

require_once ('./Database.php');

if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: index.php?status=error');
    exit;
}

//Consulta dados do Agente com o id que recebeu via GET e armazena na variavel $informacoes
$dados = selectAgente($_GET["id"]);

$informacoes = mysqli_fetch_array($dados);

                switch ($informacoes["classe"]){
                    case 'c':
                        $informacoes["classe"] = "Controlador";
                    break;
                    case 'd':
                        $informacoes["classe"] = "Duelista";
                    break; 
                    case 'i':
                        $informacoes["classe"] = "Iniciador";
                    break;   
                    case 's':
                        $informacoes["classe"] = "Sentinela";
                    break;
                }  

require_once ('./AutoPreencher.php');

if(isset($informacoes['id'],$_POST['codinome'],$_POST['nacionalidade'],$_POST['classe'],$_POST['radiante'])){
    $_POST['classe'] = substr($_POST['classe'],0,1);
    editarAgente($informacoes['id'],$_POST['codinome'],$_POST['nacionalidade'],$_POST['classe'],$_POST['radiante']);
    header ('location: index.php');

}


?>