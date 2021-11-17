<?php
header('Content-Type: text/html; charset=utf-8');

 if ($_SERVER["REQUEST_METHOD"] == "POST")  // metodo post
 {
	echo "recebido um post";

	if(isset($_POST['valor']) && isset($_POST['hora']) && isset($_POST['nome'])){   // se os tres campos de dados forem preenchidos vai meter os dados nos ficheiros
		print_r($_POST);
		file_put_contents("files/".$_POST['nome']."/valor.txt",$_POST['valor']);
		file_put_contents("files/".$_POST['nome']."/hora.txt",$_POST['hora']);
		file_put_contents("files/".$_POST['nome']."/log.txt",$_POST['hora'].";".$_POST['valor'].PHP_EOL,FILE_APPEND);

	}
	else{                                                                           // se algum campo em falta, envia uma mensagem de erro
		echo "\nParametros em falta.";
	}
 }

 elseif ($_SERVER["REQUEST_METHOD"] == "GET")                                       // metodo get
 {
	echo "recebido um get\n";
	if ( isset($_GET['nome']) ){                                                    // se o parametro nome estiver presente vai aos ficheiros buscar o valor pretendido
		echo (file_get_contents("files/".$_GET['nome']."/valor.txt"));
	}
	else{
		echo "\nFaltam parametros no GET";
	}

 }
 	else
 	{ echo "\nmetodo nao permitido"; }
 ?>
