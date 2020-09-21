<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $helloWord = 'Flávio Chaves';
    return view('welcome', compact('helloWord'));
});

Route::get('/model', function() {
	//$products = \App\Product::all(); //select * from products

//	$user = new \App\User();
//	$user->name = 'Usuário teste';
//	$user->email = 'email@teste.com';
//	$user->password = bcrypt('12345678');
	//$user->save();

//	return \App\User::all(); //retorna todos os usuários

//	return \App\User::find('81'); //retorna com seleção

//	return \App\User::where('name', 'Usuário teste')->get(); //select * from users where name = 'Usuário teste'

//	return \App\User::paginate(10); //paginar dados

//	return $products;

	//Mass Assingment - Atribuição em massa

//	$user = \App\User::create([
//		'name' => 'Silvana Portugal',
//		'email' => 'contato@silvanaportugal.com.br',
//		'password' => bcrypt('12345678')
//	]);

//	dd($user);

	//Mass update

//	$user = \App\User::find(85);
//	$user = $user->update([
//		'name' => 'Atualização com Mass update'

//	]);  //true ou false

//	dd($user);

	//como fazer para pegar a loja de um usuário

//	$user = \App\User::find(161);

//	dd($user->store()->count()); //o objeto (Store) se for Colletction de Dados(Objetos)

//	return \App\User::all();

//	como pegar produto de uma loja

//	$loja = \App\Store::find(1);

//	return dd($loja->products());

//	return \App\User::all();


	//como pegar lojas de uma categoria
//	$categoria = \App\Category::find(1);
//	$categoria->products;

//	return \App\User::all();

	//Criar uma loja para um usuário

//	$user = \App\User::find(10);
//	$store = $user->store()->create([
//		'name' => 'Loja Teste',
//		'description' => 'Loja teste produtos',
//		'mobile_phone' => 'xx-xxxx-xxxx',
//		'phone' => 'xx-xxxx-xxxx',
//		'slug' => 'loja-teste'
//
//	]);
//
//	dd($store);

	//Criar um produto para uma loja
	
//	$store = \App\Store::find(41);
//	$product = $store->products()->create([
//		'name' => 'Notebook Dell',
//        'description' => 'Core I% 10GB',
//        'body' => 'qualquer coisa...',
//        'price' => 2999.99,
//        'slug' => 'notebook-del',
//	]);
//
//	dd($product);

	// Criar uma categoria

//	$category = \App\Category::create([
//		'name' => 'Games',
//		'description' => null,
//		'slug' => 'games'
//
//	]);

//	$category = \App\Category::create([
//		'name' => 'Notebooks',
//		'description' => null,
//		'slug' => 'notebooks'
//
//	]);

//	return \App\Category::all();


	//adicionar um produto para uma categoria ou vice-versa

//	$product = \App\Product::find(41);
//	dd($product->categories()->sync([1,2]));  //adiciona 2 cetegorias ao produto

	return \App\User::all();

});

//Route::get
//Rout::post
//Rout::put
//Rout::patch
//Rout::delete
//Route::options


//-------------------------//-----------------------------

	Route::get('/admin/stores', 'Admin\\StoreController@index');

	Route::get('/admin/stores/create', 'Admin\\StoreController@create');

	Route::post('/admin/stores/store', 'Admin\\StoreController@store');

	