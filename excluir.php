<?php
  require_once 'conexao.php';

  $colecao = $con->selectCollection('contatos');

  $id = new MongoId($_GET['id']);

  $colecao->remove(array('_id'=>$id));
?>
<script>
  alert("Contato Excluido");
  location.href="index.php";
</script>
