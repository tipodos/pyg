<?php

namespace Database\Seeders;

use App\Models\categoria_img;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class categoriaSeedres extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoria1= new categoria_img();
        $categoria1-> nombre = 'inicio1';
        $categoria1-> save();

        $categoria2= new categoria_img();
        $categoria2-> nombre = 'inicio2';
        $categoria2-> save();

        $categoria2= new categoria_img();
        $categoria2-> nombre = 'inicio3';
        $categoria2-> save();

        $categoria3= new categoria_img();
        $categoria3-> nombre = 'nosotros';
        $categoria3-> save();

        $categoria4= new categoria_img();
        $categoria4-> nombre = 'ofrecemos1';
        $categoria4-> save();

        $categoria5= new categoria_img();
        $categoria5-> nombre = 'ofrecemos2';
        $categoria5-> save();

        $categoria6= new categoria_img();
        $categoria6-> nombre = 'ofrecemos3';
        $categoria6-> save();

        $categoria7= new categoria_img();
        $categoria7-> nombre = 'ofrecemos4';
        $categoria7-> save();

        $categoria8= new categoria_img();
        $categoria8-> nombre = 'galeria';
        $categoria8-> save();
    }
}
