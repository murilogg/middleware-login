<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoControlador extends Controller
{
	private $produtos = ["Notebook acer", "PC Gamer", "Impressora hp", "Mouse"];

    public function index(){
    	echo "<h3>PRODUTOS</h3>";
    	echo "<ol>";
    	foreach ($this->produtos as $p) {
    		echo "<li>" . $p . "</li>";
    	}
    	echo "</ol>";
    }
}
