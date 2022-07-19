<main>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <h2 class="mt-3">Excluir Agente</h2>

    <form method="post">

        <div class="form-group">
        <div class="callout-warning"><p>Você deseja realmente excluir o agente <?= $_GET['codinome']?> ?<p> 
        
         </div>
         

         
  
        </div>

        <div class="form-group" class="d-flex flex-nowrap">

        <a href="index.php">
            <button  type="button" class="btn btn-secondary"> Cancelar </button>
        </a>

            <button type="submit" name ="excluir" class="btn btn-danger">Excluir</button>
        </div>                

    </form>

</main>