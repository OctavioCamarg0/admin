


                    <div class="mb-3">
                        <label for="titulo" class="form-label">Titulo</label>
                        <input type="text" name="titulo" id="titulo" value="<?=$produto->titulo ?? "" ?>" class="form-control"
                        placeholder="Digite o titulo do produto">
                    </div>
                    
                    <div class="mb-3">
                        <label for="descricao" class="form-label">Descricao</label>
                        <input type="text" name="descricao" id="descricao" value="<?=$produto->descricao ?? "" ?>" class="form-control"
                        placeholder="Descricao do produto">
                    </div>
                    <div class="mb-3">
                        <label for="valor" class="form-label">Valor</label>
                        <input type="text" id="valor" value="<?=$produto->valor ?? "" ?>" name="valor" placeholder="R$99,99" maxlength="14">
                    </div>
                    
                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto</label>
                        <input type="file" name="foto" id="foto" class="form-control">
                    </div>

                    
                    


                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <a href="index.php" class="btn btn-secondary">Cancelar</a>
             