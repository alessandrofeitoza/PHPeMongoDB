<?php
  require_once 'conexao.php';

  $colecao = $con->selectCollection('contatos');

  $colecao->insert($_POST);

  //$con->selectCollection('contatos')->insert($_POST);
?>

<script>
  alert("Deu certo pivete");
  location.href="index.php";
</script>
