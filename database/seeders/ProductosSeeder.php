<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productos = [
            [
                'nom_producto'=> 'Ancheta luxury LOVE',
                'valor_producto' => 75000,
                'descripcion_producto' => 'Ancheta love cervecera contiene 4 cervezas, chocolates monteblac, hershey´s, nutella, caja de chocolates, galletas, empacado en caja de madera con globos réflex y globos metalizados',
                'cant_producto' => 5,
                'foto_producto'=> '1.JPG',
                'categoria'=> 1,
            ] ,
            [
                'nom_producto'=> 'Ancheta LOVE',
                'valor_producto' => 90000,
                'descripcion_producto' => 'Ancheta love merienda contiene 3 cervezas, sándwich, café, peluche en piel de durazno, papas, dulces variados, galletas, empacado en caja de madera con globos réflex,4 globos con helio y metalizados.',
                'cant_producto' => 9,
                'foto_producto'=> '2.JPG',
                'categoria'=> 1,
            ] ,
            [
                'nom_producto'=> 'Ancheta Cervecera',
                'valor_producto' => 93000,
                'descripcion_producto' => 'Ancheta cervecera contiene 5 cervezas BBC, vaso cervecero, cupcakes, chocolatina hershey´s, empacado en hielera metálica decorada con globo burbuja.',
                'cant_producto' => 3,
                'foto_producto'=> '3.JPG',
                'categoria'=> 1,
            ] ,
            [
                'nom_producto'=> 'Ancheta dulcera Día de la Mujer ',
                'valor_producto' => 45000,
                'descripcion_producto' => 'Ancheta dulcera contiene vino gato negro, chocolates hershey, m&m, galletas, bombones de chocolate, empacada en caja de madera con globo metalizado marcado.',
                'cant_producto' => 8,
                'foto_producto'=> '4.JPG',
                'categoria'=> 1,
            ] ,
            [
                'nom_producto'=> 'Ancheta feliz día ',
                'valor_producto' => 40000,
                'descripcion_producto' => 'Ancheta contiene cerveza corona, snack, maní, globos réflex, empacado en caja de madera en forma de corazón con globo con helio.',
                'cant_producto' => 4,
                'foto_producto'=> '5.JPG',
                'categoria'=> 1,
            ] ,
            [
                'nom_producto'=> 'Ancheta Amor ',
                'valor_producto' => 55000,
                'descripcion_producto' => 'Ancheta amor contiene letrero te amo, peluche pequeño, snack, dulces variados, empacado en caja de cartón decorada.',
                'cant_producto' => 2,
                'foto_producto'=> '27.JPG',
                'categoria'=> 1,
            ] ,
            [
                'nom_producto'=> 'Caja de Fresas',
                'valor_producto' => 30000,
                'descripcion_producto' => 'Caja con 12 fresas bañadas en chocolate con letrero de te amo y na cerveza BBC empacada en caja de madera decorada',
                'cant_producto' => 8,
                'foto_producto'=> '1.JPG',
                'categoria'=> 2,
            ] ,
            [
                'nom_producto'=> 'Chocofresas',
                'valor_producto' => 28000,
                'descripcion_producto' => 'Caja con 9 fresas bañadas en chocolate decoradas tonalidad roja, empacadas en caja de cartón decorada.',
                'cant_producto' => 10,
                'foto_producto'=> '3.JPG',
                'categoria'=> 2,
            ] ,
            [
                'nom_producto'=> 'Caja chocolate',
                'valor_producto' => 50000,
                'descripcion_producto' => 'Caja de tres compartimientos contiene 9 fresas bañadas en chocolate decoradas con maní y dulces, control de videojuegos en chocolate y cerveza corona, empacado en caja de cartón decorada',
                'cant_producto' => 12,
                'foto_producto'=> '4.JPG',
                'categoria'=> 2,
            ] ,
            [
                'nom_producto'=> 'Caja Fresas ',
                'valor_producto' => 60000,
                'descripcion_producto' => '30 fresas bañadas en chocolate negro y blanco decoradas con chocolates corazón empacadas en caja de cartón decorada',
                'cant_producto' => 20,
                'foto_producto'=> '7.JPG',
                'categoria'=> 2,
            ] ,
            [
                'nom_producto'=> 'Dulcera',
                'valor_producto' => 35000,
                'descripcion_producto' => '6 fresas bañadas en chocolate, gomas, dulces variados, empacada en caja de cartón con tapa decorada',
                'cant_producto' => 30,
                'foto_producto'=> '9.JPG',
                'categoria'=> 2,
            ] ,
            [
                'nom_producto'=> 'Torta HBD ',
                'valor_producto' => 68000,
                'descripcion_producto' => 'Torta de vainilla bañada en chocolate decorada con rosas y fresas con chocolate',
                'cant_producto' => 10,
                'foto_producto'=> '12.JPG',
                'categoria'=> 2,
            ] ,
            [
                'nom_producto'=> 'Desayuno Mamá',
                'valor_producto' =>  45000,
                'descripcion_producto' => 'Desayuno feliz día mamá contiene yogurt con cereal, jamón con queso, porción de fruta, jugo de naranja, sándwich, dulces variado, peluche, empacado en caja de cartón decorada con globo metalizado.',
                'cant_producto' => 3,
                'foto_producto'=> '12.jpeg',
                'categoria'=> 3,
            ] ,
            [
                'nom_producto'=> 'Desayuno Cumpleaños',
                'valor_producto' =>  65000,
                'descripcion_producto' => 'Contiene huevos revueltos, porción de fruta, bebida caliente, galletas, dulces, jugo de naranja, sándwich, empacado en caja de madera decorada con globo metalizado y globo burbuja ',
                'cant_producto' => 8,
                'foto_producto'=> '5.jpg',
                'categoria'=> 3,
            ] ,
            [
                'nom_producto'=> 'Desayuno Aniversario',
                'valor_producto' =>  80000,
                'descripcion_producto' => 'Contiene mini torta, jugo de naranja, bebida caliente, porción de fruta, fresas con chocolate, sándwich, dulces variados, empacado en caja de madera decorada con globos. ',
                'cant_producto' => 5,
                'foto_producto'=> '9.jpg',
                'categoria'=> 3,
            ] ,
            [
                'nom_producto'=> 'Mini Desayuno',
                'valor_producto' =>  40000,
                'descripcion_producto' => 'Jugo de naranja, bebida caliente, sándwich, porción de fruta, snack, empacado en caja de naranja decorado con globo ',
                'cant_producto' => 30,
                'foto_producto'=> '16.jpg',
                'categoria'=> 3,
            ] ,
            [
                'nom_producto'=> 'Arreglo Floral',
                'valor_producto' =>  50000,
                'descripcion_producto' => 'Ramo de rosas decorado en caja cilíndrica decorada con globo burbuja',
                'cant_producto' => 4,
                'foto_producto'=> '1.jpg',
                'categoria'=> 4,
            ] ,
            [
                'nom_producto'=> 'Ancheta Floral',
                'valor_producto' =>  100000,
                'descripcion_producto' => 'Ancheta florar contiene ramo de rosas, botellas de champaña, cerveza, chocolates, cupcakes, globos réflex, globos con helio, empacado en caja de madera decorada con globos metálicos',
                'cant_producto' => 5,
                'foto_producto'=> '9.JPG',
                'categoria'=> 4,
            ] ,
            [
                'nom_producto'=> 'Caja Floral Mix',
                'valor_producto' =>  85000,
                'descripcion_producto' => 'Caja mix contiene ramo de rosas cupcakes con fresas bañadas en chocolate, frutas, empacado en caja de cartón decorada con globos.',
                'cant_producto' => 5,
                'foto_producto'=> '11.JPG',
                'categoria'=> 4,
            ] ,
            [
                'nom_producto'=> 'Merienda Sencilla',
                'valor_producto' =>  25000,
                'descripcion_producto' => 'Contiene galletas, dulces variados, yogurt griego, papas, empacado en caja de cartón decorada.',
                'cant_producto' => 6,
                'foto_producto'=> '14.jpg',
                'categoria'=> 5,
            ] ,
            [
                'nom_producto'=> 'Merienda',
                'valor_producto' =>  28000,
                'descripcion_producto' => 'Contiene ponqué, avena, jugo, galletas, dulces variados, empacado en caja de carton decorada.',
                'cant_producto' => 10,
                'foto_producto'=> '13.jpg',
                'categoria'=> 5,
            ] ,
        ];
        DB::table('productos')->insert($productos);
    }
}
