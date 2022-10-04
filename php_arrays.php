<?php
header('Content-Type: text/html; charset=UTF-8');

//ARRAY NORMAL xxx
$array1 = [
	"a",
	"b",
	"c"
];
//ARRAY ASSOCIATIVO
$array2 = [
	"nome" => "leo",
	"idade" => "40",
	"ano" => "2002"
];
//ARRAY MESCLADO
$array3 = [
	"nome" => "leo",
	"idade" => "40",
	"ano" => [
		"2002",
		"2003"
	]
];
//ARRAY MULTIDIMENSIONAL
$array4 = [
	"pessoas" => [
		[
			"id" => "1",
			"nome" => "leo",
			"idade" => "40"
		],
		[
			"id" => "2",
			"nome" => "julia",
			"idade" => "20"
		],
		[
			"id" => "3",
			"nome" => "etyele",
			"idade" => "30"
		]
	]
];
//ARRAY MULTIDIMENSIONAL 2
$array5 = [
	//[
		[
			"id" => "1",
			"nome" => "leo",
			"idade" => "40"
		],
		[
			"id" => "2",
			"nome" => "julia",
			"idade" => "20"
		],
		[
			"id" => "3",
			"nome" => "etyele",
			"idade" => "30"
		]
	//]
];
//print_r($array5[4]["nome"]);
//ARRAY MULTIDIMENSIONAL 3
$array6 = [];
$array6[] =	
		[
			"id" => "1",
			"nome" => "leo",
			"idade" => "40"
		];
$array6[] =
		[
			"id" => "2",
			"nome" => "julia",
			"idade" => "20"
		];
$array6[] =
		[
			"id" => "3",
			"nome" => "etyele",
			"idade" => "30"
		];
print_r($array6[0]["nome"]);
return;

//Adicionar
$array1[] = "d";
//Adicionar
$array2["end"] = "rua x";
//Alterar
$array1[1] = "e";
//Alterar
$array2["nome"] = "julia";

//ORDENAÇÃO
// sort($array1); //as chaves são trocadas
// asort($array1); //as chaves são mantidas
// rsort e asort //decrescente

//FILTRO
// $filter = array_filter($array1, function($value)){
	// return !is_null($value);
// }

//Obter dados de uma coluna específica
//print_r(array_column($array2, 'nome'));

//Combinar 2 arrays em 1. Ex: um com ids e outro com nomes
//print_r(array_combine($array1,$array2));

//Excluir um item
//unset($array1[1]);

echo "<pre>";
// print_r($array4);
// //print_r($array4["pessoas"]);
// //print_r($array4["pessoas"][0]);
// //print_r($array4["pessoas"][0]["nome"]);
//echo count($array); //conta somente o primeiro nível.
//print_r(array_keys($array2)); //Obter as chaves de um array associativo
//print_r(array_values($array2)); //Obter os valores de um array associativo
//var_dump(in_array("g",$array1)); //Buscar dentro de um array
//var_dump(array_search("b",$array1)); //Buscar dentro de um array e traz a posição
//var_dump(isset($array1[0])); //Verificar se uma chave existe dentro do array
//var_dump(isset($array3['nome'])); //Verificar se uma chave existe dentro do array
//var_dump(array_key_exists('nome',$array3)); //Verificar se uma chave existe dentro do array, mesmo se o valor da chave for nulo
//echo implode(',',$array1); //Implode: permite que os dados sejam exibidos de forma linear e com um separador
print_r(explode(',','1,2,3')); //Transformar string em array
echo "</pre>";




?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Teste</title>
	<link rel="stylesheet" href="_estilos/estilos.css" type="text/css">
</head>
<body style="margin:0;">
</body>
</html>