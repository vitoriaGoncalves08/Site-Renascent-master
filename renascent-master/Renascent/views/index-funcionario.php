<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renascent</title>
    <link rel="stylesheet" href="../css/styleLogin.css">
    <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
        <form action="../controllers/AutorController.php" method="post">
                <h1>Cadastrar Autor</h1>
                    <input type="text" name="nomeAutor" placeholder="Digite o nome do autor" maxlength="100" required>
                    <input type="text" name="paisAutor" placeholder="Digite o o Pais do autor" maxlength="30" required>
                    <span>Data de Nascimento:
                    <input type="date" name="nascimentoAutor" placeholder="Digite a data de nascimento do autor" maxlength="8" required></span>
                    <span>Data de Falecimento:
                    <input type="date" name="falecimentoAutor" placeholder="Digite a data de falecimento do autor" maxlength="8" required></span>
                    <button class="fonteBtn">Cadastrar Categoria</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
        <form action="../controllers/ClassificacaoController.php" method="post">
                <h1>Cadastrar Categoria</h1>
                <h3><span>Categoria: <select name="classificacao" class="custom-select sources" placeholder="Escultura"></h3>
                    <option value="Escultura">Escultura</option>
                    <option value="Pintura">Pintura</option>
                    <option value="vitral">Vitral</option>
                    <option value="arquitetonica">Obra arquitetonica</option></select>
                    </select></span>
                    <br>
                    <br>
                <button class="fonteBtn">Cadastrar Categoria</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Olá Funcionáro(adm)!</h1>
                    <p>Entre com os dados dos nossos autores preferidos.</p>
                    <button class="ghost" id="signIn">Cadastrar Obra!</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Seja Bem Vindo!</h1>
                    <h3>"É aqui onde a mágica acontece"</h3>
                    <p>Depois de cadastrar uma categoria, aproveite para cadastrar um Autor.</p>
                    <button class="ghost" id="signUp">Cadastre-o já!</button>
                </div>
            </div>
        </div>
    </div>

	
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="../JS/script.js"></script>
</body>

</html>