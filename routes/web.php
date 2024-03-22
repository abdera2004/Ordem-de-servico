<?php

use Illuminate\Support\Facades\Route;

use App\Models\Cadastro;
use Illuminate\Http\Request;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/Os', function () {
    return view('Os');
});

Route::get('/Ordem', function () {
    return view('Ordem');
});

//cadastrar outra rota para verificar info//
Route::post('/cadastrar',function(Request $request){
    
    //mostrar todas informaçoes que estão chegando //
    //dd ->função laravel
    //debug or die // parar aplicação//

   // dd($request->all());

    //criar informaçaões vinculada ao Model para o banco de dados//

    Cadastro::create([

      'nome'=> $request -> nome,
      'cpf'=>$request -> cpf,
      'telefone'=> $request ->telefone,
      'modelo'=> $request ->modelo,
      'marca'=> $request ->marca,
      'defeito'=> $request ->defeito,

    ]);

    echo " Cadastrado com sucessso";

});