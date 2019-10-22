<?php
  include "includes/conexao.php";

  $sql = "SELECT * FROM cliente";
  $lista = $conn ->query($sql);

?>


<?php include 'includes/header.php';?>

<div class="container">

<h1>LISTA DE CLIENTES</h1>

<table class="table">

<thead>
    <tr>
      <th scope="col">ID:</th>
      <th scope="col">NOME:</th>
      <th scope="col">TELEFONE:</th>
      <th scope="col">E-MAIL:</th>
      <th scope="col">CPF:</th>
    </tr>
</thead>

<tbody>

    <?php while($cliente = $lista ->fetch_assoc()) { ?>

    <tr>
      <th scope="row"><?php echo $cliente['pk_cliente']?></th>

      <td><?php echo $cliente['nome']?></td>
      <td><?php echo $cliente['telefone']?></td>
      <td><?php echo $cliente['email']?></td>
      <td><?php echo $cliente['cpf']?></td>
      
    </tr>
    <?php } ?>

</tbody>

</table>

</div>

<?php include 'includes/footer.php'; ?>