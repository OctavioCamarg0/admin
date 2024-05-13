


                    <div class="mb-3">
                        <label for="NOME" class="form-label">Nome</label>
                        <input type="text" name="NOME" id="NOME" value="<?=$cliente->NOME ?? "" ?>" class="form-control"
                        placeholder="Digite seu nome">
                    </div>
                    
                    <div class="mb-3">
                        <label for="EMAIL" class="form-label">E-mail</label>
                        <input type="email" name="EMAIL" id="EMAIL" value="<?=$cliente->EMAIL ?? "" ?>" class="form-control"
                        placeholder="seuemail@provedor.com">
                    </div>
                    <div class="mb-3">
                        <label for="CPF" class="form-label">CPF</label>
                        <input type="text" id="CPF" value="<?=$cliente->CPF ?? "" ?>" name="CPF" placeholder="000.000.000-00" maxlength="14">
                    </div>
                    
                    <div class="mb-3">
                        <label for="TELEFONE" class="form-label">Telefone</label>
                        <input type="text" name="TELEFONE" id="TELEFONE" value="<?=$cliente->TELEFONE ?? "" ?>" class="form-control"
                        placeholder="(00) 0000-0000">
                    </div>
                    <div class="mb-3">
                        <label for="DATA_NASCIMENTO" class="form-label">Data de Nascimento</label>
                        <input type="date" name="DATA_NASCIMENTO" id="DATA_NASCIMENTO" value="<?=$cliente->DATA_NACIMENTO?? "" ?>" class="form-control">
                    </div>

                    
                    


                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <a href="index.php" class="btn btn-secondary">Cancelar</a>
             