<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OrderUp - Login</title>
    <link rel="shortcut icon" href="./img/Black and Yellow Simple Food Logo 2.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/login.css">

  
    
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <div class="login-header">
                <img src="./img/logoOrderup.png" alt="OrderUp Logo">
                <h2>Logue com a sua conta</h2>
            </div>
            <form action="./php/login.php" method="POST">
                <div class="input-group">
                    <label for="email">Email de acesso</label>
                    <input type="email" name="email" id="email" placeholder="cliente@gmail.com" required>
                </div>
                <div class="input-group">
                    <label for="senha">Senha de acesso</label>
                    <input type="password" name="senha" id="senha" placeholder="Entre com a sua senha" required>
                </div>
                <a href="#" class="forgot-password">Esqueceu sua senha?</a>
                <button type="submit" class="login-btn">entrar agora</button>
                <div class="divider">ou</div>
                <!-- <button type="button" class="register-btn">Cadastre-se</button> -->
                <a href="./pages/cadastro_usuario.php" ><button type="button"class="register-btn">Cadastre-se</button></a>
                <button type="button" class="admin-btn">administrador</button>
            </form>
        </div>
        <div class="logo-container">
            <img src="./img/logoOrderup.png" alt="OrderUp Logo Grande">
        </div>
    </div>
</body>
</html>