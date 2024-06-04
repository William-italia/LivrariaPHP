<div class="global-container">
    <div class="container">
        <div class="form">
            <form action="?page=create_user" method="POST">
                <div class="box-group">
                    <div class="box-input">
                        <label for="nome">Nome: </label>
                        <input type="text" name="nome" placeholder="Digite seu nome">
                    </div>
                    <div class="box-input">
                        <label for="email">Email: </label>
                        <input type="email" name="email" placeholder="Digite seu email">
                    </div>
                    <div class="box-input">
                        <label for="setor">Setor: </label>
                        <input type="text" name="setor" placeholder="Digite seu setor">
                    </div>
                    <div class="box-input">
                        <label for="pass">Senha: </label>
                        <input type="text" name="senha">
                    </div>
                    <button class="register r" type="$_POST" href="?page=login">Registrar</button>
                    <button class="log voltar" href="?page=login">Voltar</button>
                </div>
            </form>
        </div>
    </div>
</div>