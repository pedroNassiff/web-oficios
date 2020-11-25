<?php

use Illuminate\Database\Seeder;
use App\Models\Especialidad;

class EspecialidadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Electricista
        $especialidad = new Especialidad();
        $especialidad->oficio_id = 1;
        $especialidad->nombre = "Domiciliaria";
        $especialidad->descripcion = "Las instalaciones eléctricas domiciliarias son conexiones fundamentales ya que son la fuente de suministro eléctrico de nuestros hogares.";
        $especialidad->save();

        $especialidad = new Especialidad();
        $especialidad->oficio_id = 1;
        $especialidad->nombre = "Automotor";
        $especialidad->descripcion = "Servicio de reparación de sistemas eléctricos para automóviles. El correcto funcionamiento de un automóvil depende imprescindiblemente de su sistema eléctrico, que está formado por una gran cantidad de circuitos por la cuál circula una electricidad.";
        $especialidad->save();

        $especialidad = new Especialidad();
        $especialidad->oficio_id = 1;
        $especialidad->nombre = "Industrial";
        $especialidad->descripcion = "Servicios integrales de energía eléctrica, diseño, proyecto, ejecución y mantenimiento.";
        $especialidad->save();

        //Carpintería
        $especialidad = new Especialidad();
        $especialidad->oficio_id = 2;
        $especialidad->nombre = "Madera";
        $especialidad->descripcion = "Diseño y construcción de una variedad de muebles y aberturas para obra en madera.";
        $especialidad->save();

        $especialidad = new Especialidad();
        $especialidad->oficio_id = 2;
        $especialidad->nombre = "Metálica";
        $especialidad->descripcion = "Construcción e instalación de rejas, balcones, vallas metálicas, portones para garajes, puertas, ventanas y cierres de galerías de acero, aluminio o PVC para viviendas, locales comerciales y naves industriales.";
        $especialidad->save();
    }
}
