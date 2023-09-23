<?php

namespace Database\Seeders;

use App\Models\Conocimiento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConocimientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//Conocimientos en la asignatura
//Demostración de conocimientos
//El docente no tiene dificultades para responder algunas interrogantes que se le plantea en clase
//Nunca las tiene
//Tiene
//Siempre las tiene
//En la explicación desarrollada advierte Ud., que el docente domina la asignatura
//Bastante
//Regular
//Nada
//Los objetivos planteados en su criterio, están relacionados con los contenidos que el docente desarrolla en cada clase
//Muy bien relacionados
//Relacionados
//Nada relacionados
//En el desarrollo del tema, el docente demuestra falta de conocimientos
//Frecuentemente
//Alguna vez
//Nunca
//El docente tiene facilidad en la ejemplificación de algunos temas
//Bastante facilidad
//Relativa
//Ninguna facilidad
//Uso de conocimiento
//En el desarrollo de la asignatura el docente, demuestra el uso de la totalidad de sus conocimientos
//Siempre
//Casi siempre
//Nunca
//Utiliza distintos criterios o ejemplos para misma idea
//Siempre
//Casi siempre
//Nunca
//El docente demuestra preocupación sobre la formación del alumno
//Siempre
//Casi siempre
//Nunca
//El docente es exigente consigo mismo
//Siempre
//Casi siempre
//Nunca
//El docente es exigente con el estudiante.
//Siempre
//Casi siempre
//Nunca
//Actualización de conocimientos
//El docente. demuestra que utiliza información actualizada en el desarrollo de su clase
//Siempre
//Casi siempre
//Nunca
//Los ejemplos Utilizados, tiene que ver con los Avances de la ciencia y tecnología o la realidad actual
//Si
//No
//En el desarrollo de la gestión académica el docente sugiere al alumno. nueva bibliografía
//Si
//No
//Cualidades pedagógicas
//Planificación
//El docente hace conocer los objetivos de la clase
//Siempre
//Rara vez
//Nunca
//El docente presenta la información de manera organizada
//Siempre
//Rara vez
//Nunca
//El docente luego de transcurrida la clase, realiza una síntesis de la misma
//Siempre
//Rara vez
//Nunca
//Motivación
//El docente presenta el tema en forma motivadora
//Siempre
//Rara vez
//Nunca
//El docente, intercala en la exposición algunas preguntas que estimulen la atención
//Siempre
//Frecuentemente
//Nunca
//El docente, dirige preguntas al auditorio
//Siempre
//Rara vez
//Nunca
//El docente, mantiene interesado al auditorio
//Si
//No
//Diálogo
//En el desarrollo de la clase el docente, acepta criterios distintos a los de su exposición.
//Siempre
//Rara vez
//Nunca
//El docente, en su trabajo de aula
//Siempre dialoga con los estudiantes
//Dialoga alguna vez
//Nunca dialoga
//Cuando se le interroga, el docente
//Responde
//Se molesta
//Es indiferente
//Al finalizar la clase y a requerimiento de los alumnos, el docente
//Aclara dudas a los estudiantes
//No presta atención al requerimiento
//Se marcha
//El docente en clase, impone sus criterios
//Siempre
//Rara vez
//Nunca
//Método
//En su criterio, el docente, a lo largo de su exposición refuerza los datos más significativos
//Siempre
//Casi siempre
//Rara vez
//Nunca
//El docente, en su exposición es
//Muy claro
//Poco claro
//Nada claro
//Usted cree que el docente utiliza
//Un buen método de enseñanza
//Un método aceptable
//Un método poco aceptable
//Cumplimiento
//Asistencia
//El docente, cumple con los horarios establecidos
//Siempre
//Casi siempre
//No cumple
//Exámenes
//El docente, devuelve los exámenes oportunamente
//Siempre
//A veces
//Casi nunca
//El docente, resuelve y/o analiza los exámenes
//Siempre
//A veces
//Casi nunca

        $conocimiento = Conocimiento::create(['name' => 'Conocimientos en la asignatura']);
        $uso = $conocimiento->usos()->create(['name' => 'Demostración de conocimientos']);
        $pregunta = $uso->preguntas()->create(['name' => 'El docente no tiene dificultades para responder algunas interrogantes que se le plantea en clase']);
        $pregunta->respuestas()->create(['name' => 'Nunca las tiene']);
        $pregunta->respuestas()->create(['name' => 'Tiene']);
        $pregunta->respuestas()->create(['name' => 'Siempre las tiene']);

        $pregunta = $uso->preguntas()->create(['name' => 'En la explicación desarrollada advierte Ud., que el docente domina la asignatura']);
        $pregunta->respuestas()->create(['name' => 'Bastante']);
        $pregunta->respuestas()->create(['name' => 'Regular']);
        $pregunta->respuestas()->create(['name' => 'Nada']);

        $pregunta = $uso->preguntas()->create(['name' => 'Los objetivos planteados en su criterio, están relacionados con los contenidos que el docente desarrolla en cada clase']);
        $pregunta->respuestas()->create(['name' => 'Muy bien relacionados']);
        $pregunta->respuestas()->create(['name' => 'Relacionados']);
        $pregunta->respuestas()->create(['name' => 'Nada relacionados']);

        $pregunta = $uso->preguntas()->create(['name' => 'En el desarrollo del tema, el docente demuestra falta de conocimientos']);
        $pregunta->respuestas()->create(['name' => 'Frecuentemente']);
        $pregunta->respuestas()->create(['name' => 'Alguna vez']);
        $pregunta->respuestas()->create(['name' => 'Nunca']);

        $pregunta = $uso->preguntas()->create(['name' => 'El docente tiene facilidad en la ejemplificación de algunos temas']);
        $pregunta->respuestas()->create(['name' => 'Bastante facilidad']);
        $pregunta->respuestas()->create(['name' => 'Relativa']);
        $pregunta->respuestas()->create(['name' => 'Ninguna facilidad']);

        $uso = $conocimiento->usos()->create(['name' => 'Uso de conocimiento']);
        $pregunta = $uso->preguntas()->create(['name' => 'En el desarrollo de la asignatura el docente, demuestra el uso de la totalidad de sus conocimientos']);
        $pregunta->respuestas()->create(['name' => 'Siempre']);
        $pregunta->respuestas()->create(['name' => 'Casi siempre']);
        $pregunta->respuestas()->create(['name' => 'Nunca']);

        $pregunta = $uso->preguntas()->create(['name' => 'Utiliza distintos criterios o ejemplos para misma idea']);
        $pregunta->respuestas()->create(['name' => 'Siempre']);
        $pregunta->respuestas()->create(['name' => 'Casi siempre']);
        $pregunta->respuestas()->create(['name' => 'Nunca']);

        $pregunta = $uso->preguntas()->create(['name' => 'El docente demuestra preocupación sobre la formación del alumno']);
        $pregunta->respuestas()->create(['name' => 'Siempre']);
        $pregunta->respuestas()->create(['name' => 'Casi siempre']);
        $pregunta->respuestas()->create(['name' => 'Nunca']);

        $pregunta = $uso->preguntas()->create(['name' => 'El docente es exigente consigo mismo']);
        $pregunta->respuestas()->create(['name' => 'Siempre']);
        $pregunta->respuestas()->create(['name' => 'Casi siempre']);
        $pregunta->respuestas()->create(['name' => 'Nunca']);

        $pregunta = $uso->preguntas()->create(['name' => 'El docente es exigente con el estudiante.']);
        $pregunta->respuestas()->create(['name' => 'Siempre']);
        $pregunta->respuestas()->create(['name' => 'Casi siempre']);
        $pregunta->respuestas()->create(['name' => 'Nunca']);

        $uso = $conocimiento->usos()->create(['name' => 'Actualización de conocimientos']);
        $pregunta = $uso->preguntas()->create(['name' => 'El docente. demuestra que utiliza información actualizada en el desarrollo de su clase']);
        $pregunta->respuestas()->create(['name' => 'Siempre']);
        $pregunta->respuestas()->create(['name' => 'Casi siempre']);
        $pregunta->respuestas()->create(['name' => 'Nunca']);

        $pregunta = $uso->preguntas()->create(['name' => 'Los ejemplos Utilizados, tiene que ver con los Avances de la ciencia y tecnología o la realidad actual']);
        $pregunta->respuestas()->create(['name' => 'Si']);
        $pregunta->respuestas()->create(['name' => 'No']);

        $pregunta = $uso->preguntas()->create(['name' => 'En el desarrollo de la gestión académica el docente sugiere al alumno. nueva bibliografía']);
        $pregunta->respuestas()->create(['name' => 'Si']);
        $pregunta->respuestas()->create(['name' => 'No']);

        $conocimiento = Conocimiento::create(['name' => 'Cualidades pedagógicas']);
        $uso = $conocimiento->usos()->create(['name' => 'Planificación']);
        $pregunta = $uso->preguntas()->create(['name' => 'El docente hace conocer los objetivos de la clase']);
        $pregunta->respuestas()->create(['name' => 'Siempre']);
        $pregunta->respuestas()->create(['name' => 'Rara vez']);
        $pregunta->respuestas()->create(['name' => 'Nunca']);

        $pregunta = $uso->preguntas()->create(['name' => 'El docente presenta la información de manera organizada']);
        $pregunta->respuestas()->create(['name' => 'Siempre']);
        $pregunta->respuestas()->create(['name' => 'Rara vez']);
        $pregunta->respuestas()->create(['name' => 'Nunca']);

        $pregunta = $uso->preguntas()->create(['name' => 'El docente luego de transcurrida la clase, realiza una síntesis de la misma']);
        $pregunta->respuestas()->create(['name' => 'Siempre']);
        $pregunta->respuestas()->create(['name' => 'Rara vez']);
        $pregunta->respuestas()->create(['name' => 'Nunca']);

        $uso = $conocimiento->usos()->create(['name' => 'Motivación']);
        $pregunta = $uso->preguntas()->create(['name' => 'El docente presenta el tema en forma motivadora']);
        $pregunta->respuestas()->create(['name' => 'Siempre']);
        $pregunta->respuestas()->create(['name' => 'Rara vez']);
        $pregunta->respuestas()->create(['name' => 'Nunca']);

        $pregunta = $uso->preguntas()->create(['name' => 'El docente, intercala en la exposición algunas preguntas que estimulen la atención']);
        $pregunta->respuestas()->create(['name' => 'Siempre']);
        $pregunta->respuestas()->create(['name' => 'Frecuentemente']);
        $pregunta->respuestas()->create(['name' => 'Nunca']);

        $pregunta = $uso->preguntas()->create(['name' => 'El docente, dirige preguntas al auditorio']);
        $pregunta->respuestas()->create(['name' => 'Siempre']);
        $pregunta->respuestas()->create(['name' => 'Rara vez']);
        $pregunta->respuestas()->create(['name' => 'Nunca']);

        $pregunta = $uso->preguntas()->create(['name' => 'El docente, mantiene interesado al auditorio']);
        $pregunta->respuestas()->create(['name' => 'Si']);
        $pregunta->respuestas()->create(['name' => 'No']);

        $uso = $conocimiento->usos()->create(['name' => 'Diálogo']);
        $pregunta = $uso->preguntas()->create(['name' => 'En el desarrollo de la clase el docente, acepta criterios distintos a los de su exposición']);
        $pregunta->respuestas()->create(['name' => 'Siempre']);
        $pregunta->respuestas()->create(['name' => 'Rara vez']);
        $pregunta->respuestas()->create(['name' => 'Nunca']);

        $pregunta = $uso->preguntas()->create(['name' => 'El docente, en su trabajo de aula']);
        $pregunta->respuestas()->create(['name' => 'Siempre dialoga con los estudiantes']);
        $pregunta->respuestas()->create(['name' => 'Dialoga alguna vez']);
        $pregunta->respuestas()->create(['name' => 'Nunca dialoga']);

        $pregunta = $uso->preguntas()->create(['name' => 'Cuando se le interroga, el docente']);
        $pregunta->respuestas()->create(['name' => 'Responde']);
        $pregunta->respuestas()->create(['name' => 'Se molesta']);
        $pregunta->respuestas()->create(['name' => 'Es indiferente']);

        $pregunta = $uso->preguntas()->create(['name' => 'Al finalizar la clase y a requerimiento de los alumnos, el docente']);
        $pregunta->respuestas()->create(['name' => 'Aclara dudas a los estudiantes']);
        $pregunta->respuestas()->create(['name' => 'No presta atención al requerimiento']);
        $pregunta->respuestas()->create(['name' => 'Se marcha']);

        $pregunta = $uso->preguntas()->create(['name' => 'El docente en clase, impone sus criterios']);
        $pregunta->respuestas()->create(['name' => 'Siempre']);
        $pregunta->respuestas()->create(['name' => 'Rara vez']);
        $pregunta->respuestas()->create(['name' => 'Nunca']);

        $uso = $conocimiento->usos()->create(['name' => 'Método']);
        $pregunta = $uso->preguntas()->create(['name' => 'En su criterio, el docente, a lo largo de su exposición refuerza los datos más significativos']);
        $pregunta->respuestas()->create(['name' => 'Siempre']);
        $pregunta->respuestas()->create(['name' => 'Casi siempre']);
        $pregunta->respuestas()->create(['name' => 'Rara vez']);
        $pregunta->respuestas()->create(['name' => 'Nunca']);

        $pregunta = $uso->preguntas()->create(['name' => 'El docente, en su exposición es']);
        $pregunta->respuestas()->create(['name' => 'Muy claro']);
        $pregunta->respuestas()->create(['name' => 'Poco claro']);
        $pregunta->respuestas()->create(['name' => 'Nada claro']);

        $pregunta = $uso->preguntas()->create(['name' => 'Usted cree que el docente utiliza']);
        $pregunta->respuestas()->create(['name' => 'Un buen método de enseñanza']);
        $pregunta->respuestas()->create(['name' => 'Un método aceptable']);
        $pregunta->respuestas()->create(['name' => 'Un método poco aceptable']);

        $conocimiento = Conocimiento::create(['name' => 'Cumplimiento']);
        $uso = $conocimiento->usos()->create(['name' => 'Asistencia']);
        $pregunta = $uso->preguntas()->create(['name' => 'El docente, cumple con los horarios establecidos']);
        $pregunta->respuestas()->create(['name' => 'Siempre']);
        $pregunta->respuestas()->create(['name' => 'Casi siempre']);
        $pregunta->respuestas()->create(['name' => 'No cumple']);

        $uso = $conocimiento->usos()->create(['name' => 'Exámenes']);
        $pregunta = $uso->preguntas()->create(['name' => 'El docente, devuelve los exámenes oportunamente']);
        $pregunta->respuestas()->create(['name' => 'Siempre']);
        $pregunta->respuestas()->create(['name' => 'A veces']);
        $pregunta->respuestas()->create(['name' => 'Casi nunca']);

        $pregunta = $uso->preguntas()->create(['name' => 'El docente, resuelve y/o analiza los exámenes']);
        $pregunta->respuestas()->create(['name' => 'Siempre']);
        $pregunta->respuestas()->create(['name' => 'A veces']);
        $pregunta->respuestas()->create(['name' => 'Casi nunca']);
    }
}
