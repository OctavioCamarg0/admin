


                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" name="nome" id="nome" value="<?=$usuario->nome ?? "" ?>" class="form-control"
                        placeholder="Digite seu nome">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" name="email" id="email" value="<?=$usuario->email ?? "" ?>" class="form-control"
                        placeholder="seuemail@provedor.com">
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label">Senha</label>
                        <input type="password" name="senha" id="senha" value="<?=$usuario->senha ?? "" ?>" class="form-control"
                        placeholder="***************">
                    </div>
                    <div class="mb-3">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="text" name="telefone" id="telefone" value="<?=$usuario->telefone ?? "" ?>" class="form-control"
                        placeholder="(00) 0000-0000">
                    </div>
                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto</label>
                        <input type="file" name="foto" id="foto" class="form-control">
                    </div>


                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <a href="index.php" class="btn btn-secondary">Cancelar</a>
               