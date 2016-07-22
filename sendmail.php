<?php

	/**
	 *	Envio de emails para um determinado email pegando todos os campos do form
	 */
	 $email = 'jpfricks@gmail.com';
	 //$email = 'freelancer@fricks.com.br';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		//print_r($_POST); exit;
		$mensagem = "Assunto: ".$_POST['subject']."\n\n";
		$mensagem.= "Nome: ".$_POST['name']."\n\n";
		$mensagem.= "Email: ".$_POST['emailFrom']."\n\n";
		$mensagem.= "Mensagem: \n ".$_POST['message'];
		reset($_POST);
		// while (list($titulo, $val) = each($_POST))
		// {
		// 	if (!strcmp($titulo, 'resultado') || !strcmp($titulo, 'assunto')) continue;
		// 	if (strpos($titulo, '_')) {
		// 		$titulo = str_replace('_', ' ', $titulo);
		// 	}
		// 	$titulo = ucfirst($titulo);
		// 	if ($val) {
		// 		if (is_array($val)) {
		// 			$texto = '';
		// 			foreach ($val as $valor) {
		// 				$texto .= "\n - $valor";
		// 			}
		// 		} else {
		// 			$texto = $val;
		// 		}
		// 		$mensagem = $mensagem . "$titulo: $texto\n";
		// 	}
		// }
		// envia email
		$emailFrom = $_POST['emailFrom'];
		$enviado = mail($email, 'Contato fricks.com.br', $mensagem, 'From: <'.$emailFrom.'>');
		if (!$enviado) {
			die('Erro no envio do e-mail. Por favor, entre em contato comigo pelo e-mail '.$email);
		}
		// endereco para ir depois de envia o formulario
		// header('location: contato_enviado.php');
		// $html="";
		// $html .="<p>";
		// $html .="Email enviado com sucesso !!!";
		// $html .="</p>";
		// print ($html);
	}

?>
