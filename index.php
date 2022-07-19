<?php
require_once ('./Database.php');
?>
<!DOCTYPE HTML>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<header>
<h1 class="text-center">Catalogo de informações dos agentes</h1><br>
</header>

<body>

<main>
    <section>
        <table class="table table-striped-columns">   
        <thread>
            <tr>
                <th>ID</th>
                <th>Codiome</th>
                <th>Nacionalidade</th>
                <th>Classe</th>
                <th>É um radiante?</th>
                <th> </th>
                <th> </th>
            </tr>
        </theread>
        <tbody>
        <?php  
        $consulta = selectAgentes();  //chama a função selectAgentes e armazena na variavel $consulta 
            while($dados = mysqli_fetch_array($consulta)) {//O laço vai ocorrer ENQUANTO houver registros da busca realizada
                $id = $dados["id"];
                $codinome = $dados["codinome"];
                $nacionalidade = $dados["nacionalidade"];
                switch ($dados["classe"]){
                    case 'c':
                        $classe= "Controlador";
                    break;
                    case 'd':
                        $classe= "Duelista";
                    break; 
                    case 'i':
                        $classe= "Iniciador";
                    break;   
                    case 's':
                        $classe= "Sentinela";
                    break;
                }  

                $dados["radiante"] == "s" ? ($radiante = "Sim") : ($radiante = "Não");
                    echo "<tr>"
                        . "<td>$id</td>"
                        . "<td>$codinome</td>"
                        . "<td>$nacionalidade</td>"
                        . "<td>$classe</td>"
                        . "<td>$radiante</td>"
                        . "<td><a href=editar.php?id=$id> <div align='center'><button type='button' class='btn btn-outline-primary'> Editar </button></div></a> </td>"
                        . "<td><a href=deletar.php?id=$id&codinome=$codinome><div align='center'><button type='button' class='btn btn-outline-danger'> Deletar </button></div></a></td>"
                        . "</tr>";//Exibe os dados capturados na busca

                }
            
        ?>
        </tbody>    
        </table>
    </section> 
    
    <section>
        <a href="cadastrar.php"> <button class="btn btn-success">Novo agente </button> </a>  
    </section>   

</main>

</body>

</html>