<?php

//www.misitio.com 
//www.misitio/contacto.com
/*
Route::get('/',function(){
echo "<a href=". route('contactos').">Contacto<a/><br>";
echo "<a href=". route('contactos').">Contacto<a/><br>";
echo "<a href=". route('contactos').">Contacto<a/><br>";

});


Route::get('contacto', ['as'=> 'contactos',function(){
	return "hola desde el contacto";

}]);

Route::get('saludos/{nombre?}',function($nombre="Invitado"){

	return "saludos $nombre";

})->where('nombre',"[A-Za-z]+"); //VALIDACION DE RURA LE PASAOS NOMBRE DEL PARAMETRO A VALIDAR*/

Route::get('/',['as'=>'home',function(){
	return view('home');
}]);


Route::get('contactos',['as'=>'contactos',function(){
	return view('contactos');

}]);


Route::get('saludos/{nombre?}',['as'=>'saludos',function($nombre="Invitado"){

	return view('saludos',['nombre'=>$nombre]);

}]);


