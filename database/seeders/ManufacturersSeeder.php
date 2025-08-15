<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use App\Models\Manufacturer;

class ManufacturersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ///////////////////////////////////////////////////////////////////////
        // Cargar Marcas Automáticamente
        ///////////////////////////////////////////////////////////////////////

        // $url = 'https://sahlom.com/cva/marcas2.xml';

        // $response = Http::get($url);
        // if (!$response->successful()) {
        //     $this->command->error('No se pudo obtener el XML de marcas.');
        //     return;
        // }

        // $xml = simplexml_load_string($response->body());

        // foreach ($xml->marca as $item) {
        //     Manufacturer::updateOrCreate(
        //         ['clave' => (int)$item->clave],
        //         ['descripcion' => (string)$item->descripcion]
        //     );
        // }

        // $this->command->info('Marcas cargadas exitosamente.');

        ///////////////////////////////////////////////////////////////////////
        // Cargar  Marcas Manualmente
        ///////////////////////////////////////////////////////////////////////

        $manufacturer001 = new Manufacturer();
        $manufacturer001->clave = "213";
        $manufacturer001->descripcion = "3NSTAR";
        $manufacturer001->save();

        $manufacturer002 = new Manufacturer();
        $manufacturer002->clave = "3";
        $manufacturer002->descripcion = "ACER";
        $manufacturer002->save();

        $manufacturer003 = new Manufacturer();
        $manufacturer003->clave = "4";
        $manufacturer003->descripcion = "ACTECK";
        $manufacturer003->save();

        $manufacturer004 = new Manufacturer();
        $manufacturer004->clave = "123";
        $manufacturer004->descripcion = "ADATA";
        $manufacturer004->save();

        $manufacturer005 = new Manufacturer();
        $manufacturer005->clave = "5";
        $manufacturer005->descripcion = "AMD";
        $manufacturer005->save();

        $manufacturer006 = new Manufacturer();
        $manufacturer006->clave = "175";
        $manufacturer006->descripcion = "ANVIZ";
        $manufacturer006->save();

        $manufacturer007 = new Manufacturer();
        $manufacturer007->clave = "6";
        $manufacturer007->descripcion = "AOC";
        $manufacturer007->save();

        $manufacturer008 = new Manufacturer();
        $manufacturer008->clave = "7";
        $manufacturer008->descripcion = "APC";
        $manufacturer008->save();

        $manufacturer009 = new Manufacturer();
        $manufacturer009->clave = "35";
        $manufacturer009->descripcion = "APPLE";
        $manufacturer009->save();

        $manufacturer012 = new Manufacturer();
        $manufacturer012->clave = "280";
        $manufacturer012->descripcion = "ASROCK";
        $manufacturer012->save();

        $manufacturer013 = new Manufacturer();
        $manufacturer013->clave = "80";
        $manufacturer013->descripcion = "ASUS";
        $manufacturer013->save();

        $manufacturer014 = new Manufacturer();
        $manufacturer014->clave = "266";
        $manufacturer014->descripcion = "ASUS OEM";
        $manufacturer014->save();

        $manufacturer016 = new Manufacturer();
        $manufacturer016->clave = "291";
        $manufacturer016->descripcion = "BACKDROP";
        $manufacturer016->save();

        $manufacturer017 = new Manufacturer();
        $manufacturer017->clave = "268";
        $manufacturer017->descripcion = "BALAM RUSH";
        $manufacturer017->save();

        $manufacturer019 = new Manufacturer();
        $manufacturer019->clave = "311";
        $manufacturer019->descripcion = "BASEUS";
        $manufacturer019->save();

        $manufacturer020 = new Manufacturer();
        $manufacturer020->clave = "10";
        $manufacturer020->descripcion = "BENQ";
        $manufacturer020->save();

        $manufacturer022 = new Manufacturer();
        $manufacturer022->clave = "98";
        $manufacturer022->descripcion = "BITDEFENDER";
        $manufacturer022->save();

        $manufacturer023 = new Manufacturer();
        $manufacturer023->clave = "296";
        $manufacturer023->descripcion = "BIWIN ACER";
        $manufacturer023->save();

        $manufacturer024 = new Manufacturer();
        $manufacturer024->clave = "295";
        $manufacturer024->descripcion = "BIWIN HP";
        $manufacturer024->save();

        $manufacturer027 = new Manufacturer();
        $manufacturer027->clave = "279";
        $manufacturer027->descripcion = "BROBOTIX";
        $manufacturer027->save();

        $manufacturer028 = new Manufacturer();
        $manufacturer028->clave = "13";
        $manufacturer028->descripcion = "BROTHER";
        $manufacturer028->save();

        $manufacturer029 = new Manufacturer();
        $manufacturer029->clave = "14";
        $manufacturer029->descripcion = "CANON";
        $manufacturer029->save();

        $manufacturer031 = new Manufacturer();
        $manufacturer031->clave = "15";
        $manufacturer031->descripcion = "CDP";
        $manufacturer031->save();

        $manufacturer032 = new Manufacturer();
        $manufacturer032->clave = "106";
        $manufacturer032->descripcion = "CISCO";
        $manufacturer032->save();

        $manufacturer035 = new Manufacturer();
        $manufacturer035->clave = "17";
        $manufacturer035->descripcion = "COMPLET";
        $manufacturer035->save();

        $manufacturer036 = new Manufacturer();
        $manufacturer036->clave = "160";
        $manufacturer036->descripcion = "CONDUMEX";
        $manufacturer036->save();

        $manufacturer038 = new Manufacturer();
        $manufacturer038->clave = "126";
        $manufacturer038->descripcion = "COOLER MASTER";
        $manufacturer038->save();

        $manufacturer039 = new Manufacturer();
        $manufacturer039->clave = "298";
        $manufacturer039->descripcion = "CORSAIR";
        $manufacturer039->save();

        $manufacturer042 = new Manufacturer();
        $manufacturer042->clave = "102";
        $manufacturer042->descripcion = "CYBERPOWER";
        $manufacturer042->save();

        $manufacturer043 = new Manufacturer();
        $manufacturer043->clave = "187";
        $manufacturer043->descripcion = "DAHUA";
        $manufacturer043->save();

        $manufacturer044 = new Manufacturer();
        $manufacturer044->clave = "292";
        $manufacturer044->descripcion = "DAHUA DISPLAY";
        $manufacturer044->save();

        $manufacturer045 = new Manufacturer();
        $manufacturer045->clave = "111";
        $manufacturer045->descripcion = "DATAPRODUCTS";
        $manufacturer045->save();

        $manufacturer046 = new Manufacturer();
        $manufacturer046->clave = "85";
        $manufacturer046->descripcion = "DELL";
        $manufacturer046->save();

        $manufacturer047 = new Manufacturer();
        $manufacturer047->clave = "122";
        $manufacturer047->descripcion = "EATON";
        $manufacturer047->save();

        $manufacturer048 = new Manufacturer();
        $manufacturer048->clave = "90";
        $manufacturer048->descripcion = "EC LINE";
        $manufacturer048->save();

        $manufacturer049 = new Manufacturer();
        $manufacturer049->clave = "25";
        $manufacturer049->descripcion = "ECS";
        $manufacturer049->save();

        $manufacturer051 = new Manufacturer();
        $manufacturer051->clave = "27";
        $manufacturer051->descripcion = "EPSON";
        $manufacturer051->save();

        $manufacturer052 = new Manufacturer();
        $manufacturer052->clave = "155";
        $manufacturer052->descripcion = "ESET";
        $manufacturer052->save();

        $manufacturer053 = new Manufacturer();
        $manufacturer053->clave = "277";
        $manufacturer053->descripcion = "EZVIZ";
        $manufacturer053->save();

        $manufacturer054 = new Manufacturer();
        $manufacturer054->clave = "305";
        $manufacturer054->descripcion = "FORZA";
        $manufacturer054->save();

        $manufacturer055 = new Manufacturer();
        $manufacturer055->clave = "225";
        $manufacturer055->descripcion = "FUJITSU";
        $manufacturer055->save();

        $manufacturer059 = new Manufacturer();
        $manufacturer059->clave = "315";
        $manufacturer059->descripcion = "GAME FACTOR";
        $manufacturer059->save();

        $manufacturer061 = new Manufacturer();
        $manufacturer061->clave = "73";
        $manufacturer061->descripcion = "GHIA";
        $manufacturer061->save();

        $manufacturer062 = new Manufacturer();
        $manufacturer062->clave = "133";
        $manufacturer062->descripcion = "GIGABYTE";
        $manufacturer062->save();

        $manufacturer063 = new Manufacturer();
        $manufacturer063->clave = "236";
        $manufacturer063->descripcion = "GRANDSTREAM";
        $manufacturer063->save();

        $manufacturer065 = new Manufacturer();
        $manufacturer065->clave = "258";
        $manufacturer065->descripcion = "HEWLETT PACKARD ENTERPRISE";
        $manufacturer065->save();

        $manufacturer066 = new Manufacturer();
        $manufacturer066->clave = "210";
        $manufacturer066->descripcion = "HIKVISION";
        $manufacturer066->save();

        $manufacturer068 = new Manufacturer();
        $manufacturer068->clave = "271";
        $manufacturer068->descripcion = "HISENSE";
        $manufacturer068->save();

        $manufacturer069 = new Manufacturer();
        $manufacturer069->clave = "181";
        $manufacturer069->descripcion = "HONEYWELL";
        $manufacturer069->save();

        $manufacturer070 = new Manufacturer();
        $manufacturer070->clave = "285";
        $manufacturer070->descripcion = "HORION";
        $manufacturer070->save();

        $manufacturer071 = new Manufacturer();
        $manufacturer071->clave = "30";
        $manufacturer071->descripcion = "HP";
        $manufacturer071->save();

        $manufacturer073 = new Manufacturer();
        $manufacturer073->clave = "182";
        $manufacturer073->descripcion = "HUAWEI";
        $manufacturer073->save();

        $manufacturer075 = new Manufacturer();
        $manufacturer075->clave = "281";
        $manufacturer075->descripcion = "HUNE";
        $manufacturer075->save();

        $manufacturer077 = new Manufacturer();
        $manufacturer077->clave = "275";
        $manufacturer077->descripcion = "IMOU";
        $manufacturer077->save();

        $manufacturer079 = new Manufacturer();
        $manufacturer079->clave = "32";
        $manufacturer079->descripcion = "INTEL";
        $manufacturer079->save();

        $manufacturer080 = new Manufacturer();
        $manufacturer080->clave = "131";
        $manufacturer080->descripcion = "INTELLINET";
        $manufacturer080->save();

        $manufacturer082 = new Manufacturer();
        $manufacturer082->clave = "115";
        $manufacturer082->descripcion = "KASPERSKY";
        $manufacturer082->save();

        $manufacturer083 = new Manufacturer();
        $manufacturer083->clave = "36";
        $manufacturer083->descripcion = "KINGSTON";
        $manufacturer083->save();

        $manufacturer084 = new Manufacturer();
        $manufacturer084->clave = "82";
        $manufacturer084->descripcion = "KOBLENZ";
        $manufacturer084->save();

        $manufacturer085 = new Manufacturer();
        $manufacturer085->clave = "112";
        $manufacturer085->descripcion = "KONICA MINOLTA";
        $manufacturer085->save();

        $manufacturer087 = new Manufacturer();
        $manufacturer087->clave = "262";
        $manufacturer087->descripcion = "LACIE";
        $manufacturer087->save();

        $manufacturer088 = new Manufacturer();
        $manufacturer088->clave = "39";
        $manufacturer088->descripcion = "LENOVO";
        $manufacturer088->save();

        $manufacturer089 = new Manufacturer();
        $manufacturer089->clave = "75";
        $manufacturer089->descripcion = "LEXMARK";
        $manufacturer089->save();

        $manufacturer090 = new Manufacturer();
        $manufacturer090->clave = "40";
        $manufacturer090->descripcion = "LG";
        $manufacturer090->save();

        $manufacturer092 = new Manufacturer();
        $manufacturer092->clave = "44";
        $manufacturer092->descripcion = "LOGITECH";
        $manufacturer092->save();

        $manufacturer094 = new Manufacturer();
        $manufacturer094->clave = "109";
        $manufacturer094->descripcion = "MANHATTAN";
        $manufacturer094->save();

        $manufacturer095 = new Manufacturer();
        $manufacturer095->clave = "287";
        $manufacturer095->descripcion = "MAXCASE";
        $manufacturer095->save();

        $manufacturer096 = new Manufacturer();
        $manufacturer096->clave = "46";
        $manufacturer096->descripcion = "MICROSOFT";
        $manufacturer096->save();

        $manufacturer097 = new Manufacturer();
        $manufacturer097->clave = "252";
        $manufacturer097->descripcion = "MIRATI";
        $manufacturer097->save();

        $manufacturer098 = new Manufacturer();
        $manufacturer098->clave = "269";
        $manufacturer098->descripcion = "MOTOROLA SECURITY";
        $manufacturer098->save();

        $manufacturer099 = new Manufacturer();
        $manufacturer099->clave = "47";
        $manufacturer099->descripcion = "MSI";
        $manufacturer099->save();

        $manufacturer102 = new Manufacturer();
        $manufacturer102->clave = "174";
        $manufacturer102->descripcion = "MULTIMEDIA SCREENS";
        $manufacturer102->save();

        $manufacturer104 = new Manufacturer();
        $manufacturer104->clave = "156";
        $manufacturer104->descripcion = "NEC";
        $manufacturer104->save();

        $manufacturer105 = new Manufacturer();
        $manufacturer105->clave = "290";
        $manufacturer105->descripcion = "NET2PHONE";
        $manufacturer105->save();

        $manufacturer107 = new Manufacturer();
        $manufacturer107->clave = "135";
        $manufacturer107->descripcion = "NORTH SYSTEM";
        $manufacturer107->save();

        $manufacturer108 = new Manufacturer();
        $manufacturer108->clave = "136";
        $manufacturer108->descripcion = "NORTON";
        $manufacturer108->save();

        $manufacturer109 = new Manufacturer();
        $manufacturer109->clave = "218";
        $manufacturer109->descripcion = "NZXT";
        $manufacturer109->save();

        $manufacturer110 = new Manufacturer();
        $manufacturer110->clave = "251";
        $manufacturer110->descripcion = "OCELOT GAMING";
        $manufacturer110->save();

        $manufacturer113 = new Manufacturer();
        $manufacturer113->clave = "267";
        $manufacturer113->descripcion = "PANASONIC";
        $manufacturer113->save();

        $manufacturer114 = new Manufacturer();
        $manufacturer114->clave = "146";
        $manufacturer114->descripcion = "PANASONIC EC";
        $manufacturer114->save();

        $manufacturer116 = new Manufacturer();
        $manufacturer116->clave = "283";
        $manufacturer116->descripcion = "PANTUM";
        $manufacturer116->save();

        $manufacturer117 = new Manufacturer();
        $manufacturer117->clave = "273";
        $manufacturer117->descripcion = "PATRIOT";
        $manufacturer117->save();

        $manufacturer118 = new Manufacturer();
        $manufacturer118->clave = "195";
        $manufacturer118->descripcion = "PEERLESS-AV";
        $manufacturer118->save();

        $manufacturer119 = new Manufacturer();
        $manufacturer119->clave = "50";
        $manufacturer119->descripcion = "PERFECT CHOICE";
        $manufacturer119->save();

        $manufacturer122 = new Manufacturer();
        $manufacturer122->clave = "79";
        $manufacturer122->descripcion = "PNY";
        $manufacturer122->save();

        $manufacturer123 = new Manufacturer();
        $manufacturer123->clave = "263";
        $manufacturer123->descripcion = "POLY";
        $manufacturer123->save();

        $manufacturer124 = new Manufacturer();
        $manufacturer124->clave = "147";
        $manufacturer124->descripcion = "PROVISION ISR";
        $manufacturer124->save();

        $manufacturer125 = new Manufacturer();
        $manufacturer125->clave = "242";
        $manufacturer125->descripcion = "QNAP";
        $manufacturer125->save();

        $manufacturer127 = new Manufacturer();
        $manufacturer127->clave = "215";
        $manufacturer127->descripcion = "QUARONI";
        $manufacturer127->save();

        $manufacturer130 = new Manufacturer();
        $manufacturer130->clave = "55";
        $manufacturer130->descripcion = "SAMSUNG";
        $manufacturer130->save();

        $manufacturer131 = new Manufacturer();
        $manufacturer131->clave = "56";
        $manufacturer131->descripcion = "SANDISK";
        $manufacturer131->save();

        $manufacturer132 = new Manufacturer();
        $manufacturer132->clave = "310";
        $manufacturer132->descripcion = "SAPPHIRE";
        $manufacturer132->save();

        $manufacturer133 = new Manufacturer();
        $manufacturer133->clave = "57";
        $manufacturer133->descripcion = "SEAGATE";
        $manufacturer133->save();

        $manufacturer134 = new Manufacturer();
        $manufacturer134->clave = "110";
        $manufacturer134->descripcion = "SHARP";
        $manufacturer134->save();

        $manufacturer135 = new Manufacturer();
        $manufacturer135->clave = "300";
        $manufacturer135->descripcion = "SHARP DISPLAY";
        $manufacturer135->save();

        $manufacturer136 = new Manufacturer();
        $manufacturer136->clave = "58";
        $manufacturer136->descripcion = "SILIMEX";
        $manufacturer136->save();

        $manufacturer138 = new Manufacturer();
        $manufacturer138->clave = "178";
        $manufacturer138->descripcion = "SMARTBITT";
        $manufacturer138->save();

        $manufacturer140 = new Manufacturer();
        $manufacturer140->clave = "107";
        $manufacturer140->descripcion = "SOFT RESTAURANT";
        $manufacturer140->save();

        $manufacturer141 = new Manufacturer();
        $manufacturer141->clave = "116";
        $manufacturer141->descripcion = "SOLA BASIC ISB";
        $manufacturer141->save();

        $manufacturer144 = new Manufacturer();
        $manufacturer144->clave = "316";
        $manufacturer144->descripcion = "START THE GAME";
        $manufacturer144->save();

        $manufacturer145 = new Manufacturer();
        $manufacturer145->clave = "248";
        $manufacturer145->descripcion = "STARTECH.COM";
        $manufacturer145->save();

        $manufacturer148 = new Manufacturer();
        $manufacturer148->clave = "168";
        $manufacturer148->descripcion = "SYNOLOGY";
        $manufacturer148->save();

        $manufacturer149 = new Manufacturer();
        $manufacturer149->clave = "63";
        $manufacturer149->descripcion = "TARGUS";
        $manufacturer149->save();

        $manufacturer151 = new Manufacturer();
        $manufacturer151->clave = "81";
        $manufacturer151->descripcion = "TECH ZONE ACCESORIOS";
        $manufacturer151->save();

        $manufacturer152 = new Manufacturer();
        $manufacturer152->clave = "297";
        $manufacturer152->descripcion = "TECH ZONE POS";
        $manufacturer152->save();

        $manufacturer153 = new Manufacturer();
        $manufacturer153->clave = "134";
        $manufacturer153->descripcion = "TENDA";
        $manufacturer153->save();

        $manufacturer157 = new Manufacturer();
        $manufacturer157->clave = "119";
        $manufacturer157->descripcion = "TP LINK";
        $manufacturer157->save();

        $manufacturer158 = new Manufacturer();
        $manufacturer158->clave = "67";
        $manufacturer158->descripcion = "TRIPP-LITE";
        $manufacturer158->save();

        $manufacturer159 = new Manufacturer();
        $manufacturer159->clave = "307";
        $manufacturer159->descripcion = "VANKYO";
        $manufacturer159->save();

        $manufacturer165 = new Manufacturer();
        $manufacturer165->clave = "284";
        $manufacturer165->descripcion = "VERTIV";
        $manufacturer165->save();

        $manufacturer166 = new Manufacturer();
        $manufacturer166->clave = "88";
        $manufacturer166->descripcion = "VICA";
        $manufacturer166->save();

        $manufacturer167 = new Manufacturer();
        $manufacturer167->clave = "173";
        $manufacturer167->descripcion = "VIEWSONIC";
        $manufacturer167->save();

        $manufacturer168 = new Manufacturer();
        $manufacturer168->clave = "274";
        $manufacturer168->descripcion = "VIPER";
        $manufacturer168->save();

        $manufacturer170 = new Manufacturer();
        $manufacturer170->clave = "314";
        $manufacturer170->descripcion = "VORAGO";
        $manufacturer170->save();

        $manufacturer171 = new Manufacturer();
        $manufacturer171->clave = "169";
        $manufacturer171->descripcion = "WAM";
        $manufacturer171->save();

        $manufacturer173 = new Manufacturer();
        $manufacturer173->clave = "128";
        $manufacturer173->descripcion = "WD - WESTERN DIGITAL";
        $manufacturer173->save();

        $manufacturer174 = new Manufacturer();
        $manufacturer174->clave = "278";
        $manufacturer174->descripcion = "X-FUSION";
        $manufacturer174->save();

        $manufacturer175 = new Manufacturer();
        $manufacturer175->clave = "100";
        $manufacturer175->descripcion = "XEROX";
        $manufacturer175->save();

        $manufacturer176 = new Manufacturer();
        $manufacturer176->clave = "120";
        $manufacturer176->descripcion = "XFX";
        $manufacturer176->save();

        $manufacturer177 = new Manufacturer();
        $manufacturer177->clave = "199";
        $manufacturer177->descripcion = "ZK TECO";
        $manufacturer177->save();

        $manufacturer178 = new Manufacturer();
        $manufacturer178->clave = "294";
        $manufacturer178->descripcion = "ZOOMY";
        $manufacturer178->save();

    }
}
