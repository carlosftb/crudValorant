<?php

	const hostname = 'localhost';

	const username = 'root';

	const password = '123';

	const dbname = 'valorant';

	const usertable = 'agente';
	
	
	//Conexão com o banco
	$conexao = mysqli_connect(hostname,username, password, dbname);


								/* Script para testar a conexão com o banco. (Manter comentado após o teste)
								if (!$conexao) {
									die("Connection failed: " . mysqli_connect_error());
								}
								echo "Connected successfully";  */

	
	// Função responsavel por consultar todos os agentes no banco
  	function selectAgentes (){
		$conexao = mysqlI_connect(hostname,username, password, dbname);
		$query = "SELECT * FROM agente ORDER BY id";
		$select = mysqli_query($conexao, $query);
		return $select;
	}

	//Função responsavel por selecionar um unico agente
	function selectAgente ($id){
		$conexao = mysqlI_connect(hostname,username, password, dbname);
		$query = "SELECT * FROM agente WHERE id=$id";
		$select = mysqli_query($conexao, $query);
		return $select;
	}


	//Função responsavel por cadastrar agente no banco
	function cadastrarAgente ($codinome, $nacionalidade, $classe, $radiante){
		$conexao = mysqlI_connect(hostname,username, password, dbname);
		$query = "INSERT INTO agente (codinome,nacionalidade,classe,radiante) VALUES ('$codinome','$nacionalidade','$classe','$radiante')";
		$insere = mysqli_query($conexao, $query);
	}

	//Função responsavel por deletar um agente do banco
	function deletarAgente ($id){
		$conexao = mysqlI_connect(hostname,username, password, dbname);
		$query = "DELETE from agente WHERE id=$id";
		$deletar = mysqli_query($conexao, $query);
		return $query;
	}

	//Função responsavel por editar um agente do banco
	function editarAgente ($id,$codinome, $nacionalidade, $classe, $radiante){
		$conexao = mysqlI_connect(hostname,username, password, dbname);
		$query = "UPDATE agente SET codinome = '$codinome', nacionalidade = '$nacionalidade', classe = '$classe', radiante = '$radiante' WHERE id=$id";
		$editar = mysqli_query($conexao, $query);
		return $query;
	}

?>

