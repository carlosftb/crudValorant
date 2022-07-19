<html>
    <main>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <form method="post">
                
                <div class="mb-3">
                    <label class="form-label">Codinome:</label>
                        <input type="text" class="form-control" name="codinome" value="<?=$informacoes['codinome']?>" placeholder="Exemplo: Kill Joy"?>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nacionalidade:</label>
                        <input type="text" class="form-control" name="nacionalidade" value="<?=$informacoes['nacionalidade']?>" placeholder="Exemplo: Brasil"?>
                </div>
                
                <div class="col-auto">
                    <label class="visually-hidden">Classes</label>
                    <select class="form-select" name="classe" >
                    <?=$informacoes['classe'] = strtolower($informacoes['classe'])?>
                    <option value="c" <?=$informacoes['classe'] == "controlador" ? "selected" : "" ?>>Controlador</option>
                    <option value="d" <?=$informacoes['classe'] == "duelista" ? "selected" : "" ?>>Duelista</option>
                    <option value="i" <?=$informacoes['classe'] == "iniciador" ? "selected" : "" ?>>Iniciador</option>
                    <option value="s" <?=$informacoes['classe'] == "sentinela" ? "selected" : "" ?>>Sentinela</option>
                    </select>
                </div>
                

                <div class="form-group">
                    <label>É um radiante</label>
                        <div>
                            <div class="col-auto">
                            <label class="col-auto">
                                <input type="radio" name="radiante" value="s" checked> Sim
                            </label>     
                            </div>
                            
                            <div class="col-auto">
                            <label class="col-auto">
                                <input type="radio" name="radiante"  value="n" <?=$informacoes['radiante'] == "n" ? "checked" : "" ?>> Não
                            </label>
                            </div>     
                        </div>
                        
                </div>     
                <div class="d-flex flex-nowrap">
                        <div class="order-2 p-2">
                            <button type="submit" class="btn btn-success"> Enviar </button>
                        </div>                
                        <div class="order-1 p-2" >
                            <button class="btn btn-secondary"> 
                                <a href="index.php" class="page-link disabled"> Voltar </button></a>
                        </div>
                </div>
            </form>
        </main>
    </html>