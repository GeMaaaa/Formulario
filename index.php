<?php

    if(isset($_POST['submit']))
    {
        include_once('conexao.php');

    $nome = $_POST['nome'];
    $cargo = $_POST['cargo'];
    $data_nascimento = $_POST['data_nascimento'];
    $estado_civil = $_POST['estado_civil'];
    $genero = $_POST['genero'];
    $cep = $_POST['cep'];
    $logradouro = $_POST['logradouro'];
    $bairro = $_POST['bairro'];
    $localidade = $_POST['localidade'];
    $telefone1 = $_POST['telefone1'];
    $telefone2 = $_POST['telefone2'];
    $contato = $_POST['contato'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $identidade = $_POST['identidade'];
    $cpf = $_POST['cpf'];
    $veiculo = $_POST['veiculo'];
    $habilitacao = $_POST['habilitacao'];

    $result = mysqli_query($con, "INSERT INTO usuarios(nome,cargo,
    data_nascimento,estado_civil,genero,cep,endereco,bairro,cidade,
    telefone1,telefone2,contato,celular,email,identidade,cpf,veiculo,
    habilitacao) VALUES ('$nome','$cargo','$data_nascimento','$estado_civil',
    '$genero','$cep','$logradouro','$bairro','$localidade','$telefone1','$telefone2',
    '$contato','$celular','$email','$identidade','$cpf','$veiculo','$habilitacao')");
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.90">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">

    <title>Projeto | Formulário</title>
</head>
<body>
    <div class="box">

        <form method="POST" action="formulario.php">
            <fieldset>
                <legend><b>FORMULÁRIO DE CADASTRO</b></legend>
                <h2><b>DADOS PESSOAIS</b></h2>
                <div class="inputBox">
                    <label class="labelInput" for="nome">Nome completo:</label>
                    <input type="text" name="nome" id="nome" class="inputUser" required>

                    <label class="labelInput" for="cargo">Cargo Pretendido:</label>
                    <input type="text" name="cargo" id="cargo" class="inputUser">
                </div>

                <div class="inputBox">
                    <label class="labelInput" for="data_nascimento">Data de nascimento:</label>
                    <input type="date" name="data_nascimento" id="data_nascimento" class="inputUser" required>

                    <label class="labelInput" for="estado_civil">Estado Civil:</label>
                    <select name="estado_civil" id="estado_civil" class="inputUser">
                        <option value="">Selecione</option>
                        <option value="solteiro">Solteiro(a)</option>
                        <option value="casado">Casado(a)</option>
                        <option value="divorciado">Divorciado(a)</option>
                        <option value="separado">Separado(a)</option>
                        <option value="viuvo">Viúvo(a)</option>
                    </select>
                </div>

                <div class="inputBox">
                    <label class="labelInput" for="genero">Sexo:</label>
                    <select name="genero" id="genero" class="inputUser">
                        <option value="">Selecione</option>
                        <option value="feminino">Feminino</option>
                        <option value="masculino">Masculino</option>
                        <option value="naobinario">Não binário</option>
                        <option value="outro">Outro</option>
                    </select>
                </div>

                <div id="spaceBox" class="inputBox">
                    <label class="labelInput" for="cep">Cep:</label>
                    <input type="text" name="cep" id="cep" class="inputUser" required>

                    <label class="labelInput" for="logradouro">Endereço:</label>
                    <input type="text" name="logradouro" id="logradouro" class="inputUser" required>
                </div>

                <div class="inputBox">
                    <label class="labelInput" for="bairro">Bairro:</label>
                    <input type="text" name="bairro" id="bairro" class="inputUser" required>

                    <label class="labelInput" for="localidade">Cidade:</label>
                    <input type="text" name="localidade" id="localidade" class="inputUser" required>
                </div>

                <div id="spaceBox" class="inputBox">
                    <label class="labelInput" for="telefone1">Telefone fixo 1:</label>
                    <input type="tel" name="telefone1" id="telefone1" class="inputUser">

                    <label class="labelInput" for="telefone2">Telefone fixo 2:</label>
                    <input type="tel" name="telefone2" id="telefone2" class="inputUser">
                </div>

                <div class="inputBox">
                    <label class="labelInput" for="contato">Contato:</label>
                    <input type="text" name="contato" id="contato" class="inputUser">


                    <label class="labelInput" for="celular">Celular:</label>
                    <input type="tel" name="celular" id="celular" class="inputUser" required>
                </div>

                <div class="inputBox">
                    <label class="labelInput" for="email">E-mail:</label>
                    <input type="email" name="email" id="email" class="inputUser" required>
                </div>

                <h2><b>DOCUMENTOS</b></h2>
                <div class="inputBox">
                    <label class="labelInput" for="identidade">Identidade:</label>
                    <input type="text" name="identidade" id="identidade" class="inputUser" required>

                    <label class="labelInput" for="cpf">CPF:</label>
                    <input type="text" name="cpf" id="cpf" class="inputUser" required>
                </div>

                <div class="inputBox">
                    <label class="labelInput" for="veiculo">Possui Veículo:</label>
                    <select name="veiculo" id="veiculo" class="inputUser">
                        <option value="">Selecione</option>
                        <option value="veiculosim">Sim</option>
                        <option value="veiculonao">Não</option>
                    </select>

                    <label class="labelInput" for="habilitacao">Habilitação:</label>
                    <select name="habilitacao" id="habilitacao" class="inputUser">
                        <option value="">Selecione</option>
                        <option value="cnha">CNH categoria A</option>
                        <option value="cnhb">CNH categoria B</option>
                        <option value="cnhc">CNH categoria C</option>
                        <option value="cnhd">CNH categoria D</option>
                        <option value="cnhe">CNH categoria E</option>
                    </select>
                </div>
            </fieldset>
                <input type="submit" name="submit" id="submit">
        </form>
    </div>

    <script>

        const cep = document.getElementById("cep");
        cep.addEventListener("blur", (e) =>{
            let Cep = document.getElementById("cep").value;
            let search = cep.value.replace("-", "")
            console.log(search)
            fetch(`https://viacep.com.br/ws/${search}/json/`).then((response) =>{
                response.json().then(data =>{
                    console.log(data);
                    document.getElementById("bairro").value = data.bairro;
                    document.getElementById("logradouro").value = data.logradouro;
                    document.getElementById("localidade").value = data.localidade;
                })
            })
        })
    </script>

</body>
</html>