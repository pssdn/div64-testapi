<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/categorias', function()
{
	$json = array(
		array(
			"id"		=> 1,
			"slug"		=> "eletronicos",
			"titulo"	=> "Eletrônicos",
			"produtos"	=> array(1,2,3,4,5,6,7,8,9,10)
		),
		array(
			"id"		=> 2,
			"slug"		=> "sala-e-cozinha",
			"titulo"	=> "Sala e Cozinha",
			"produtos"	=> array(1,2,3,4,5)
		),
		array(
			"id"		=> 3,
			"slug"		=> "sala-e-escritorio",
			"titulo"	=> "Sala e Escritório",
			"produtos"	=> array(6,7,8,9,10)
		),
		array(
			"id"		=> 4,
			"slug"		=> "diversos",
			"titulo"	=> "Diversos",
			"produtos"	=> array(1,2,3)
		)
	);

	return $json;
});

Route::get('/produtos', function()
{
	$json = array();
	$count = 10;
	$i = 1;

	do {
		array_push($json, array(
			"id"		=> $i,
			"slug"		=> "produto-teste-".$i,
			"titulo"	=> "Produto de teste ".$i,
	        "preco"		=> 10.00*$i,
	        "thumbnail"	=> "http://lab.div64.com/teste_api/public/thumbnail.jpg"
		));

		$i++;
	} while ($i <= $count);
		
	return $json;
});

Route::get('/produto/{id}', function($id)
{
	$json = array(
		"id"		=> $id,
		"slug"		=> "produto-teste-".$id,
		"titulo"	=> "Produto de teste ".$id,
        "preco"		=> 100.00*$id,
        "thumbnail" => "http://lab.div64.com/teste_api/public/thumbnail.jpg"
	);

	return $json;
});