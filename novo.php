<link rel="stylesheet" href="bootstrap/css/bootstrap.css">

<?php
	require_once 'conexao.php';

	$action = "inserir.php";

	if(isset($_GET['id'])){
		$colecao = $con->selectCollection('contatos');

		$id = new MongoId($_GET['id']);
		$contato = $colecao->find(array('_id'=>$id));

		foreach($contato as $k=>$v){
			$cont = $v;
			break;
		}

		$action = "atualizar.php?id=".$_GET['id'];

	}

?>

<div class="row">
	<div class="col-lg-4 col-lg-offset-4">
		<form action="<?php echo $action; ?>" method="POST">
			<label>Nome</label>
			<input type="text" value="<?php echo $v['nome']; ?>" placeholder="Digite o nome" class="form-control" name="nome"><br>

			<label>Email</label>
			<input type="email" value="<?php echo $v['email']; ?>" placeholder="Digite o email" class="form-control" name="email"><br>

			<label>Telefone</label>
			<input type="text" value="<?php echo $v['telefone']; ?>" placeholder="Digite o telefone" class="form-control" name="telefone"><br>

			<label>Data de Nascimento</label>
			<input type="text" value="<?php echo $v['data_nascimento']; ?>" placeholder="dd/mm/yyyy" class="form-control" name="data_nascimento"><br>

			<label>Sexo</label>
			<input type="text" value="<?php echo $v['sexo']; ?>" placeholder="Informe o Sexo" class="form-control" name="sexo"><br>

			<button class="btn btn-primary btn-block">Enviar</button>
		</form>

	</div>
</div>
