<html>
    <main>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <form method="post">
                
                <div class="mb-3">
                    <label class="form-label">Codinome:</label>
                        <input type="text" class="form-control" name="codinome" value="">
                </div>

                <div class="mb-3">
                    <label class="form-label">Nacionalidade:</label>
                        <input type="text" class="form-control" name="nacionalidade" value="">
                </div>
                <div class="col-auto">
                    <label class="visually-hidden" ">Classes</label>
                    <select class="form-select" name="classe" >
                    <option value="c">Controlador</option>
                    <option value="d">Duelista</option>
                    <option value="i">Iniciador</option>
                    <option value="s">Sentinela</option>
                    </select>
                </div>
                    
                

                <div class="form-group">
                    <label>É um radiante</label>
                        <div>
                            <div class="col-auto">
                            <label class="col-auto">
                                <input type="radio" name="radiante" value="s"checked> Sim
                            </label>     
                            </div>
                            
                            <div class="col-auto">
                            <label class="col-auto">
                                <input type="radio" name="radiante"  value="n" > Não
                            </label>
                            </div>     
                        </div>
                </div>
                <div class="d-flex flex-nowrap">
                        <div class="order-2 p-2">
                        <a href="index.php">
                            <button  type="button" class="btn btn-secondary"> Voltar </button>
                        </a>
                            <button type="submit" class="btn btn-success"> Enviar </button>
                        </div>                
                        
                        </div>
                </div>
            </form>
        </main>
    </html>
