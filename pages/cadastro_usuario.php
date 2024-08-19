<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OrderUp - Cadastro</title>
    <link rel="shortcut icon" href="./img/Black and Yellow Simple Food Logo 2.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/cadastrar.css">
    
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <div class="login-header">
                <img src="../img/logoOrderup.png" alt="OrderUp Logo">
                <h2>Começe agora a fazer seus pedidos!</h2>
            </div>
            <form action="../php/cadastrar.php" method="POST">
                <div class="input-group">
                    <label for="nome">Nome</label>
                    <input type="nome" name="nome" id="nome" placeholder="insira seu nome completo" required>
                </div>
                <div class="input-group">
                    <label for="cpf">CPF</label>
                    <input type="cpf" name="cpf" id="cpf" placeholder="insira seu CPF" required>
                </div>
                <div class="input-group">
                    <label for="email">Email de acesso</label>
                    <input type="email" name="email" id="email" placeholder="Insira um email valído" required>
                </div>
                <div class="input-group">
                    <label for="senha">Senha de acesso</label>
                    <input type="password" name="senha" id="senha" placeholder="Entre com a sua senha" required>
                </div>
                <button type="submit" class="login-btn">Cadastrar</button>
                <div class="divider">ou</div>
                <!-- <button type="button" class="register-btn">Entrar Agora</button> -->
                <a href="home.php" ><button type="button"class="register-btn">Entrar Agora</button></a>
            </form>
        </div>
        <div class="logo-container">
            <img src="../img/logoOrderup.png" alt="OrderUp Logo Grande">
        </div>
    </div>
</body>
</html>