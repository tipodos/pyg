<?php

namespace Database\Seeders;

use App\Models\texto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class textoSeedres extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $texto1= new texto();
        $texto1-> campo = 'nosotros';
        $texto1-> titulo = 'nosotros';
        $texto1-> texto = 'En GAS, nos especializamos en la instalación, mantenimiento y certificación de sistemas de gas en comercios, restaurantes, hoteles y viviendas. Con años de experiencia en el sector, ofrecemos soluciones integrales utilizando materiales de alta calidad, como tuberías de cobre y bronce, para garantizar la seguridad y eficiencia de cada instalación. Nuestro equipo de profesionales capacitados se encarga de cada proyecto con un enfoque en la calidad, cumplimiento de normativas de seguridad y satisfacción del cliente. Ya sea que necesites una nueva instalación, mantenimiento preventivo o asesoría técnica, en P&G estamos comprometidos con ofrecerte un servicio seguro, confiable y de excelencia.';
        $texto1-> save();

        $texto1= new texto();
        $texto1-> campo = 'ofrecemos1';
        $texto1-> titulo = 'Instalaciones de gas domestico';
        $texto1-> texto = 'Utilizamos nuevas tendencias en instalaciones de redes, a través de nuestro departamento de ingeniería brindamos asesoría integral, diseñamos, instalamos y asesoramos en la ejecución de proyectos en residencias, viviendas, condominios, edificaciones, departamentos, penthouse, casas de playa, casa de campo.
- Instalaciones limpias y seguras, energía para cocción, calefacción y agua caliente sanitaria y sus conexiones a los aparatos a gas, cocinas, encimeras, termas, termotanques, calentadores de paso, termas y calentadores de gran volumen, secadoras, calefacción modular, calderas de condensación, climatización, calentadores de piscina.
- Ofrecemos servicios especializados de instalaciones con altos estándares de calidad, garantía y certificación; basados en la experiencia, responsabilidad y cualificación de nuestro personal profesional y técnico.
- Garantía limitada de instalaciones y sobre piezas: nuestra garantía incluye la reparación, reposición o cambio del producto y/o componente sin cargo alguno de los equipos, instrumentos y accesorios en general instalados.';
        $texto1-> save();

        $texto1= new texto();
        $texto1-> campo = 'ofrecemos2';
        $texto1-> titulo = 'Servicios de mantenimiento de tuberías de gas.';
        $texto1-> texto = 'Ofrecemos servicios de mantenimiento de tuberías de gas en cobre y bronce para garantizar la seguridad y eficiencia de los sistemas de gas en comercios, restaurantes, hoteles y otros establecimientos. Nuestro equipo de técnicos especializados realiza inspecciones, limpieza, detección de fugas y reparaciones, asegurando el correcto funcionamiento y cumplimiento de las normativas de seguridad';
        $texto1-> save();

        $texto1= new texto();
        $texto1-> campo = 'ofrecemos3';
        $texto1-> titulo = 'Mantenimiento preventivo y correctivo de sistemas de gas';
        $texto1-> texto = 'ofrecemos servicios de mantenimiento preventivo y correctivo para sistemas de gas en comercios, restaurantes y hoteles. Realizamos inspecciones detalladas, pruebas de presión y limpieza para asegurar la seguridad y eficiencia de las instalaciones de gas en cobre y bronce. Nuestro equipo de técnicos especializados se encarga de prevenir y corregir fallas, garantizando un sistema seguro y duradero conforme a las normativas vigentes.';
        $texto1-> save();

        $texto1= new texto();
        $texto1-> campo = 'ofrecemos4';
        $texto1-> titulo = 'Asesoría y certificación de instalaciones de gas';
        $texto1-> texto = 'ofrecemos servicios de asesoría técnica y certificación de instalaciones de gas para asegurar que tus proyectos cumplan con todas las normativas de seguridad y legales. Nuestro equipo de expertos proporciona orientación en el diseño y planificación de sistemas de gas, ya sea para nuevas construcciones o remodelaciones, garantizando que las instalaciones sean seguras y eficientes. Además, realizamos la certificación oficial de las instalaciones para asegurar que todo esté en conformidad con las regulaciones locales, brindando tranquilidad a nuestros clientes.';
        $texto1-> save();
    }
}
