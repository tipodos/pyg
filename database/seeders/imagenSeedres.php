<?php

namespace Database\Seeders;

use App\Models\categoria_img;
use App\Models\image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class imagenSeedres extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoria1 = categoria_img::where('nombre', 'inicio1')->first();
        $categoria2 = categoria_img::where('nombre', 'inicio2')->first();
        $categoria3 = categoria_img::where('nombre', 'inicio3')->first();
        $categoria4 = categoria_img::where('nombre', 'nosotros')->first();
        $categoria5 = categoria_img::where('nombre', 'ofrecemos1')->first();
        $categoria6 = categoria_img::where('nombre', 'ofrecemos2')->first();
        $categoria7 = categoria_img::where('nombre', 'ofrecemos3')->first();
        $categoria8 = categoria_img::where('nombre', 'ofrecemos4')->first();
        $categoria9 = categoria_img::where('nombre', 'galeria')->first();

        $imagen1= new image();
        $imagen1->nombre="inicio1";
        $imagen1->categoria_id=$categoria1->id;
        $imagen1->img="inicio1.jpg";
        $imagen1->save();

        $imagen2= new image();
        $imagen2->nombre="inicio2";
        $imagen2->categoria_id=$categoria2->id;
        $imagen2->img="inicio2.jpg";
        $imagen2->save();

        $imagen12= new image();
        $imagen12->nombre="inicio3";
        $imagen12->categoria_id=$categoria3->id;
        $imagen12->img="inicio3.jpg";
        $imagen12->save();

        $imagen3= new image();
        $imagen3->nombre="nosotros";
        $imagen3->categoria_id=$categoria4->id;
        $imagen3->img="nosotros.png";
        $imagen3->save();

        $imagen4= new image();
        $imagen4->nombre="ofrecemos1";
        $imagen4->categoria_id=$categoria5->id;
        $imagen4->img="ofrecemos1.jpg";
        $imagen4->save();

        $imagen5= new image();
        $imagen5->nombre="ofrecemos2";
        $imagen5->categoria_id=$categoria6->id;
        $imagen5->img="ofrecemos2.jpg";
        $imagen5->save();

        $imagen6= new image();
        $imagen6->nombre="ofrecemos3";
        $imagen6->categoria_id=$categoria7->id;
        $imagen6->img="ofrecemos3.jpg";
        $imagen6->save();

        $imagen7= new image();
        $imagen7->nombre="ofrecemos4";
        $imagen7->categoria_id=$categoria8->id;
        $imagen7->img="ofrecemos4.jpg";
        $imagen7->save();

        $imagen8= new image();
        $imagen8->nombre="galeria1";
        $imagen8->categoria_id=$categoria9->id;
        $imagen8->img="galeria1.jpg";
        $imagen8->save();

        $imagen9= new image();
        $imagen9->nombre="galeria2";
        $imagen9->categoria_id=$categoria9->id;
        $imagen9->img="galeria2.jpg";
        $imagen9->save();

        $imagen10= new image();
        $imagen10->nombre="galeria3";
        $imagen10->categoria_id=$categoria9->id;
        $imagen10->img="galeria3.jpg";
        $imagen10->save();

        $imagen11= new image();
        $imagen11->nombre="galeria4";
        $imagen11->categoria_id=$categoria9->id;
        $imagen11->img="galeria4.jpg";
        $imagen11->save();

        $imagen12= new image();
        $imagen12->nombre="galeria5";
        $imagen12->categoria_id=$categoria9->id;
        $imagen12->img="galeria5.jpg";
        $imagen12->save();

        $imagen12= new image();
        $imagen12->nombre="galeria6";
        $imagen12->categoria_id=$categoria9->id;
        $imagen12->img="galeria6.jpg";
        $imagen12->save();


    }
}
