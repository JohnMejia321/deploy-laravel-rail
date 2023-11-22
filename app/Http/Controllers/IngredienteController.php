<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class IngredienteController extends Controller{



    


    public function index(){

        $recetas = [
            [
                'nombre' => 'Ensalada de Pollo con Limón',
                'ingredientes' => [
                    'Lemon' => 2,
                    'Lettuce' => 3,
                    'Chicken' => 1,
                ],
                'descripcion' => 'Una refrescante ensalada de pollo con limón y lechuga.',
            ],
            [
                'nombre' => 'Sopa de Tomate y Cebolla',
                'ingredientes' => [
                    'Tomato' => 1,
                    'Onion' => 2,
                ],
                'descripcion' => 'Una sopa sabrosa y reconfortante de tomate y cebolla.',
            ],
            [
                'nombre' => 'Puré de Papas con Queso',
                'ingredientes' => [
                    'Potato' => 3,
                    'Cheese' => 1,
                ],
                'descripcion' => 'Puré de papas suave y cremoso con queso.',
            ],
            [
                'nombre' => 'Arroz con Salsa de Tomate',
                'ingredientes' => [
                    'Rice' => 2,
                    'Tomato' => 3,
                ],
                'descripcion' => 'Arroz cocido con una deliciosa salsa de tomate.',
            ],
            [
                'nombre' => 'Hamburguesa con Ketchup',
                'ingredientes' => [
                    'Meat' => 1,
                    'Ketchup' => 1,
                    'Lettuce' => 2,
                    'Cheese' => 1,
                ],
                'descripcion' => 'Una jugosa hamburguesa con ketchup, lechuga y queso.',
            ],
            [
                'nombre' => 'Pollo al Limón con Cebolla',
                'ingredientes' => [
                    'Lemon' => 1,
                    'Chicken' => 1,
                    'Onion' => 2,
                ],
                'descripcion' => 'Pollo marinado en limón y cebolla, asado a la perfección.',
            ],
        ];
        
        return response()->json($recetas);
    }




}
