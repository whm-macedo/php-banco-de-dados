<?php
if($_POST){

   // inluindo o arquivo de conexao 
    include "includes/conexao.php";
    // capturar os dados do POST
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    //criar o sql
    $sql = "INSERT INTO cliente VALUE
    (default,'{$nome}','{$telefone}','{$email}','{$cpf}')";
    //tenta cadastrar, retornar true e false
    $resposta = $conn ->query($sql);
    //se true verdadeiro, cadastro efetuado
    if($resposta === true){
        $msg = "Cadastrado com Sucesso!";
    }else{
        $msg = "Erro ao Cadastrar!";
    }


    }

?>

<?php include 'includes/header.php';?>

<div class="container">

        <h1>Novo Cliente</h1>

        <form class="form-horizontal" method="post" action="cliente-novo.php">
        <fieldset>

        <!-- Form Name -->
        

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="nome">Nome</label>  
        <div class="col-md-4">
        <input id="nome" name="nome" type="text" placeholder="" class="form-control input-md" required="">
            
        </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="telefone">Telefone</label>  
        <div class="col-md-4">
        <input id="telefone" name="telefone" type="text" placeholder="" class="form-control input-md" required="">
            
        </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="email">E-mail</label>  
        <div class="col-md-4">
        <input id="email" name="email" type="text" placeholder="" class="form-control input-md" required="">
            
        </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="cpf">CPF</label>  
        <div class="col-md-4">
        <input id="cpf" name="cpf" type="text" placeholder="" class="form-control input-md" required="">
            
        </div>
        </div>

        <!-- Button -->
        <div class="form-group">
        <label class="col-md-4 control-label" for="cadastro"></label>
        <div class="col-md-4">
            <button id="cadastro" name="cadastro" class="btn btn-primary">Cadastrar</button>
        </div>
        </div>

        </fieldset>
        </form>
        <div> <?php if(isset($msg)) echo $msg; // se existir $msg imprima ?> </div>

</div>

<?php include 'includes/footer.php'; ?>