<?php include_once 'cabecalhoAdmin.php'; ?>

<div class="geral">
<div class="container-fluid my-5">
<?php
//Obtendo os dados do registro pelo ID
$id_usuario = $crud->limpaTexto($_GET['id_usuario']);

//Apagando o registro da tabela pelo ID
$result = $crud->apagar($id_usuario, 'usuarios');

if ($result) { //Se o resultado for true...
    echo $validacoes->mensagem('Tudo Certo!','Registro removido com sucesso','success');
	echo $validacoes->botao('Voltar para a Listagem', 'success', 'corpo.php', 'reply');
}
?>

</div>
</div>

<?php include_once 'rodape.php'; ?>