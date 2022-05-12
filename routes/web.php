<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

//primera ruta
Route::get('hola' , function(){
    echo "hola 2465903";
  });
//ruta de arreglos:
Route::get('arreglo' , function(){
   $estudiantes = [
       "C"=> "Carlos",
        "J"=> "Jose",
         "A"=> 1.78
   ];
   //recorrer arreglo
   foreach($estudiantes as $e){
       echo $e."<hr />";
   }

   //agregar elementos en php
   $estudiantes["D"]= "Daniela";
   var_dump($estudiantes);

  // echo "<pre>";
   // var_dump($estudiantes);
   // echo "</pre>";
});

Route::get('paises' , function(){
    //arreglo paises:
    $paises = [
        "Colombia" =>[
            "capital" => "Bogotá",
            "moneda" => "Peso",
            "poblacion" => 51,
            "ciudades" => [
                "Medellín",
                "Cali",
                "Barranquilla"
            ]
        ], 
        "peru" =>[
            "capital" => "Limá",
            "moneda" => "Sol",
            "poblacion" => 32,
            "ciudades" => [
                "Arequipa",
                "Trujillo"
            ]
        ],
        "paraguay" =>[
            "capital"  => "Asunción",
            "moneda"  => "guaraní",
            "poblacion" => 7,
            "ciudades" => [
                "Luque"
            ]
        ],

        "Brasil" => [
            "capital"  => "Brasilia",
            "moneda"  => "real brasileño",
            "poblacion" => 212,
            "ciudades" => [
                "Sao Paulo",
                "Río de Janeiro",
                "Recife"
            ]
        ],

        "Mexico" =>[
            "capital"  => "Ciudad de mexico",
            "moneda"  => "Pesos Mexicanos",
            "poblacion" => 128,
            "ciudades" => [
                "Cancún",
                "Mérida",
                "Oaxaca de Juárez"
            ]
        ]
    ];

    //mostrar la vista:
    return view('paises')
    ->with("paises" , $paises);
});

Route::get('prueba' , function(){
    return view('productos.new');
} );