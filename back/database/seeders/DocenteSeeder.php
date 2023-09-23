<?php

namespace Database\Seeders;

use App\Models\Docente;
use App\Models\Materia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//ANDRADE ZEBALLOS ANGELICA MARÍA
//
//maria.andrade@sistemas.edu.bo
//ANÁLISIS DISCRETO - INF 1210
//REINGENIERÍA - SIS 3701
//SISTEMAS DE INFORMACION GEOGRAFICA - INF 3920
//ARRIEN AYALA RENEE JAIME
//
//renee.arrien@sistemas.edu.bo
//COMPETITIVIDAD Y PRODUCTIVIDAD - SIS 3952
//DISEÑO ORGANIZACIONAL - SIS 3652
//
//AYALA LAFUENTE AMPARO
//
//amparo.lafuente@sistemas.edu.bo
//METODOLOGIA DE LA INVESTIGACION - SIS 4710
//
//BARRIOS CORDAVA JUAN
//
//juan.barrios@sistemas.edu.bo
//REDES DE BANDA ANCHA - INF 3742
//PLANIFICACIÓN EMPRESARIAL - SIS 3702
//
//BERMÚDEZ VARGAS JULIO CESAR
//
//julio.bermudez@sistemas.edu.bo
//ANÁLISIS DISCRETO - INF 1210
//ESTRUCTURA DE DATOS - SIS 2310
//METODOLOGÍA DE LA PROGRAMACIÓN II - SIS 2210
//METODOLOGÍA DE LA PROGRAMACIÓN III - SIS 2330
//
//BERNAL ALTAMIRANO CARLOS OMAR
//
//carlos.bernal@sistemas.edu.bo
//
//GESTIÓN DE PROYECTOS - SIS 2820
//
//BERNAL MARTÍNEZ RAMIRO MARCIAL
//
//ramiro.bernal@sistemas.edu.bo
//DINAMICA DE SISTEMAS I - SIS 3630
//INVESTIGACIÓN OPERATIVA II - SIS 2610
//
//CÉSPEDES ROJAS ANDY ALEX
//
//andy.cespedes@sistemas.edu.bo
//JEFE GAB. COMPUTACION - LAB 1280
//REALIDAD NACIONAL - SIS 4940
//SISTEMAS OPERATIVOS II - INF 3405
//SISTEMAS DE TRANSMISION OPTICA - INF 3632
//TALLER DE DESARROLLO DE SW - INF 3741
//TELEFONÍA Y CONMUTACIÓN - INF 3752
//
//CHINCHE IMAÑA FRANZ
//
//franz.chinche@sistemas.edu.bo
//METODOLOGÍA DE LA PROGRAMACIÓN II - SIS 2210
//METODOLOGÍA DE LA PROGRAMACIÓN III - SIS 2330
//PROGRAMACIÓN GRÁFICA - SIS 2430
//PROYECTOS DE INGENIERIA DE SISTEMAS - SIS 2740
//TEORÍA DE LA INFORMACIÓN - INF 2610
//INVESTIGACIÓN OPERATIVA IV - SIS 3843
//
//CHOQUE UÑO JUAN GREGORIO
//
//juan.choque@sistemas.edu.bo
//ESTRUCTURA DE COMPUTADORES II - INF 3530
//JEFE LAB. DE HARDWARE - LAB 1450
//PROGRAMACIÓN GRÁFICA - SIS 2430
//
//ESCALANTE LUNARIO CESAR FERNANDO
//
//cesar.escalante@sistemas.edu.bo
//INVESTIGACIÓN OPERATIVA I - SIS 2510
//JEFE GAB. COMPUTACION - LAB 1280
//SEGURIDAD DE SISTEMAS INFORMÁTICOS - INF 2710
//SISTEMAS OPERATIVOS I - INF 2310
//TALLER DE GRADUACIÓN II - SIS 3910
//
//FERNANDEZ GUTIERREZ ROLY MARCOS
//
//roly.fernadez@sistemas.edu.bo
//JEFE GAB. COMPUTACION - LAB 1280
//METODOLOGÍA DE LA PROGRAMACIÓN III - SIS 2330
//PLANIFICACION Y CONTROL DE LA PRODUCCIÓN I - SIS 3640
//PLANIFICACION Y CONTROL DE LA PRODUCCION II - SIS 3763
//
//GUZMÁN CORONEL ROLY GONZALO
//
//roly.guzman@sistemas.edu.bo
//METODOLOGÍA DE LA PROGRAMACIÓN I - SIS 1110
//ANÁLISIS DISCRETO SIS 1210
//
//HELGUERO VELÁSQUEZ HERNÁN LUIS
//
//hernan.helguero@sistemas.edu.bo
//GRADUACIÓN - SIS 5100
//JEFE LAB. MECATRONICA - LAB1456
//PROGRAMACION DE ROBOTS - INF 3751
//
//HUANCA CALLE RONALD
//
//ronald.huanca@sistemas.edu.bo
//DINAMICA DE SISTEMAS I - SIS 3630
//INVESTIGACIÓN OPERATIVA II - SIS 2610
//INVESTIGACIÓN OPERATIVA III - SIS 3753
//TALLER DE GRADUACIÓN I - SIS 3810
//TALLER DE GRADUACIÓN II - SIS 3910
//
//MAMANI MAMANI SAUL
//
//saul.mamani@sistemas.edu.bo
//ACTUALIZACIÓN TECNOLOGICA - SIS 2420
//
//MARTINEZ CROVO DENNIS
//
//dennis.martinez@sistemas.edu.bo
//REDES INFORMATICAS III - INF 3812
//
//MAYTA SARMIENTO DAVID
//
//david.mayta@sistemas.edu.bo
//BASE DE DATOS II - INF 3520
//COMERCIO ELECTRONICO - SIS 3662
//
//MEDINACELI ORTIZ RUBEN
//
//ruben.medinaceli@sistemas.edu.bo
//SIMULACIÓN DE SISTEMAS - SIS 2520
//MODELOS ECONOMÉTRICOS - SIS 3540
//GRADUACIÓN - SIS 5100
//
//MEJIA GARCIA ELIZABETH
//
//elizabeth.mejia@sistemas.edu.bo
//TALLER DE GRADUACIÓN I - SIS 3810
//
//MENACHO MOLLO IVONNE KARINA
//
//ivonne.menacho@sistemas.edu.bo
//INGERIA DE SOFTWARE I- INF 2720
//INGENIERÍA DE SOFTWARE II - INF 3811
//
//MIRANDA ALCONCE RICHARD OMAR
//
//richard.miranda@sistemas.edu.bo
//METODOLOGÍA DE LA PROGRAMACIÓN I - SIS 1110
//
//MIRANDA SILES ANGEL
//
//angel.miranda@sistemas.edu.bo
//MODELOS ECONOMICOS - SIS 3732
//
//MISERICORDIA AYAVIRI TEÓFILO CESAR
//
//cesar.misericordia@sistemas.edu.bo
//ANALISIS DE BALANCE - SIS 2220
//
//MONZON FUENTES REMY KENIER
//
//remy.monzom@sistemas.edu.bo
//SISTEMAS MULTIMEDIA - INF 3781
//
//PEREZ ANCASI JOSE LUIS
//
//jose.perez@sistemas.edu.bo
//ADMINISTRACIÓN DE SISTEMAS DE COMUNICIÓN - INF 3772
//
//REYNOLDS SALINAS MIGUEL ANGEL
//
//miguel.reynolds@sistemas.edu.bo
//ALGORÍTMICA GENERAL - INF 3641
//REDES INFORMÁTICAS II - INF 3620
//TALLER DE TELEMATICA II - INF 3912
//JEFE LAB. REDES INFORMATICAS - LAB 1455
//
//SALAS PAREDES ORESTES
//
//orestes.salas@sistemas.edu.bo
//ANALISIS DE BALANCE - SIS 2220
//
//SALGADO ARI EDILBERTO LUCIO
//
//edilberto.salgado@sistemas.edu.bo
//ESTRUCTURA DE COMPUTADORES I - INF 2410
//BASE DE DATOS I - INF 2430
//INTELIGENCIA ARTIFICIAL - INF 3731
//TALLER DE GRADUACIÓN II - SIS 3910
//
//SERRUDO CONDORI ERWIN SAUL
//
//erwin.serrudo@sistemas.edu.bo
//METODOLOGÍA DE LA PROGRAMACIÓN III - SIS 2330
//
//TAPIA HINOJOSA NELSON
//
//nelson.tapia@sistemas.edu.bo
//EVALUACIÓN DE SISTEMAS - SIS 3730
//GESTIÓN DE CALIDAD - SIS 2830
//INGENIERÍA DE SISTEMAS II - SIS 3720
//MODELOS ADMINISTRATIVOS - SIS 2320
//ANÁLISIS DE SISTEMAS - SIS 2530
//DISEÑO DE SISTEMAS I - SIS 3651
//AUDITORIA DE SISTEMAS - SIS 3930
//
//UREÑA MÉRIDA GREGORIO FERNANDO
//
//fernando.urena@sistemas.edu.bo
//JEFE GAB. COMPUTACION - LAB 1280
//REDES INFORMÁTICAS I - INF 3510
//COMUNICACION INALAMBRICA - INF 3632
//DISEÑO DE COMPILADORES - INF 3631
//INVESTIGACIÓN OPERATIVA I - SIS 2510
//INVESTIGACIÓN OPERATIVA II - SIS 2610
//PRACTICAS EN LA INDUSTRIA - SIS 4920
//
//VALLEJOS PANIAGUA JUAN CARLOS
//
//juan.vallejos@sistemas.edu.bo
//INGENIERIA DE SISTEMAS I - SIS 3620
//DESARROLLO DE APLICACIONES WEB - INF 3911
//
//VILLALOBOS SANDY EDWIN
//
//edwin.villalobos@sistemas.edu.bo
//JEFE GAB. COMPUTACION - LAB 1280
//METODOLOGÍA DE LA PROGRAMACIÓN I - SIS 1110
//

        $docente = Docente::create(['name' => 'ANDRADE ZEBALLOS ANGELICA MARÍA','photo' => 'IngMAndrade_2.jpg']);
        $materia1 = Materia::create(['name' => 'ANÁLISIS DISCRETO','sigla' => 'INF 1210']);
        $materia2 = Materia::create(['name' => 'REINGENIERÍA','sigla' => 'SIS 3701']);
        $materia3 = Materia::create(['name' => 'SISTEMAS DE INFORMACION GEOGRAFICA','sigla' => 'INF 3920']);
        $docente->materias()->attach([$materia1->id, $materia2->id, $materia3->id]);

        $docente = Docente::create(['name' => 'ARRIEN AYALA RENEE JAIME','photo' => 'd02.jpg']);
        $materia1 = Materia::create(['name' => 'COMPETITIVIDAD Y PRODUCTIVIDAD','sigla' => 'SIS 3952']);
        $materia2 = Materia::create(['name' => 'DISEÑO ORGANIZACIONAL','sigla' => 'SIS 3652']);
        $docente->materias()->attach([$materia1->id, $materia2->id]);

        $docente = Docente::create(['name' => 'AYALA LAFUENTE AMPARO','photo' => 'amparo_lafuente.jpg']);
        $materia1 = Materia::create(['name' => 'METODOLOGIA DE LA INVESTIGACION','sigla' => 'SIS 4710']);
        $docente->materias()->attach([$materia1->id]);

        $docente = Docente::create(['name' => 'BARRIOS CORDAVA JUAN','photo' => 'd04.jpg']);
        $materia1 = Materia::create(['name' => 'REDES DE BANDA ANCHA','sigla' => 'INF 3742']);
        $materia2 = Materia::create(['name' => 'PLANIFICACIÓN EMPRESARIAL','sigla' => 'SIS 3702']);
        $docente->materias()->attach([$materia1->id, $materia2->id]);

        $docente = Docente::create(['name' => 'BERMÚDEZ VARGAS JULIO CESAR','photo' => 'd05.jpg']);
        $materia1 = Materia::where('name', 'ANÁLISIS DISCRETO')->first();
        $materia2 = Materia::create(['name' => 'ESTRUCTURA DE DATOS','sigla' => 'SIS 2310']);
        $materia3 = Materia::create(['name' => 'METODOLOGÍA DE LA PROGRAMACIÓN II','sigla' => 'SIS 2210']);
        $materia4 = Materia::create(['name' => 'METODOLOGÍA DE LA PROGRAMACIÓN III','sigla' => 'SIS 2330']);
        $docente->materias()->attach([$materia1->id, $materia2->id, $materia3->id, $materia4->id]);

        $docente = Docente::create(['name' => 'BERNAL ALTAMIRANO CARLOS OMAR','photo' => 'd06.jpg']);
        $materia1 = Materia::create(['name' => 'GESTIÓN DE PROYECTOS','sigla' => 'SIS 2820']);
        $docente->materias()->attach([$materia1->id]);

        $docente = Docente::create(['name' => 'BERNAL MARTÍNEZ RAMIRO MARCIAL','photo' => 'd07.jpg']);
        $materia1 = Materia::create(['name' => 'DINAMICA DE SISTEMAS I','sigla' => 'SIS 3630']);
        $materia2 = Materia::create(['name' => 'INVESTIGACIÓN OPERATIVA II','sigla' => 'SIS 2610']);
        $docente->materias()->attach([$materia1->id, $materia2->id]);

        $docente = Docente::create(['name' => 'CÉSPEDES ROJAS ANDY ALEX','photo' => 'd08.jpg']);
        $materia1 = Materia::create(['name' => 'JEFE GAB. COMPUTACION','sigla' => 'LAB 1280']);
        $materia2 = Materia::create(['name' => 'REALIDAD NACIONAL','sigla' => 'SIS 4940']);
        $materia3 = Materia::create(['name' => 'SISTEMAS OPERATIVOS II','sigla' => 'INF 3405']);
        $materia4 = Materia::create(['name' => 'SISTEMAS DE TRANSMISION OPTICA','sigla' => 'INF 3632']);
        $materia5 = Materia::create(['name' => 'TALLER DE DESARROLLO DE SW','sigla' => 'INF 3741']);
        $materia6 = Materia::create(['name' => 'TELEFONÍA Y CONMUTACIÓN','sigla' => 'INF 3752']);
        $docente->materias()->attach([$materia1->id, $materia2->id, $materia3->id, $materia4->id, $materia5->id, $materia6->id]);

        $docente = Docente::create(['name' => 'CHINCHE IMAÑA FRANZ','photo' => 'd09.jpg']);
        $materia1 = Materia::where('name', 'METODOLOGÍA DE LA PROGRAMACIÓN II')->first();
        $materia2 = Materia::where('name', 'METODOLOGÍA DE LA PROGRAMACIÓN III')->first();
        $materia3 = Materia::create(['name' => 'PROGRAMACIÓN GRÁFICA','sigla' => 'SIS 2430']);
        $materia4 = Materia::create(['name' => 'PROYECTOS DE INGENIERIA DE SISTEMAS','sigla' => 'SIS 2740']);
        $materia5 = Materia::create(['name' => 'TEORÍA DE LA INFORMACIÓN','sigla' => 'INF 2610']);
        $materia6 = Materia::create(['name' => 'INVESTIGACIÓN OPERATIVA IV','sigla' => 'SIS 3843']);
        $docente->materias()->attach([$materia1->id, $materia2->id, $materia3->id, $materia4->id, $materia5->id, $materia6->id]);

        $docente = Docente::create(['name' => 'CHOQUE UÑO JUAN GREGORIO','photo' => 'juan_choque.jpeg']);
        $materia1 = Materia::create(['name' => 'ESTRUCTURA DE COMPUTADORES II','sigla' => 'INF 3530']);
        $materia2 = Materia::create(['name' => 'JEFE LAB. DE HARDWARE','sigla' => 'LAB 1450']);
        $materia3 = Materia::where('name', 'PROGRAMACIÓN GRÁFICA')->first();
        $docente->materias()->attach([$materia1->id, $materia2->id, $materia3->id]);

        $docente = Docente::create(['name' => 'ESCALANTE LUNARIO CESAR FERNANDO','photo' => 'd10.jpg']);
        $materia1 = Materia::create(['name' => 'INVESTIGACIÓN OPERATIVA I','sigla' => 'SIS 2510']);
        $materia2 = Materia::where('name', 'JEFE GAB. COMPUTACION')->first()? Materia::where('name', 'JEFE GAB. COMPUTACION')->first() : Materia::create(['name' => 'JEFE GAB. COMPUTACION','sigla' => 'LAB 1280']);
        $materia3 = Materia::create(['name' => 'SEGURIDAD DE SISTEMAS INFORMÁTICOS','sigla' => 'INF 2710']);
        $materia4 = Materia::create(['name' => 'SISTEMAS OPERATIVOS I','sigla' => 'INF 2310']);
        $materia5 = Materia::create(['name' => 'TALLER DE GRADUACIÓN II','sigla' => 'SIS 3910']);
        $docente->materias()->attach([$materia1->id, $materia2->id, $materia3->id, $materia4->id, $materia5->id]);

        $docente = Docente::create(['name' => 'FERNANDEZ GUTIERREZ ROLY MARCOS','photo' => 'd11.jpg']);
        $materia1 = Materia::where('name', 'JEFE GAB. COMPUTACION')->first()? Materia::where('name', 'JEFE GAB. COMPUTACION')->first() : Materia::create(['name' => 'JEFE GAB. COMPUTACION','sigla' => 'LAB 1280']);
        $materia2 = Materia::where('name', 'METODOLOGÍA DE LA PROGRAMACIÓN III')->first();
        $materia3 = Materia::create(['name' => 'PLANIFICACION Y CONTROL DE LA PRODUCCIÓN I','sigla' => 'SIS 3640']);
        $materia4 = Materia::create(['name' => 'PLANIFICACION Y CONTROL DE LA PRODUCCION II','sigla' => 'SIS 3763']);
        $docente->materias()->attach([$materia1->id, $materia2->id, $materia3->id, $materia4->id]);

        $docente = Docente::create(['name' => 'GUZMÁN CORONEL ROLY GONZALO','photo' => 'd12.jpg']);
        $materia1 = Materia::where('name', 'METODOLOGÍA DE LA PROGRAMACIÓN I')->first()? Materia::where('name', 'METODOLOGÍA DE LA PROGRAMACIÓN I')->first() : Materia::create(['name' => 'METODOLOGÍA DE LA PROGRAMACIÓN I','sigla' => 'SIS 1110']);
        $materia2 = Materia::where('name', 'ANÁLISIS DISCRETO')->first();
        $docente->materias()->attach([$materia1->id, $materia2->id]);

        $docente = Docente::create(['name' => 'HELGUERO VELÁSQUEZ HERNÁN LUIS','photo' => 'd13.jpg']);
        $materia1 = Materia::create(['name' => 'GRADUACIÓN','sigla' => 'SIS 5100']);
        $materia2 = Materia::where('name', 'JEFE LAB. MECATRONICA')->first()? Materia::where('name', 'JEFE LAB. MECATRONICA')->first() : Materia::create(['name' => 'JEFE LAB. MECATRONICA','sigla' => 'LAB1456']);
        $materia3 = Materia::create(['name' => 'PROGRAMACION DE ROBOTS','sigla' => 'INF 3751']);
        $docente->materias()->attach([$materia1->id, $materia2->id, $materia3->id]);

        $docente = Docente::create(['name' => 'HUANCA CALLE RONALD','photo' => 'd14.jpg']);
        $materia1 = Materia::where('name', 'DINAMICA DE SISTEMAS I')->first()? Materia::where('name', 'DINAMICA DE SISTEMAS I')->first() : Materia::create(['name' => 'DINAMICA DE SISTEMAS I','sigla' => 'SIS 3630']);
        $materia2 = Materia::where('name', 'INVESTIGACIÓN OPERATIVA II')->first()? Materia::where('name', 'INVESTIGACIÓN OPERATIVA II')->first() : Materia::create(['name' => 'INVESTIGACIÓN OPERATIVA II','sigla' => 'SIS 2610']);
        $materia3 = Materia::where('name', 'INVESTIGACIÓN OPERATIVA III')->first()? Materia::where('name', 'INVESTIGACIÓN OPERATIVA III')->first() : Materia::create(['name' => 'INVESTIGACIÓN OPERATIVA III','sigla' => 'SIS 3753']);
        $materia4 = Materia::where('name', 'TALLER DE GRADUACIÓN I')->first()? Materia::where('name', 'TALLER DE GRADUACIÓN I')->first() : Materia::create(['name' => 'TALLER DE GRADUACIÓN I','sigla' => 'SIS 3810']);
        $materia5 = Materia::where('name', 'TALLER DE GRADUACIÓN II')->first()? Materia::where('name', 'TALLER DE GRADUACIÓN II')->first() : Materia::create(['name' => 'TALLER DE GRADUACIÓN II','sigla' => 'SIS 3910']);
        $docente->materias()->attach([$materia1->id, $materia2->id, $materia3->id, $materia4->id, $materia5->id]);

        $docente = Docente::create(['name' => 'MAMANI MAMANI SAUL','photo' => 'DEFECTO.jpg']);
        $materia1 = Materia::where('name', 'ACTUALIZACIÓN TECNOLOGICA')->first()? Materia::where('name', 'ACTUALIZACIÓN TECNOLOGICA')->first() : Materia::create(['name' => 'ACTUALIZACIÓN TECNOLOGICA','sigla' => 'SIS 2420']);
        $docente->materias()->attach([$materia1->id]);

        $docente = Docente::create(['name' => 'MARTINEZ CROVO DENNIS','photo' => 'dennis_crovo.jpeg']);
        $materia1 = Materia::where('name', 'REDES INFORMATICAS III')->first()? Materia::where('name', 'REDES INFORMATICAS III')->first() : Materia::create(['name' => 'REDES INFORMATICAS III','sigla' => 'INF 3812']);
        $docente->materias()->attach([$materia1->id]);

        $docente = Docente::create(['name' => 'MAYTA SARMIENTO DAVID','photo' => 'David_Mayta_Sarmiento.jpg']);
        $materia1 = Materia::where('name', 'BASE DE DATOS II')->first()? Materia::where('name', 'BASE DE DATOS II')->first() : Materia::create(['name' => 'BASE DE DATOS II','sigla' => 'INF 3520']);
        $materia2 = Materia::where('name', 'COMERCIO ELECTRONICO')->first()? Materia::where('name', 'COMERCIO ELECTRONICO')->first() : Materia::create(['name' => 'COMERCIO ELECTRONICO','sigla' => 'SIS 3662']);
        $docente->materias()->attach([$materia1->id, $materia2->id]);

        $docente = Docente::create(['name' => 'MEDINACELI ORTIZ RUBEN','photo' => 'ruben_medinaceli.jpg']);
        $materia1 = Materia::where('name', 'SIMULACIÓN DE SISTEMAS')->first()? Materia::where('name', 'SIMULACIÓN DE SISTEMAS')->first() : Materia::create(['name' => 'SIMULACIÓN DE SISTEMAS','sigla' => 'SIS 2520']);
        $materia2 = Materia::where('name', 'MODELOS ECONOMÉTRICOS')->first()? Materia::where('name', 'MODELOS ECONOMÉTRICOS')->first() : Materia::create(['name' => 'MODELOS ECONOMÉTRICOS','sigla' => 'SIS 3540']);
        $materia3 = Materia::where('name', 'GRADUACIÓN')->first()? Materia::where('name', 'GRADUACIÓN')->first() : Materia::create(['name' => 'GRADUACIÓN','sigla' => 'SIS 5100']);
        $docente->materias()->attach([$materia1->id, $materia2->id, $materia3->id]);

        $docente = Docente::create(['name' => 'MEJIA GARCIA ELIZABETH','photo' => 'foto_mejia_rojo.jpg']);
        $materia1 = Materia::where('name', 'TALLER DE GRADUACIÓN I')->first()? Materia::where('name', 'TALLER DE GRADUACIÓN I')->first() : Materia::create(['name' => 'TALLER DE GRADUACIÓN I','sigla' => 'SIS 3810']);
        $docente->materias()->attach([$materia1->id]);

        $docente = Docente::create(['name' => 'MENACHO MOLLO IVONNE KARINA','photo' => 'd16.jpg']);
        $materia1 = Materia::where('name', 'INGERIA DE SOFTWARE I')->first()? Materia::where('name', 'INGERIA DE SOFTWARE I')->first() : Materia::create(['name' => 'INGERIA DE SOFTWARE I','sigla' => 'INF 2720']);
        $materia2 = Materia::where('name', 'INGENIERÍA DE SOFTWARE II')->first()? Materia::where('name', 'INGENIERÍA DE SOFTWARE II')->first() : Materia::create(['name' => 'INGENIERÍA DE SOFTWARE II','sigla' => 'INF 3811']);
        $docente->materias()->attach([$materia1->id, $materia2->id]);

        $docente = Docente::create(['name' => 'MIRANDA ALCONCE RICHARD OMAR','photo' => 'richad_miranda.jpg']);
        $materia1 = Materia::where('name', 'METODOLOGÍA DE LA PROGRAMACIÓN I')->first()? Materia::where('name', 'METODOLOGÍA DE LA PROGRAMACIÓN I')->first() : Materia::create(['name' => 'METODOLOGÍA DE LA PROGRAMACIÓN I','sigla' => 'SIS 1110']);
        $docente->materias()->attach([$materia1->id]);

        $docente = Docente::create(['name' => 'MIRANDA SILES ANGEL','photo' => 'miranda_angel.jpg']);
        $materia1 = Materia::where('name', 'MODELOS ECONOMICOS')->first()? Materia::where('name', 'MODELOS ECONOMICOS')->first() : Materia::create(['name' => 'MODELOS ECONOMICOS','sigla' => 'SIS 3732']);
        $docente->materias()->attach([$materia1->id]);

        $docente = Docente::create(['name' => 'MISERICORDIA AYAVIRI TEÓFILO CESAR','photo' => 'Cesar_Misericordia_Ayaviri.jpg']);
        $materia1 = Materia::where('name', 'ANALISIS DE BALANCE')->first()? Materia::where('name', 'ANALISIS DE BALANCE')->first() : Materia::create(['name' => 'ANALISIS DE BALANCE','sigla' => 'SIS 2220']);
        $docente->materias()->attach([$materia1->id]);

        $docente = Docente::create(['name' => 'MONZON FUENTES REMY KENIER','photo' => 'd23.jpg']);
        $materia1 = Materia::where('name', 'SISTEMAS MULTIMEDIA')->first()? Materia::where('name', 'SISTEMAS MULTIMEDIA')->first() : Materia::create(['name' => 'SISTEMAS MULTIMEDIA','sigla' => 'INF 3781']);
        $docente->materias()->attach([$materia1->id]);

        $docente = Docente::create(['name' => 'PEREZ ANCASI JOSE LUIS','photo' => 'd26.jpg']);
        $materia1 = Materia::where('name', 'ADMINISTRACIÓN DE SISTEMAS DE COMUNICIÓN')->first()? Materia::where('name', 'ADMINISTRACIÓN DE SISTEMAS DE COMUNICIÓN')->first() : Materia::create(['name' => 'ADMINISTRACIÓN DE SISTEMAS DE COMUNICIÓN','sigla' => 'INF 3772']);
        $docente->materias()->attach([$materia1->id]);

        $docente = Docente::create(['name' => 'REYNOLDS SALINAS MIGUEL ANGEL','photo' => 'd17.jpg']);
        $materia1 = Materia::where('name', 'ALGORÍTMICA GENERAL')->first()? Materia::where('name', 'ALGORÍTMICA GENERAL')->first() : Materia::create(['name' => 'ALGORÍTMICA GENERAL','sigla' => 'INF 3641']);
        $materia2 = Materia::where('name', 'REDES INFORMÁTICAS II')->first()? Materia::where('name', 'REDES INFORMÁTICAS II')->first() : Materia::create(['name' => 'REDES INFORMÁTICAS II','sigla' => 'INF 3620']);
        $materia3 = Materia::where('name', 'TALLER DE TELEMATICA II')->first()? Materia::where('name', 'TALLER DE TELEMATICA II')->first() : Materia::create(['name' => 'TALLER DE TELEMATICA II','sigla' => 'INF 3912']);
        $materia4 = Materia::where('name', 'JEFE LAB. REDES INFORMATICAS')->first()? Materia::where('name', 'JEFE LAB. REDES INFORMATICAS')->first() : Materia::create(['name' => 'JEFE LAB. REDES INFORMATICAS','sigla' => 'LAB 1455']);
        $docente->materias()->attach([$materia1->id, $materia2->id, $materia3->id, $materia4->id]);

        $docente = Docente::create(['name' => 'SALAS PAREDES ORESTES','photo' => 'd18.jpg']);
        $materia1 = Materia::where('name', 'ANALISIS DE BALANCE')->first()? Materia::where('name', 'ANALISIS DE BALANCE')->first() : Materia::create(['name' => 'ANALISIS DE BALANCE','sigla' => 'SIS 2220']);
        $docente->materias()->attach([$materia1->id]);

        $docente = Docente::create(['name' => 'SALGADO ARI EDILBERTO LUCIO','photo' => 'lucio_salgado.jpg']);
        $materia1 = Materia::where('name', 'ESTRUCTURA DE COMPUTADORES I')->first()? Materia::where('name', 'ESTRUCTURA DE COMPUTADORES I')->first() : Materia::create(['name' => 'ESTRUCTURA DE COMPUTADORES I','sigla' => 'INF 2410']);
        $materia2 = Materia::where('name', 'BASE DE DATOS I')->first()? Materia::where('name', 'BASE DE DATOS I')->first() : Materia::create(['name' => 'BASE DE DATOS I','sigla' => 'INF 2430']);
        $materia3 = Materia::where('name', 'INTELIGENCIA ARTIFICIAL')->first()? Materia::where('name', 'INTELIGENCIA ARTIFICIAL')->first() : Materia::create(['name' => 'INTELIGENCIA ARTIFICIAL','sigla' => 'INF 3731']);
        $materia4 = Materia::where('name', 'TALLER DE GRADUACIÓN II')->first()? Materia::where('name', 'TALLER DE GRADUACIÓN II')->first() : Materia::create(['name' => 'TALLER DE GRADUACIÓN II','sigla' => 'SIS 3910']);
        $docente->materias()->attach([$materia1->id, $materia2->id, $materia3->id, $materia4->id]);

        $docente = Docente::create(['name' => 'SERRUDO CONDORI ERWIN SAUL','photo' => 'DEFECTO.jpg']);
        $materia1 = Materia::where('name', 'METODOLOGÍA DE LA PROGRAMACIÓN III')->first()? Materia::where('name', 'METODOLOGÍA DE LA PROGRAMACIÓN III')->first() : Materia::create(['name' => 'METODOLOGÍA DE LA PROGRAMACIÓN III','sigla' => 'SIS 2330']);
        $docente->materias()->attach([$materia1->id]);

        $docente = Docente::create(['name' => 'TAPIA HINOJOSA NELSON','photo' => 'd19.jpg']);
        $materia1 = Materia::where('name', 'EVALUACIÓN DE SISTEMAS')->first()? Materia::where('name', 'EVALUACIÓN DE SISTEMAS')->first() : Materia::create(['name' => 'EVALUACIÓN DE SISTEMAS','sigla' => 'SIS 3730']);
        $materia2 = Materia::where('name', 'GESTIÓN DE CALIDAD')->first()? Materia::where('name', 'GESTIÓN DE CALIDAD')->first() : Materia::create(['name' => 'GESTIÓN DE CALIDAD','sigla' => 'SIS 2830']);
        $materia3 = Materia::where('name', 'INGENIERÍA DE SISTEMAS II')->first()? Materia::where('name', 'INGENIERÍA DE SISTEMAS II')->first() : Materia::create(['name' => 'INGENIERÍA DE SISTEMAS II','sigla' => 'SIS 3720']);
        $materia4 = Materia::where('name', 'MODELOS ADMINISTRATIVOS')->first()? Materia::where('name', 'MODELOS ADMINISTRATIVOS')->first() : Materia::create(['name' => 'MODELOS ADMINISTRATIVOS','sigla' => 'SIS 2320']);
        $materia5 = Materia::where('name', 'ANÁLISIS DE SISTEMAS')->first()? Materia::where('name', 'ANÁLISIS DE SISTEMAS')->first() : Materia::create(['name' => 'ANÁLISIS DE SISTEMAS','sigla' => 'SIS 2530']);
        $materia6 = Materia::where('name', 'DISEÑO DE SISTEMAS I')->first()? Materia::where('name', 'DISEÑO DE SISTEMAS I')->first() : Materia::create(['name' => 'DISEÑO DE SISTEMAS I','sigla' => 'SIS 3651']);
        $materia7 = Materia::where('name', 'AUDITORIA DE SISTEMAS')->first()? Materia::where('name', 'AUDITORIA DE SISTEMAS')->first() : Materia::create(['name' => 'AUDITORIA DE SISTEMAS','sigla' => 'SIS 3930']);
        $docente->materias()->attach([$materia1->id, $materia2->id, $materia3->id, $materia4->id, $materia5->id, $materia6->id, $materia7->id]);

        $docente = Docente::create(['name' => 'UREÑA MÉRIDA GREGORIO FERNANDO','photo' => 'd20.jpg']);
        $materia1 = Materia::where('name', 'JEFE GAB. COMPUTACION')->first()? Materia::where('name', 'JEFE GAB. COMPUTACION')->first() : Materia::create(['name' => 'JEFE GAB. COMPUTACION','sigla' => 'LAB 1280']);
        $materia2 = Materia::where('name', 'REDES INFORMÁTICAS I')->first()? Materia::where('name', 'REDES INFORMÁTICAS I')->first() : Materia::create(['name' => 'REDES INFORMÁTICAS I','sigla' => 'INF 3510']);
        $materia3 = Materia::where('name', 'COMUNICACION INALAMBRICA')->first()? Materia::where('name', 'COMUNICACION INALAMBRICA')->first() : Materia::create(['name' => 'COMUNICACION INALAMBRICA','sigla' => 'INF 3633']);
        $materia4 = Materia::where('name', 'DISEÑO DE COMPILADORES')->first()? Materia::where('name', 'DISEÑO DE COMPILADORES')->first() : Materia::create(['name' => 'DISEÑO DE COMPILADORES','sigla' => 'INF 3631']);
        $materia5 = Materia::where('name', 'INVESTIGACIÓN OPERATIVA I')->first()? Materia::where('name', 'INVESTIGACIÓN OPERATIVA I')->first() : Materia::create(['name' => 'INVESTIGACIÓN OPERATIVA I','sigla' => 'SIS 2510']);
        $materia6 = Materia::where('name', 'INVESTIGACIÓN OPERATIVA II')->first()? Materia::where('name', 'INVESTIGACIÓN OPERATIVA II')->first() : Materia::create(['name' => 'INVESTIGACIÓN OPERATIVA II','sigla' => 'SIS 2610']);
        $materia7 = Materia::where('name', 'PRACTICAS EN LA INDUSTRIA')->first()? Materia::where('name', 'PRACTICAS EN LA INDUSTRIA')->first() : Materia::create(['name' => 'PRACTICAS EN LA INDUSTRIA','sigla' => 'SIS 4920']);
        $docente->materias()->attach([$materia1->id, $materia2->id, $materia3->id, $materia4->id, $materia5->id, $materia6->id, $materia7->id]);

        $docente = Docente::create(['name' => 'VALLEJOS PANIAGUA JUAN CARLOS','photo' => 'Juan_Carlos_Vallejos_Paniagua.jpg']);
        $materia1 = Materia::where('name', 'INGENIERÍA DE SISTEMAS I')->first()? Materia::where('name', 'INGENIERÍA DE SISTEMAS I')->first() : Materia::create(['name' => 'INGENIERÍA DE SISTEMAS I','sigla' => 'SIS 3710']);
        $materia2 = Materia::where('name', 'DESARROLLO DE APLICACIONES WEB')->first()? Materia::where('name', 'DESARROLLO DE APLICACIONES WEB')->first() : Materia::create(['name' => 'DESARROLLO DE APLICACIONES WEB','sigla' => 'INF 3911']);
        $docente->materias()->attach([$materia1->id, $materia2->id]);

        $docente = Docente::create(['name' => 'VILLALOBOS SANDY EDWIN','photo' => 'd21.jpg']);
        $materia1 = Materia::where('name', 'JEFE GAB. COMPUTACION')->first()? Materia::where('name', 'JEFE GAB. COMPUTACION')->first() : Materia::create(['name' => 'JEFE GAB. COMPUTACION','sigla' => 'LAB 1280']);
        $materia2 = Materia::where('name', 'METODOLOGÍA DE LA PROGRAMACIÓN I')->first()? Materia::where('name', 'METODOLOGÍA DE LA PROGRAMACIÓN I')->first() : Materia::create(['name' => 'METODOLOGÍA DE LA PROGRAMACIÓN I','sigla' => 'SIS 1110']);
        $docente->materias()->attach([$materia1->id, $materia2->id]);

        //VILLANUEVA FULGUERA FRANKLIN HUMBERTO
//
//franklin.villanueva@sistemas.edu.bo
//JEFE GAB. COMPUTACION LAB 1280
//TALLER DE GRADUACIÓN I - SIS 3810
//
//ZABALETA RIOJA IVAR FERNANDO
//
//ivar.zabaleta@sistemas.edu.bo
//ANÁLISIS DE BALANCE - SIS 2220
//INVESTIGACIÓN OPERATIVA I - SIS 2510
//MODELOS ADMINISTRATIVOS - SIS 2320
//GESTIÓN DE RECURSOS HUMANOS - SIS 3842
//
//ZAMORA ECHENIQUE GERARDO IVAN
//
//gerardo.zamora@sistemas.edu.bo
//SUPERACION Y POSICIONAMIENTO PROFESIONAL - SIS 3731

        $docente = Docente::create(['name' => 'VILLANUEVA FULGUERA FRANKLIN HUMBERTO','photo' => 'Franklin_Foto_2021.png']);
        $materia1 = Materia::where('name', 'JEFE GAB. COMPUTACION')->first()? Materia::where('name', 'JEFE GAB. COMPUTACION')->first() : Materia::create(['name' => 'JEFE GAB. COMPUTACION','sigla' => 'LAB 1280']);
        $materia2 = Materia::where('name', 'TALLER DE GRADUACIÓN I')->first()? Materia::where('name', 'TALLER DE GRADUACIÓN I')->first() : Materia::create(['name' => 'TALLER DE GRADUACIÓN I','sigla' => 'SIS 3810']);
        $docente->materias()->attach([$materia1->id, $materia2->id]);

        $docente = Docente::create(['name' => 'ZABALETA RIOJA IVAR FERNANDO','photo' => 'd22.jpg']);
        $materia1 = Materia::where('name', 'ANÁLISIS DE BALANCE')->first()? Materia::where('name', 'ANÁLISIS DE BALANCE')->first() : Materia::create(['name' => 'ANÁLISIS DE BALANCE','sigla' => 'SIS 2220']);
        $materia2 = Materia::where('name', 'INVESTIGACIÓN OPERATIVA I')->first()? Materia::where('name', 'INVESTIGACIÓN OPERATIVA I')->first() : Materia::create(['name' => 'INVESTIGACIÓN OPERATIVA I','sigla' => 'SIS 2510']);
        $materia3 = Materia::where('name', 'MODELOS ADMINISTRATIVOS')->first()? Materia::where('name', 'MODELOS ADMINISTRATIVOS')->first() : Materia::create(['name' => 'MODELOS ADMINISTRATIVOS','sigla' => 'SIS 2320']);
        $materia4 = Materia::where('name', 'GESTIÓN DE RECURSOS HUMANOS')->first()? Materia::where('name', 'GESTIÓN DE RECURSOS HUMANOS')->first() : Materia::create(['name' => 'GESTIÓN DE RECURSOS HUMANOS','sigla' => 'SIS 3842']);
        $docente->materias()->attach([$materia1->id, $materia2->id, $materia3->id, $materia4->id]);

        $docente = Docente::create(['name' => 'ZAMORA ECHENIQUE GERARDO IVAN','photo' => 'ing_zamora_echenique.jpg']);
        $materia1 = Materia::where('name', 'SUPERACION Y POSICIONAMIENTO PROFESIONAL')->first()? Materia::where('name', 'SUPERACION Y POSICIONAMIENTO PROFESIONAL')->first() : Materia::create(['name' => 'SUPERACION Y POSICIONAMIENTO PROFESIONAL','sigla' => 'SIS 3731']);
        $docente->materias()->attach([$materia1->id]);


//        INF 3632 ANALISAR


    }
}
