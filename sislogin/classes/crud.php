<?php
include_once 'database.php';
include_once('validacoes.php');


class Crud extends Database
{
	
	public function __construct()
	{
		parent::__construct(); //Executa o método construtor da classe Pai (Database)

	}
	
	public function getDados($query)
	{		
		$result = $this->connection->query($query);
		
		if ($result == false) {
			return false;
		} 
		
		$rows = array();
		
		while ($row = $result->fetch_assoc()) {
			$rows[] = $row;
		}
		
		return $rows;
	}
		
	public function executarSql($query) 
	/* Executa no Banco de Dados o comando SQL passado
	   Parâmetros:	     
		 $query = Query que deverá ser executada no SGBD
	*/
	{
		$result = $this->connection->query($query);
		$validacoes = new Validacoes();
		
		if ($result == false) {
			echo $validacoes->mensagem('Ops... Ocorreu um erro!','Não foi possível executar o comando SQL: <br>'. $query,'danger');
	        echo $validacoes->botao('Voltar para o início', 'danger', 'index.php', 'reply');
			return false;
		} else {
			return true;
		}		
	}
	
	public function apagar($id_usuario, $tabela) 
	/* Remove um registro da tabela informada a partir do ID passado, retornando true ou false
	   Parâmetros:
	     $id = ID a ser removido da tabela
		 $tabela = Nome da tabela a ser removida
	*/
	{ 		
        $validacoes = new Validacoes();
		$query = "DELETE FROM $tabela WHERE id_usuario = $id_usuario";		
		$result = $this->connection->query($query);	
		if ($result == false) {			
			echo $validacoes->mensagem('Ops... Ocorreu um erro!','Não foi possível apagar o registro <strong> id ' . $id_usuario . ' </strong> da tabela <strong>' . $tabela .'</strong>','danger');
			echo $validacoes->botao('Voltar para o início', 'danger', 'corpo.php', 'reply');
			
			return false;
		} else {
			return true;
		}
	}
	
	public function limpaTexto($texto)
	/* Retorna o texto sanitizado (sem caracteres especiais) evitando assim, ataques de SQL Injection
	   Parâmetros:
	     $texto = Texto a ser sanitizado (sanitize)
	*/
	{
		return $this->connection->real_escape_string($texto);
	}

}
?>

