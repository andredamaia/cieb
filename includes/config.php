<?php

$pageurl = "https://".$_SERVER["SERVER_NAME"]."/cieb";

$url = explode('/', $_GET['cod']);
$page = $url["0"];
$subpage = $url["1"];
$subpage2 = $url["2"];
$subpage3 = $url["3"];
$subpage4 = $url["4"];
$subpage5 = $url["5"];

if($page == NULL){
	$page = "home";
}

$descricao = "Engenharia";
$palavras = "engenharia, portfolio";

if (!is_file("includes/".$page.".php")) { $page = "404"; }

switch($page){
	case "404":
		$title = "Página não encontrada";
		$description = "Infelizmente essa página não foi encontrada.";
		$keywords = $palavras;
		break;
	default:
		$title = "CIEB - Engenharia";
		$description = $descricao;
		$keywords = $palavras;
		break;
}

?>