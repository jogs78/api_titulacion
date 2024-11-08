<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OpcionRequisito;

class OpcionRequisitoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

     #$table->foreignId('opcion_titulacion_id')->constrained('titulacion_opciones');
      #      $table->string('documento_requerido');
       #     $table->string('descripcion');
        #    $table->enum('tipo', ['PDF', 'imagen', 'Fotografia']);
    public function run(): void
    {
        $nuevo = new OpcionRequisito();
        $nuevo->opcion_titulacion_id=1;
        $nuevo->documento_requerido="Propuesta de trabajo profesional";
        $nuevo->descripcion="Documento que contenga el objetivo, el indice y la bibliografia propuestos"; #por rectificar descripcion
        $nuevo->tipo="PDF";
        $nuevo ->save();

        $nuevo = new OpcionRequisito();
        $nuevo->opcion_titulacion_id=2;
        $nuevo->documento_requerido="N/A";
        $nuevo->descripcion="Esta opcion no es viable"; #por rectificar descripcion
        $nuevo->tipo="PDF";
        $nuevo ->save();

        $nuevo = new OpcionRequisito();
        $nuevo->opcion_titulacion_id=3;
        $nuevo->documento_requerido="Constancia de investigacion"; #por verificar
        $nuevo->descripcion="Documento que acredite que se realizao la investigacion"; #por rectificar descripcion
        $nuevo->tipo="PDF";
        $nuevo ->save();

        $nuevo = new OpcionRequisito();
        $nuevo->opcion_titulacion_id=3;
        $nuevo->documento_requerido="Propuesta de trabajo profesional";
        $nuevo->descripcion="Documento que contenga el objetivo, el indice y la bibliografia propuestos"; #por rectificar descripcion
        $nuevo->tipo="PDF";
        $nuevo ->save();

        $nuevo = new OpcionRequisito();
        $nuevo->opcion_titulacion_id=4;
        $nuevo->documento_requerido="N/A";
        $nuevo->descripcion="Esta opcion no es viable"; #por rectificar descripcion
        $nuevo->tipo="PDF";
        $nuevo ->save();

        $nuevo = new OpcionRequisito();
        $nuevo->opcion_titulacion_id=5;
        $nuevo->documento_requerido="N/A";
        $nuevo->descripcion="Esta opcion no es viable"; #por rectificar descripcion
        $nuevo->tipo="PDF";
        $nuevo ->save();

        $nuevo = new OpcionRequisito();
        $nuevo->opcion_titulacion_id=6;
        $nuevo->documento_requerido="Modulo de materias o testimonio de desempeño sobresaliente - satisfactorio y constancia CENEVAL";
        $nuevo->descripcion="Documento en el que se muestre que se haya acreditado el examen globar por areas de conocimiento o la constancia de acreditacion del CENEVAL"; #por rectificar descripcion
        $nuevo->tipo="PDF";
        $nuevo ->save();

        $nuevo = new OpcionRequisito();
        $nuevo->opcion_titulacion_id=1;
        $nuevo->documento_requerido="Propuesta de trabajo profesional";
        $nuevo->descripcion="Documento que contenga el objetivo, el indice y la bibliografia propuestos"; #por rectificar descripcion
        $nuevo->tipo="PDF";
        $nuevo ->save();

        $nuevo = new OpcionRequisito();
        $nuevo->opcion_titulacion_id=7;
        $nuevo->documento_requerido="Curriculum vitae";
        $nuevo->descripcion="Documento con estudios, méritos, cargos, premios, experiencia laboral que ha desarrollado u obtenido una persona a lo largo de su vida laboral o académica"; #por rectificar descripcion
        $nuevo->tipo="PDF";
        $nuevo ->save();

        $nuevo = new OpcionRequisito();
        $nuevo->opcion_titulacion_id=7;
        $nuevo->documento_requerido="Propuesta de trabajo profesional";
        $nuevo->descripcion="Documento que contenga el objetivo, el indice y la bibliografia propuestos"; #por rectificar descripcion
        $nuevo->tipo="PDF";
        $nuevo ->save();

        $nuevo = new OpcionRequisito();
        $nuevo->opcion_titulacion_id=7;
        $nuevo->documento_requerido="Constancia de trabajo (Indicando Fecha de Inicio)";
        $nuevo->descripcion="Documento que acredita que una persona se encuentra trabajando actualmente y la antigüedad que tiene en el puesto o cargo que desempeña"; #por rectificar descripcion
        $nuevo->tipo="PDF";
        $nuevo ->save();

        $nuevo = new OpcionRequisito();
        $nuevo->opcion_titulacion_id=7;
        $nuevo->documento_requerido="Constancia de innovacion y/o aportacion tecnica"; #por verificar
        $nuevo->descripcion="Documento oficial que reconoce la contribución significativa en el campo de la innovación tecnológica o científica."; #por rectificar descripcion
        $nuevo->tipo="PDF";
        $nuevo ->save();

        $nuevo = new OpcionRequisito();
        $nuevo->opcion_titulacion_id=8;
        $nuevo->documento_requerido="N/A";
        $nuevo->descripcion="Esta opcion no es viable"; #por rectificar descripcion
        $nuevo->tipo="PDF";
        $nuevo ->save();

        $nuevo = new OpcionRequisito();
        $nuevo->opcion_titulacion_id=9;
        $nuevo->documento_requerido="Documento de avance de maestria o especialidad";
        $nuevo->descripcion="Constancia del 40% de créditos de maestria o él 100% de una especialidad con calificación de 80 como mínimo, créditos aprobados y total de créditos que consta la maestría."; #por rectificar descripcion
        $nuevo->tipo="PDF";
        $nuevo ->save();

        $nuevo = new OpcionRequisito();
        $nuevo->opcion_titulacion_id=9;
        $nuevo->documento_requerido="Contenidos Tematicos de la maestria o especialidad";
        $nuevo->descripcion="Plan de estudios de la maestria o temario de cada una de las materias"; #por rectificar descripcion
        $nuevo->tipo="PDF";
        $nuevo ->save();

        $nuevo = new OpcionRequisito();
        $nuevo->opcion_titulacion_id=9;
        $nuevo->documento_requerido="REVOE";
        $nuevo->descripcion="Registro de validacion oficial de estudios"; #por rectificar descripcion
        $nuevo->tipo="PDF";
        $nuevo ->save();

        $nuevo = new OpcionRequisito();
        $nuevo->opcion_titulacion_id=9;
        $nuevo->documento_requerido="Certificado de validez";
        $nuevo->descripcion="Certificacion de validez de la direccion General de incorporacion y revalidacion (para estudios en el extanjero y en el caso de que la maestria no pertenezca ak SNEST"; #por rectificar descripcion
        $nuevo->tipo="PDF";
        $nuevo ->save();

        $nuevo = new OpcionRequisito();
        $nuevo->opcion_titulacion_id=10;
        $nuevo->documento_requerido="Propuesta de trabajo profesional";
        $nuevo->descripcion="Documento que contenga el objetivo, el indice y la bibliografia propuestos"; #por rectificar descripcion
        $nuevo->tipo="PDF";
        $nuevo ->save();

        $nuevo = new OpcionRequisito();
        $nuevo->opcion_titulacion_id=10;
        $nuevo->documento_requerido="Carta de Asesor externo";
        $nuevo->descripcion="Carta de asesor externo indicando sus consideraciones para que la residencia sea propuestas para titulacion"; #por rectificar descripcion
        $nuevo->tipo="PDF";
        $nuevo ->save();

        $nuevo = new OpcionRequisito();
        $nuevo->opcion_titulacion_id=11;
        $nuevo->documento_requerido="Constancia de difusion de proyecto";
        $nuevo->descripcion="Constancia de haber difundido el proyecto en forma oral emitida por el departamento academico correspondiente"; #por rectificar descripcion
        $nuevo->tipo="PDF";
        $nuevo ->save();

        $nuevo = new OpcionRequisito();
        $nuevo->opcion_titulacion_id=11;
        $nuevo->documento_requerido="Carta de liberaciom";
        $nuevo->descripcion="Liberacion de informe tecnico"; #por rectificar descripcion
        $nuevo->tipo="PDF";
        $nuevo ->save();

        $nuevo = new OpcionRequisito();
        $nuevo->opcion_titulacion_id=11;
        $nuevo->documento_requerido="Constancia";
        $nuevo->descripcion="Constancia de proyecto de la materia de Taller de investigacion II"; #por rectificar descripcion
        $nuevo->tipo="PDF";
        $nuevo ->save();
    }
}
