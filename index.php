<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>

<body class="container">
<a href="novo.php">Novo Contato</a>
<br><br><br>
<?php
    require_once 'conexao.php';

    $colecao = $con->selectCollection('contatos');

    $contatos = $colecao->find();

    foreach($contatos as $c){
      echo <<<HTML
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#{$c['_id']}" aria-expanded="true" aria-controls="collapseOne">
                {$c['nome']}
              </a>
            </h4>
          </div>
          <div id="{$c['_id']}" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
            <table class="table table-hover">
HTML;

              foreach($c as $k=>$v){
                echo '<tr>';
                  echo '<th>',$k,'</th>';
                  echo '<td>',$v,'</td>';
                echo '</tr>';
              }
    echo <<<HTML

            </table>
            <a href="excluir.php?id={$c['_id']}" class="btn btn-danger">
              <span class="glyphicon glyphicon-trash"></span>
               Excluir
            </a>
            <a href="novo.php?id={$c['_id']}" class="btn btn-warning">
              <span class="glyphicon glyphicon-pencil"></span>
               Editar
            </a>
            </div>
          </div>
        </div>
      </div>
HTML;
    }
?>

</body>
