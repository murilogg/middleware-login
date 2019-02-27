<?php

use Illuminate\Http\Request;

Route::get('/', 'ProdutoControlador@index');

Route::get('/login', function(Request $req){

	$login_ok = false;

	switch ($req->input('user')) {
		case 'joao':
			$login_ok = $req->input('pass') == "senhajoao";
			break;
		case 'murilo':
			$login_ok = $req->input('pass') == "senhamurilo";
			break;
		default:
			$login_ok = false;
			break;
	}
	if($login_ok){
		return response("login Ok", 200);
	}else{
		return response("Erro no Login", 404);
	}
});