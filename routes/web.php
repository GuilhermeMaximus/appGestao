<?php

use Illuminate\Support\Facades\Route;
/*

Route::get('/', function () {
    return 'Bem-vindo, aluno!';
});

*/

Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos', 'SobreNosController@sobrenos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::get('/login', function(){ return 'Login'; })->name('site.login');

// * prefixo /app
Route::prefix('/app')->group(function(){
    Route::get('/clientes', function(){ return 'Clientes'; })->name('app.clientes');
    Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');
    Route::get('/produtos', function(){ return 'Produtos'; })->name('app.produtos');

});


Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');

Route::fallback(function() {
    echo 'A rota acessada não existe, <a href="'.route('site.index').'">clique aqui</a> para ir para a página inicial';
});
