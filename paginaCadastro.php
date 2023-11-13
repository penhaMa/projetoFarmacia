<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'cadastro.php';?>
    <form method="POST">
    <label for="nomeCompleto">Nome Completo:</label>
    <input type="text" name="nomeCompleto" required>

    <label for="rg">RG:</label>
    <input type="text" name="rg" required>

    <label for="telefone">Telefone:</label>
    <input type="tel" name="telefone" required>

    <label for="temPlanoSaude">Tem Plano de Saúde?</label>
    <select name="temPlanoSaude">
        <option value="Sim">Sim</option>
        <option value="Não">Não</option>
    </select>

    <label for="planoSaude">Qual Plano de Saúde?</label>
    <input type="text" name="planoSaude">

    <label for="usaFarmaciaPopular">Usa Farmácia Popular?</label>
    <select name="usaFarmaciaPopular">
        <option value="Sim">Sim</option>
        <option value="Não">Não</option>
    </select>

    <label for="produtos">Quais Produtos Consome?</label>
    <input type="text" name="produtos">

        <button> Cadastrar
        <?php
            //Método Consultar Objeto
            session_start();
                //Passe o dado para o construtor
                $_SESSION['cpf']      = $_POST['tCPF'];
                $_SESSION['nome']     = $_POST['tNome'];
                $_SESSION['telefone'] = $_POST['tTel'];
                $_SESSION['endereco'] = $_POST['tEnd'];
                $_SESSION['cidade']   = $_POST['tCid'];
            //Fim do Método Consultar Objeto
            return "Cadastro Realizado";
        ?>
        </button>
    </form>
</body>
</html>