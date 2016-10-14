<?php
  require_once 'conexao.php';

  $colecao = $con->selectCollection('contatos');

  $id = new MongoId($_GET['id']);

  $colecao->update(array('_id'=>$id), array('$set'=>$_POST));
?>

<script>
  alert('Contato atualizado');
  location.href="index.php";
</script>
