<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Group;


class GroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $group001 = new Group();
        $group001->clave = "23544";
        $group001->descripcion = "ACCESO VIDEOCONFERENCIA";
        $group001->save();

        $group002 = new Group();
        $group002->clave = "261";
        $group002->descripcion = "ACCESORIOS";
        $group002->save();

        $group003 = new Group();
        $group003->clave = "262";
        $group003->descripcion = "AIRE ACONDICIONADO";
        $group003->save();

        $group004 = new Group();
        $group004->clave = "14922";
        $group004->descripcion = "ALARMAS";
        $group004->save();

        $group005 = new Group();
        $group005->clave = "263";
        $group005->descripcion = "ALMACENAMIENTO";
        $group005->save();

        $group006 = new Group();
        $group006->clave = "27822";
        $group006->descripcion = "ANIMALES Y MASCOTAS";
        $group006->save();

        $group007 = new Group();
        $group007->clave = "16443";
        $group007->descripcion = "ANTENAS";
        $group007->save();

        $group008 = new Group();
        $group008->clave = "6922";
        $group008->descripcion = "ASPIRADORAS";
        $group008->save();

        $group009 = new Group();
        $group009->clave = "264";
        $group009->descripcion = "AUDIFONOS Y MICRO";
        $group009->save();

        $group010 = new Group();
        $group010->clave ="266";
        $group010->descripcion = "AUDIO Y SONIDO";
        $group010->save();

        $group011 = new Group();
        $group011->clave ="267";
        $group011->descripcion = "BACK PACK (MOCHILA)";
        $group011->save();

        $group012 = new Group();
        $group012->clave ="19642";
        $group012->descripcion = "BASCULA";
        $group012->save();

        $group013 = new Group();
        $group013->clave ="25602";
        $group013->descripcion = "BICICLETAS";
        $group013->save();

        $group014 = new Group();
        $group014->clave ="268";
        $group014->descripcion = "BOCINAS";
        $group014->save();

        $group015 = new Group();
        $group015->clave ="12342";
        $group015->descripcion = "CABLEADO ESTRUCTURADO";
        $group015->save();

        $group016 = new Group();
        $group016->clave ="269";
        $group016->descripcion = "CABLES";
        $group016->save();

        $group017 = new Group();
        $group017->clave ="24723";
        $group017->descripcion = "CAFETERA";
        $group017->save();

        $group018 = new Group();
        $group018->clave ="17183";
        $group018->descripcion = "CAJON DE DINERO";
        $group018->save();

        $group019 = new Group();
        $group019->clave ="19782";
        $group019->descripcion = "CALCULADORA";
        $group019->save();

        $group020 = new Group();
        $group020->clave ="270";
        $group020->descripcion = "CAMARAS";
        $group020->save();

        $group021 = new Group();
        $group021->clave ="20422";
        $group021->descripcion = "COMUNICACIONES UNIFICADAS";
        $group021->save();

        $group022 = new Group();
        $group022->clave ="21602";
        $group022->descripcion = "CONCENTRADOR DE OXIGENO";
        $group022->save();

        $group023 = new Group();
        $group023->clave ="6821";
        $group023->descripcion = "CONMUTADORES";
        $group023->save();

        $group024 = new Group();
        $group024->clave ="22782";
        $group024->descripcion = "CONSOLAS";
        $group024->save();

        $group025 = new Group();
        $group025->clave ="281";
        $group025->descripcion = "CONSUMIBLES";
        $group025->save();

        $group026 = new Group();
        $group026->clave ="18522";
        $group026->descripcion = "CONTADOR DE BILLETES";
        $group026->save();

        $group027 = new Group();
        $group027->clave ="13122";
        $group027->descripcion = "CONTROL DE ACCESO Y ASISTENCIA";
        $group027->save();

        $group028 = new Group();
        $group028->clave ="1881";
        $group028->descripcion = "CONTROLES";
        $group028->save();

        $group029 = new Group();
        $group029->clave ="282";
        $group029->descripcion = "COPIADORA";
        $group029->save();

        $group030 = new Group();
        $group030->clave ="21662";
        $group030->descripcion = "CURSO";
        $group030->save();

        $group031 = new Group();
        $group031->clave ="283";
        $group031->descripcion = "DIGITALIZADOR";
        $group031->save();

        $group032 = new Group();
        $group032->clave ="7361";
        $group032->descripcion = "DISCOS DUROS";
        $group032->save();

        $group033 = new Group();
        $group033->clave ="16902";
        $group033->descripcion = "DRONES";
        $group033->save();

        $group034 = new Group();
        $group034->clave ="25542";
        $group034->descripcion = "ELECTRODOMÉSTICOS";
        $group034->save();

        $group035 = new Group();
        $group035->clave ="5521";
        $group035->descripcion = "EMPAQUES";
        $group035->save();

        $group036 = new Group();
        $group036->clave ="284";
        $group036->descripcion = "ENERGIA";
        $group036->save();

        $group037 = new Group();
        $group037->clave ="18802";
        $group037->descripcion = "ENERGIA SOLAR";
        $group037->save();

        $group038 = new Group();
        $group038->clave ="3221";
        $group038->descripcion = "EQUIPOS DE AUDIO";
        $group038->save();

        $group039 = new Group();
        $group039->clave ="25604";
        $group039->descripcion = "EXTRACTORES";
        $group039->save();

        $group040 = new Group();
        $group040->clave ="286";
        $group040->descripcion = "FAX";
        $group040->save();

        $group041 = new Group();
        $group041->clave ="22622";
        $group041->descripcion = "FREIDORA DE AIRE";
        $group041->save();

        $group042 = new Group();
        $group042->clave ="9421";
        $group042->descripcion = "FUNDAS";
        $group042->save();

        $group043 = new Group();
        $group043->clave ="1821";
        $group043->descripcion = "GABINETE DE RACK";
        $group043->save();

        $group044 = new Group();
        $group044->clave ="287";
        $group044->descripcion = "GABINETES";
        $group044->save();

        $group045 = new Group();
        $group045->clave ="288";
        $group045->descripcion = "GAMES";
        $group045->save();

        $group046 = new Group();
        $group046->clave ="19543";
        $group046->descripcion = "HANDHELD";
        $group046->save();

        $group047 = new Group();
        $group047->clave ="2063";
        $group047->descripcion = "HERRAMIENTAS";
        $group047->save();

        $group048 = new Group();
        $group048->clave ="6923";
        $group048->descripcion = "HIDROLAVADORAS";
        $group048->save();

        $group049 = new Group();
        $group049->clave ="25544";
        $group049->descripcion = "HIGIENE Y BELLEZA";
        $group049->save();

        $group050 = new Group();
        $group050->clave ="12542";
        $group050->descripcion = "IMPRESORA DE AMPLIO FORMATO (PLOTTER)";
        $group050->save();

        $group051 = new Group();
        $group051->clave ="289";
        $group051->descripcion = "IMPRESORAS";
        $group051->save();

        $group052 = new Group();
        $group052->clave ="13023";
        $group052->descripcion = "INSUMOS";
        $group052->save();

        $group053 = new Group();
        $group053->clave ="5361";
        $group053->descripcion = "INSUMOS GHIA";
        $group053->save();

        $group054 = new Group();
        $group054->clave ="8761";
        $group054->descripcion = "INTERFON";
        $group054->save();

        $group055 = new Group();
        $group055->clave ="6641";
        $group055->descripcion = "JUGUETES";
        $group055->save();

        $group056 = new Group();
        $group056->clave ="5841";
        $group056->descripcion = "KIOSKO";
        $group056->save();

        $group057 = new Group();
        $group057->clave ="17184";
        $group057->descripcion = "LECTOR DE CODIGOS";
        $group057->save();

        $group058 = new Group();
        $group058->clave ="22662";
        $group058->descripcion = "LICUADORA";
        $group058->save();

        $group059 = new Group();
        $group059->clave ="7081";
        $group059->descripcion = "LINEA BLANCA";
        $group059->save();

        $group060 = new Group();
        $group060->clave ="290";
        $group060->descripcion = "MALETINES";
        $group060->save();

        $group061 = new Group();
        $group061->clave ="25543";
        $group061->descripcion = "MANTENIMIENTO DEL HOGAR";
        $group061->save();

        $group062 = new Group();
        $group062->clave ="26842";
        $group062->descripcion = "MAQUINA DE LAVADO";
        $group062->save();

        $group063 = new Group();
        $group063->clave ="24722";
        $group063->descripcion = "MAQUINA PARA CORTAR CABELLO";
        $group063->save();

        $group064 = new Group();
        $group064->clave ="5041";
        $group064->descripcion = "MAQUINAS DE COSER";
        $group064->save();

        $group065 = new Group();
        $group065->clave ="4641";
        $group065->descripcion = "MAQUINAS DE ESCRIBIR";
        $group065->save();

        $group066 = new Group();
        $group066->clave ="3741";
        $group066->descripcion = "MATERIALES PARA PRODUCCION GHIA";
        $group066->save();

        $group067 = new Group();
        $group067->clave ="291";
        $group067->descripcion = "MEMORIAS";
        $group067->save();

        $group068 = new Group();
        $group068->clave ="19462";
        $group068->descripcion = "MICA";
        $group068->save();

        $group069 = new Group();
        $group069->clave ="292";
        $group069->descripcion = "MONITORES";
        $group069->save();

        $group070 = new Group();
        $group070->clave ="293";
        $group070->descripcion = "MOUSE";
        $group070->save();

        $group071 = new Group();
        $group071->clave ="294";
        $group071->descripcion = "MUEBLES PARA OFICINA";
        $group071->save();

        $group072 = new Group();
        $group072->clave ="295";
        $group072->descripcion = "MULTIFUNCIONALES";
        $group072->save();

        $group073 = new Group();
        $group073->clave ="297";
        $group073->descripcion = "OPTICOS";
        $group073->save();

        $group074 = new Group();
        $group074->clave ="13022";
        $group074->descripcion = "PARTES";
        $group074->save();

        $group075 = new Group();
        $group075->clave ="23362";
        $group075->descripcion = "PASE";
        $group075->save();

        $group076 = new Group();
        $group076->clave ="299";
        $group076->descripcion = "PC´S";
        $group076->save();

        $group077 = new Group();
        $group077->clave ="7741";
        $group077->descripcion = "PCS ALTO DESEMPEÑO ( GAMERS )";
        $group077->save();

        $group078 = new Group();
        $group078->clave ="12902";
        $group078->descripcion = "PIZARRON";
        $group078->save();

        $group079 = new Group();
        $group079->clave ="25262";
        $group079->descripcion = "POLIZA DE GARANTIA COMPUTO GHIA 3 AÑOS";
        $group079->save();

        $group080 = new Group();
        $group080->clave ="25263";
        $group080->descripcion = "POLIZA DE GARANTIA COMPUTO GHIA 4 AÑOS";
        $group080->save();

        $group081 = new Group();
        $group081->clave ="7721";
        $group081->descripcion = "POLIZA DE GARANTIAS COMPUTO GHIA 1 AÑO";
        $group081->save();

        $group082 = new Group();
        $group082->clave ="7722";
        $group082->descripcion = "POLIZA DE GARANTIAS COMPUTO GHIA 2 AÑOS";
        $group082->save();

        $group083 = new Group();
        $group083->clave ="9541";
        $group083->descripcion = "POLIZA DE GARANTIAS MONITOR GHIA 1AÑO";
        $group083->save();

        $group084 = new Group();
        $group084->clave ="9542";
        $group084->descripcion = "POLIZA DE GARANTIAS MONITOR GHIA 2 AÑOS";
        $group084->save();

        $group085 = new Group();
        $group085->clave ="4561";
        $group085->descripcion = "POLIZA DE SERVICIO";
        $group085->save();

        $group086 = new Group();
        $group086->clave ="1961";
        $group086->descripcion = "POLIZAS DE GARANTIA";
        $group086->save();

        $group087 = new Group();
        $group087->clave ="301";
        $group087->descripcion = "PORTA RETRATO DIGITAL";
        $group087->save();

        $group088 = new Group();
        $group088->clave ="296";
        $group088->descripcion = "PORTATILES";
        $group088->save();

        $group089 = new Group();
        $group089->clave ="2101";
        $group089->descripcion = "PRESENTADOR";
        $group089->save();

        $group090 = new Group();
        $group090->clave ="302";
        $group090->descripcion = "PROCESADORES";
        $group090->save();

        $group091 = new Group();
        $group091->clave ="12522";
        $group091->descripcion = "PRODUCTOS DE LIMPIEZA";
        $group091->save();

        $group092 = new Group();
        $group092->clave ="5362";
        $group092->descripcion = "PROMOCIONALES";
        $group092->save();

        $group093 = new Group();
        $group093->clave ="7441";
        $group093->descripcion = "RADIO RELOJ";
        $group093->save();

        $group094 = new Group();
        $group094->clave ="21982";
        $group094->descripcion = "RASURADORA";
        $group094->save();

        $group095 = new Group();
        $group095->clave ="25603";
        $group095->descripcion = "RASURADORAS";
        $group095->save();

        $group096 = new Group();
        $group096->clave ="303";
        $group096->descripcion = "REDES";
        $group096->save();

        $group097 = new Group();
        $group097->clave ="20283";
        $group097->descripcion = "REFACCIONES";
        $group097->save();

        $group098 = new Group();
        $group098->clave ="11122";
        $group098->descripcion = "REFACCIONES GHIA / HAIER";
        $group098->save();

        $group099 = new Group();
        $group099->clave ="18102";
        $group099->descripcion = "REFACCIONES PARA UPS";
        $group099->save();

        $group100 = new Group();
        $group100->clave = "13522";
        $group100->descripcion = "RELOJES";
        $group100->save();

        $group101 = new Group();
        $group101->clave = "304";
        $group101->descripcion = "REPRODUCTORES";
        $group101->save();

        $group102 = new Group();
        $group102->clave = "285";
        $group102->descripcion = "SCANNER";
        $group102->save();

        $group103 = new Group();
        $group103->clave = "23402";
        $group103->descripcion = "SCOOTERS";
        $group103->save();

        $group104 = new Group();
        $group104->clave = "21743";
        $group104->descripcion = "SERVICIOS CLOUD CVA";
        $group104->save();

        $group105 = new Group();
        $group105->clave = "14982";
        $group105->descripcion = "SERVICIOS METROCARRIER";
        $group105->save();

        $group106 = new Group();
        $group106->clave = "23545";
        $group106->descripcion = "SERVICIOS VIDEOCONFERENCIA";
        $group106->save();

        $group107 = new Group();
        $group107->clave = "306";
        $group107->descripcion = "SERVIDORES";
        $group107->save();

        $group108 = new Group();
        $group108->clave = "17392";
        $group108->descripcion = "SINTONIZADOR";
        $group108->save();

        $group109 = new Group();
        $group109->clave = "16702";
        $group109->descripcion = "SMART HOME";
        $group109->save();

        $group110 = new Group();
        $group110->clave = "307";
        $group110->descripcion = "SOFTWARE";
        $group110->save();

        $group111 = new Group();
        $group111->clave = "308";
        $group111->descripcion = "SOLUCION INTERWRITE";
        $group111->save();

        $group112 = new Group();
        $group112->clave = "2502";
        $group112->descripcion = "SOLUCIONES GSM";
        $group112->save();

        $group113 = new Group();
        $group113->clave = "1183";
        $group113->descripcion = "SOPORTES Y BASES P/TV/ PROYECTORES/DVD/CONSOLAS/BOCINAS/PANTALLAS/MONOTORES";
        $group113->save();

        $group114 = new Group();
        $group114->clave = "8901";
        $group114->descripcion = "TABLETAS";
        $group114->save();

        $group115 = new Group();
        $group115->clave = "310";
        $group115->descripcion = "TARJETA CONTROLADORA";
        $group115->save();

        $group116 = new Group();
        $group116->clave = "309";
        $group116->descripcion = "TARJETA MADRE";
        $group116->save();

        $group117 = new Group();
        $group117->clave = "461";
        $group117->descripcion = "TECLADO Y MOUSE";
        $group117->save();

        $group118 = new Group();
        $group118->clave = "311";
        $group118->descripcion = "TECLADOS";
        $group118->save();

        $group119 = new Group();
        $group119->clave = "312";
        $group119->descripcion = "TELEFONIA";
        $group119->save();

        $group120 = new Group();
        $group120->clave = "313";
        $group120->descripcion = "TELEVISOR";
        $group120->save();

        $group121 = new Group();
        $group121->clave = "17182";
        $group121->descripcion = "TERMINAL PORTATIL / COLECTORA DE DATOS";
        $group121->save();

        $group122 = new Group();
        $group122->clave = "1641";
        $group122->descripcion = "TERMINAL POS";
        $group122->save();

        $group123 = new Group();
        $group123->clave = "20922";
        $group123->descripcion = "TERMOMETRO";
        $group123->save();

        $group124 = new Group();
        $group124->clave = "314";
        $group124->descripcion = "TIPO DE CONECTIVIDAD";
        $group124->save();

        $group125 = new Group();
        $group125->clave = "26482";
        $group125->descripcion = "TORNAMESAS";
        $group125->save();

        $group126 = new Group();
        $group126->clave = "26722";
        $group126->descripcion = "TOTEM";
        $group126->save();

        $group127 = new Group();
        $group127->clave = "6141";
        $group127->descripcion = "TRITURADORA DE DOCUMENTOS";
        $group127->save();

        $group128 = new Group();
        $group128->clave = "25605";
        $group128->descripcion = "UKELELES";
        $group128->save();

        $group129 = new Group();
        $group129->clave = "315";
        $group129->descripcion = "VENTILADORES";
        $group129->save();

        $group130 = new Group();
        $group130->clave = "316";
        $group130->descripcion = "VIDEO";
        $group130->save();

        $group131 = new Group();
        $group131->clave = "12922";
        $group131->descripcion = "VIDEOCONFERENCIA";
        $group131->save();

        $group132 = new Group();
        $group132->clave = "13584";
        $group132->descripcion = "VIDEOGRABADORES";
        $group132->save();

        $group133 = new Group();
        $group133->clave = "317";
        $group133->descripcion = "VIDEOPROYECTOR";
        $group133->save();

    }
}