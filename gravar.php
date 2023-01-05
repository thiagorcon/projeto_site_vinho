<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    /*
     1- resgatar dados do formulario
     2- abrir conexao com o banco de dados
     3- montar a instrução Sql para gravar o banco de dados
     4- gravar no banco a isntrução atraves da conexao criada   
    */
    
    // 1
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $mensagem = $_POST["mensagem"]; 

    

    // 2-
    // mysqli_connect(servidor, usuario, senha, banco);
    $con = mysqli_connect("localhost","root","Senh@1900","siteclientes");

       

    // insert into aluno values(null,'lucas,'19',"lucas@gmail.com','masculino');
    /* 3 -inserir na instrução as vairiaveis
     insert into aluno value()
    */    

    $sql ="insert into clientes values(null,'".$nome."','".$email."','".$telefone."','".$mensagem."')";

    //4 
    if (mysqli_query($con,$sql)) {
        echo "cliente gravado com sucesso";
    } else {
        echo "erro ao gravar cliente...";
    }

    // fechaer conexao com o banco
    mysqli_close($con);

    ?>
</body>

</html>