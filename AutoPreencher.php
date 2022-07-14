<html>
    <main>
        <form method="post">
                
                <div class="form-group">
                    <label> Codinome   </label>
                    <input type="text" class="form-control" name="codinome" value="<?=$informacoes['codinome']?>">
                <div> 

                <div class="form-group">
                    <label> Nacionalidade</label>
                    <input type="text" class="form-control" name="nacionalidade" value="<?=$informacoes['nacionalidade']?>">
                <div>

                <div class="form-group">
                    <label> Classe</label>
                    <input type="text" class="form-control" name="classe" value="<?=$informacoes['classe']?>">
                <div>

                <div class="form-group">
                    <label>É um radiante</label>
                        <div>
                            <div class="form-check form-check-inline">
                            <label class="form-control">
                                <input type="radio" name="radiante" value="s" checked> Sim
                            </label>     
                            </div>
                            
                            <div class="form-check form-check-inline">
                            <label class="form-control">
                                <input type="radio" name="radiante"  value="n" <?=$informacoes['radiante'] == "n" ? "checked" : "" ?>> Não
                            </label>
                            </div>     
                        </div>
                <div>

                <div class="form-group">
                    <button type="submit" class="btn">Enviar</button>
                </div>                
                <section>
                    <a href="index.php">
                        <button class="btn"><a href="index.php"> Voltar 
                    </a>
                    </button>
                </section>
            </form>
        </main>
    </html>