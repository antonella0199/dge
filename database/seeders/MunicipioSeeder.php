<?php

namespace Database\Seeders;

use App\Models\Municipio;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Municipio::create(['nombre' => 'SALTA', 'departamento_id' => 1]);
        Municipio::create(['nombre' => 'JOAQUIN V. GONZALEZ','departamento_id' => 2]);
        Municipio::create(['nombre' => 'CACHI','departamento_id' => 3]);
        Municipio::create(['nombre' => 'CAFAYATE','departamento_id' => 4]);
        Municipio::create(['nombre' => 'LA CALDERA','departamento_id' => 5]);
        Municipio::create(['nombre' => 'GENERAL GUEMES','departamento_id' => 6]);
        Municipio::create(['nombre' => 'LA CANDELARIA','departamento_id' => 7]);
        Municipio::create(['nombre' => 'CERRILLOS','departamento_id' => 8]);
        Municipio::create(['nombre' => 'CHICOANA','departamento_id' => 9]);
        Municipio::create(['nombre' => 'GUACHIPAS','departamento_id' => 10]);
        Municipio::create(['nombre' => 'IRUYA','departamento_id' => 11]);
        Municipio::create(['nombre' => 'LA POMA','departamento_id' => 12]);
        Municipio::create(['nombre' => 'LA VIÑA','departamento_id' => 13]);
        Municipio::create(['nombre' => 'METAN','departamento_id' => 14]);
        Municipio::create([ 'nombre' => 'MOLINOS','departamento_id' => 15]);
        Municipio::create([ 'nombre' => 'ORAN','departamento_id' => 16]);
        Municipio::create([ 'nombre' => 'CORONEL JUAN SOLA','departamento_id' => 17]);
        Municipio::create([ 'nombre' => 'ROSARIO DE LA FRONTERA','departamento_id' => 18]);
        Municipio::create([ 'nombre' => 'ROSARIO DE LERMA','departamento_id' => 19]);
        Municipio::create([ 'nombre' => 'SAN CARLOS','departamento_id' => 20]);
        Municipio::create([ 'nombre' => 'COBA','departamento_id' => 1]);
        Municipio::create([ 'nombre' => 'BALBUENA','departamento_id' => 2]);
        Municipio::create([ 'nombre' => 'SAN JOSE','departamento_id' => 3]);
        Municipio::create([ 'nombre' => 'TOLOMBON','departamento_id' => 4]);
        Municipio::create([ 'nombre' => 'LA CALDERILLA','departamento_id' => 5]);
        Municipio::create([ 'nombre' => 'PALOMITAS','departamento_id' => 6]);
        Municipio::create([ 'nombre' => 'LOS ALAMOS','departamento_id' => 8]);
        Municipio::create([ 'nombre' => 'EL TIPAL','departamento_id' => 9]);
        Municipio::create([ 'nombre' => 'ALEMANIA','departamento_id' => 10]);
        Municipio::create([ 'nombre' => 'TALAPAMPA','departamento_id' => 13]);
        Municipio::create([ 'nombre' => 'HIPOLITO YRIGOYEN','departamento_id' => 16]);
        Municipio::create([ 'nombre' => 'LOS BLANCOS','departamento_id' => 17]);
        Municipio::create([ 'nombre' => 'EL NARANJO','departamento_id' => 18]);
        Municipio::create([ 'nombre' => 'EL BARRIAL','departamento_id' => 20]);
        Municipio::create([ 'nombre' => 'LAGUNA BLANCA','departamento_id' => 2]);
        Municipio::create([ 'nombre' => 'ESCALCHI','departamento_id' => 3]);
        Municipio::create([ 'nombre' => 'LESSER','departamento_id' => 5]);
        Municipio::create([ 'nombre' => 'EL SAUCE','departamento_id' => 6]);
        Municipio::create([ 'nombre' => 'LA MAROMA','departamento_id' => 9]);
        Municipio::create([ 'nombre' => 'PAMPA GRANDE','departamento_id' => 10]);
        Municipio::create([ 'nombre' => 'SANTA ANA','departamento_id' => 13]);
        Municipio::create([ 'nombre' => 'MISION ZENTA','departamento_id' => 16]);
        Municipio::create([ 'nombre' => 'PLUMA DE PATO','departamento_id' => 17]);
        Municipio::create([ 'nombre' => 'ARENAL','departamento_id' => 18]);
        Municipio::create([ 'nombre' => 'AMBLAYO','departamento_id' => 20]);
        Municipio::create([ 'nombre' => 'CORONEL OLLEROS','departamento_id' => 2]);
        Municipio::create([ 'nombre' => 'PUERTA LA PAYA','departamento_id' => 3]);
        Municipio::create([ 'nombre' => 'EL SALTO','departamento_id' => 6]);
        Municipio::create([ 'nombre' => 'YUCHAN','departamento_id' => 16]);
        Municipio::create([ 'nombre' => 'LA UNION','departamento_id' => 17]);
        Municipio::create([ 'nombre' => 'LOS BAÑOS','departamento_id' => 18]);
        Municipio::create([ 'nombre' => 'LA PAYA','departamento_id' => 3]);
        Municipio::create([ 'nombre' => 'SANTA MARIA','departamento_id' => 17]);
        Municipio::create([ 'nombre' => 'COPO QUILE','departamento_id' => 18]);
        Municipio::create([ 'nombre' => 'EL PIQUETE','departamento_id' => 2]);
        Municipio::create([ 'nombre' => 'VILLA SAN LORENZO','departamento_id' => 1]);
        Municipio::create([ 'nombre' => 'EL QUEBRACHAL','departamento_id' => 2]);
        Municipio::create([ 'nombre' => 'PAYOGASTA','departamento_id' => 3]);
        Municipio::create([ 'nombre' => 'VAQUEROS','departamento_id' => 5]);
        Municipio::create([ 'nombre' => 'CAMPO SANTO','departamento_id' => 6]);
        Municipio::create([ 'nombre' => 'EL TALA','departamento_id' => 7]);
        Municipio::create([ 'nombre' => 'LA MERCED','departamento_id' => 8]);
        Municipio::create([ 'nombre' => 'EL CARRIL','departamento_id' => 9]);
        Municipio::create([ 'nombre' => 'ISLA DE CAÑAS','departamento_id' => 11]);
        Municipio::create([ 'nombre' => 'CORONEL MOLDES','departamento_id' => 13]);
        Municipio::create([ 'nombre' => 'EL GALPON','departamento_id' => 14]);
        Municipio::create([ 'nombre' => 'SECLANTAS','departamento_id' => 15]);
        Municipio::create([ 'nombre' => 'COLONIA SANTA ROSA','departamento_id' => 16]);
        Municipio::create([ 'nombre' => 'SANTA VICTORIA ESTE','departamento_id' => 17]);
        Municipio::create([ 'nombre' => 'EL POTRERO','departamento_id' => 18]);
        Municipio::create([ 'nombre' => 'CAMPO QUIJANO','departamento_id' => 19]);
        Municipio::create([ 'nombre' => 'ANIMANA','departamento_id' => 20]);
        Municipio::create([ 'nombre' => 'ATOCHA','departamento_id' => 1]);
        Municipio::create([ 'nombre' => 'MACAPILLO','departamento_id' => 2]);
        Municipio::create([ 'nombre' => 'FINCA PALERMO OESTE','departamento_id' => 3]);
        Municipio::create([ 'nombre' => 'MOJOTORO','departamento_id' => 5]);
        Municipio::create([ 'nombre' => 'BETANIA','departamento_id' => 6]);
        Municipio::create([ 'nombre' => 'SAN AGUSTIN','departamento_id' => 8]);
        Municipio::create([ 'nombre' => 'SAUCELITO','departamento_id' => 16]);
        Municipio::create([ 'nombre' => 'HITO 1','departamento_id' => 17]);
        Municipio::create([ 'nombre' => 'ANTILLA','departamento_id' => 18]);
        Municipio::create([ 'nombre' => 'GOBERNADOR SOLA','departamento_id' => 19]);
        Municipio::create([ 'nombre' => 'TALAVERA','departamento_id' => 2]);
        Municipio::create([ 'nombre' => 'COBOS','departamento_id' => 6]);
        Municipio::create([ 'nombre' => 'APOLINARIO SARAVIA','departamento_id' => 2]);
        Municipio::create([ 'nombre' => 'EL BORDO','departamento_id' => 6]);
        Municipio::create([ 'nombre' => 'EL JARDIN','departamento_id' => 7]);
        Municipio::create([ 'nombre' => 'RIO PIEDRAS','departamento_id' => 14]);
        Municipio::create([ 'nombre' => 'LURACATAO','departamento_id' => 15]);
        Municipio::create([ 'nombre' => 'PICHANAL','departamento_id' => 16]);
        Municipio::create([ 'nombre' => 'RIVADAVIA','departamento_id' => 17]);
        Municipio::create([ 'nombre' => 'HORCONES','departamento_id' => 18]);
        Municipio::create([ 'nombre' => 'LA SILLETA','departamento_id' => 19]);
        Municipio::create([ 'nombre' => 'ANGASTACO','departamento_id' => 20]);
        Municipio::create([ 'nombre' => 'EL CEIBAL','departamento_id' => 7]);
        Municipio::create([ 'nombre' => 'LUMBRERAS','departamento_id' => 14]);
        Municipio::create([ 'nombre' => 'CAPITAN JUAN PAGE','departamento_id' => 17]);
        Municipio::create([ 'nombre' => 'EL ENCON','departamento_id' => 19]);
        Municipio::create([ 'nombre' => 'LAS LAJITAS','departamento_id' => 2]);
        Municipio::create([ 'nombre' => 'SAN JOSE DE ORQUERA','departamento_id' => 14]);
        Municipio::create([ 'nombre' => 'URUNDEL','departamento_id' => 16]);
        Municipio::create([ 'nombre' => 'PIQUETE CABADO','departamento_id' => 2]);
        Municipio::create([ 'nombre' => 'RIO DEL VALLE','departamento_id' => 2]);
        Municipio::create([ 'nombre' => 'GENERAL PIZARRO','departamento_id' => 2]);
        Municipio::create([ 'nombre' => 'AGUAS BLANCAS','departamento_id' => 16]);
        Municipio::create([ 'nombre' => 'LUIS BURELA','departamento_id' => 2]);
        Municipio::create([ 'nombre' => 'EL TUNAL','departamento_id' => 14]);
        Municipio::create([ 'nombre' => 'GAONA','departamento_id' => 2]);
        Municipio::create([ 'nombre' => 'TOLLOCHE','departamento_id' => 2]);
        Municipio::create([ 'nombre' => 'CORONEL MOLLINEDO','departamento_id' => 2]);
        Municipio::create([ 'nombre' => 'EL REY','departamento_id' => 2]);
        Municipio::create([ 'nombre' => 'PALERMO','departamento_id' => 2]);
        Municipio::create([ 'nombre' => 'LAS COSTAS','departamento_id' => 1]);
        Municipio::create([ 'nombre' => 'EL TIPAL / LA ALMUDENA','departamento_id' => 1]);
        Municipio::create([ 'nombre' => 'LA CIENAGA','departamento_id' => 1]);
        Municipio::create([ 'nombre' => 'CEIBALITO','departamento_id' => 2]);
        Municipio::create([ 'nombre' => 'YACOCHUYA','departamento_id' => 4]);
        Municipio::create([ 'nombre' => 'SUMALAO','departamento_id' => 8]);
        Municipio::create([ 'nombre' => 'CABEZA DE BUEY','departamento_id' => 6]);
        Municipio::create([ 'nombre' => 'EL CEBILLAR','departamento_id' => 10]);
        Municipio::create([ 'nombre' => 'PUEBLO VIEJO','departamento_id' => 11]);
        Municipio::create([ 'nombre' => 'GALLINATO','departamento_id' => 5]);
        Municipio::create([ 'nombre' => 'MUÑANO','departamento_id' => 12]);
        Municipio::create([ 'nombre' => 'COBRES','departamento_id' => 12]);
        Municipio::create([ 'nombre' => 'RANGEL','departamento_id' => 12]);
        Municipio::create([ 'nombre' => 'EL CARMEN','departamento_id' => 13]);
        Municipio::create([ 'nombre' => '20 DE FEBRERO','departamento_id' => 13]);
        Municipio::create([ 'nombre' => 'AMPASCACHI','departamento_id' => 13]);
        Municipio::create([ 'nombre' => 'OSMA','departamento_id' => 13]);
        Municipio::create([ 'nombre' => 'METAN VIEJO','departamento_id' => 14]);
        Municipio::create([ 'nombre' => 'ESTECO','departamento_id' => 14]);
        Municipio::create([ 'nombre' => 'YATASTO','departamento_id' => 14]);
        Municipio::create([ 'nombre' => 'COLOME','departamento_id' => 15]);
        Municipio::create([ 'nombre' => 'TABACAL','departamento_id' => 16]);
        Municipio::create([ 'nombre' => 'ESTEBAN DE URIZAR','departamento_id' => 16]);
        Municipio::create([ 'nombre' => 'ALTO LA SIERRA','departamento_id' => 17]);
        Municipio::create([ 'nombre' => 'PALMARCITO','departamento_id' => 17]);
        Municipio::create([ 'nombre' => 'SUNCHAL','departamento_id' => 17]);
        Municipio::create([ 'nombre' => 'PUERTA DE DIAZ','departamento_id' => 17]);
        Municipio::create([ 'nombre' => 'LAS MERCEDES','departamento_id' => 18]);
        Municipio::create([ 'nombre' => 'LAS SALADAS','departamento_id' => 18]);
        Municipio::create([ 'nombre' => 'PUENTE DE PLATA','departamento_id' => 18]);
        Municipio::create([ 'nombre' => 'EL MOLLAR','departamento_id' => 19]);
        Municipio::create([ 'nombre' => 'LAS CUEVAS','departamento_id' => 19]);
        Municipio::create([ 'nombre' => 'INGENIERO MAURY','departamento_id' => 19]);
        Municipio::create([ 'nombre' => 'EL GOLGOTA','departamento_id' => 19]);
        Municipio::create([ 'nombre' => 'EL ALFARCITO','departamento_id' => 19]);
        Municipio::create([ 'nombre' => 'PUERTA DE TASTIL','departamento_id' => 19]);
        Municipio::create([ 'nombre' => 'SANTA ROSA DE TASTIL','departamento_id' => 19]);
        Municipio::create([ 'nombre' => 'PAYOGASTILLA','departamento_id' => 20]);
        Municipio::create([ 'nombre' => 'CENTRO 25 DE JUNIO','departamento_id' => 2]);
        Municipio::create([ 'nombre' => 'PARAJE SAN MARTIN','departamento_id' => 6]);
        Municipio::create([ 'nombre' => 'CABRA CORRAL','departamento_id' => 13]);
        Municipio::create([ 'nombre' => 'LA PUERTA','departamento_id' => 15]);
        Municipio::create([ 'nombre' => 'SANTA ROSA','departamento_id' => 17]);
        Municipio::create([ 'nombre' => 'SAN FELIPE','departamento_id' => 18]);
        Municipio::create([ 'nombre' => 'PAYOGASTILLA','departamento_id' => 20]);
        Municipio::create([ 'nombre' => 'SANTA ROSA','departamento_id' => 20]);
        Municipio::create([ 'nombre' => 'SAN ANTONIO DE LOS COBRES','departamento_id' => 20]);
        Municipio::create([ 'nombre' => 'LAS CONCHAS','departamento_id' => 20]);
        Municipio::create([ 'nombre' => 'SAN LUCAS','departamento_id' => 20]);
        Municipio::create([ 'nombre' => 'JASIMANÁ','departamento_id' => 20]);
        Municipio::create([ 'nombre' => 'RIO GRANDE','departamento_id' => 20]);
        Municipio::create([ 'nombre' => 'PAMPALLANA','departamento_id' => 20]);
        Municipio::create([ 'nombre' => 'EL ARREMO','departamento_id' => 20]);
        Municipio::create([ 'nombre' => 'CORRALITO','departamento_id' => 20]);
        Municipio::create([ 'nombre' => 'SAN RAFAEL','departamento_id' => 20]);
        Municipio::create([ 'nombre' => 'la Angostura','departamento_id' => 20]);
        Municipio::create([ 'nombre' => 'Mina Don Otto','departamento_id' => 20]);
        Municipio::create([ 'nombre' => 'Monteverde','departamento_id' => 20]);
        Municipio::create([ 'nombre' => 'Pucará','departamento_id' => 20]);
        Municipio::create([ 'nombre' => 'AGUARAY','departamento_id' => 23]);
        Municipio::create([ 'nombre' => 'CAMPAMENTO VESPUCIO','departamento_id' => 23]);
        Municipio::create([ 'nombre' => 'CAMPICHUELO','departamento_id' => 23]);
        Municipio::create([ 'nombre' => 'CAMPO DURAN','departamento_id' => 23]);
        Municipio::create([ 'nombre' => 'CAPIAZUTI','departamento_id' => 23]);
        Municipio::create([ 'nombre' => 'CARBONCITO','departamento_id' => 23]);
        Municipio::create([ 'nombre' => 'CORONEL CORNEJO','departamento_id' => 23]);
        Municipio::create([ 'nombre' => 'DRAGONES','departamento_id' => 23]);
        Municipio::create([ 'nombre' => 'EMBARCACION','departamento_id' => 23]);
        Municipio::create([ 'nombre' => 'GENERAL BALLIVIAN','departamento_id' => 23]);
        Municipio::create([ 'nombre' => 'GENERAL MOSCONI','departamento_id' => 23]);
        Municipio::create([ 'nombre' => 'HICKMAN','departamento_id' => 23]);
        Municipio::create([ 'nombre' => 'MISION CHAQUEÃ‘A','departamento_id' => 23]);
        Municipio::create([ 'nombre' => 'MISION KILOMETRO 6','departamento_id' => 23]);
        Municipio::create([ 'nombre' => 'PACARA','departamento_id' => 23]);
        Municipio::create([ 'nombre' => 'PADRE LOZANO','departamento_id' => 23]);
        Municipio::create([ 'nombre' => 'PIQUIRENDA','departamento_id' => 23]);
        Municipio::create([ 'nombre' => 'PROFESOR SALVADOR MAZZA','departamento_id' => 23]);
        Municipio::create([ 'nombre' => 'TARTAGAL','departamento_id' => 23]);
        Municipio::create([ 'nombre' => 'TOBANTIRENDA','departamento_id' => 23]);
        Municipio::create([ 'nombre' => 'TRANQUITAS','departamento_id' => 23]);
        Municipio::create([ 'nombre' => 'YACUY','departamento_id' => 23]);
        Municipio::create([ 'nombre' => 'RECAREDO','departamento_id' => 23]);
        Municipio::create([ 'nombre' => 'MISION TIERRAS FISCALES','departamento_id' => 23]);
        Municipio::create([ 'nombre' => 'OLACAPATO','departamento_id' => 22]);
        Municipio::create([ 'nombre' => 'SAN ANTONIO DE LOS COBRES','departamento_id' => 22]);
        Municipio::create([ 'nombre' => 'SANTA ROSA DE LOS PASTOS GRANDES','departamento_id' => 22]);
        Municipio::create([ 'nombre' => 'TOLAR GRANDE','departamento_id' => 22]);
        Municipio::create([ 'nombre' => 'ACOYTE','departamento_id' => 21]);
        Municipio::create([ 'nombre' => 'CAMPO LA CRUZ','departamento_id' => 21]);
        Municipio::create([ 'nombre' => 'LOS TOLDOS','departamento_id' => 21]);
        Municipio::create([ 'nombre' => 'NAZARENO','departamento_id' => 21]);
        Municipio::create([ 'nombre' => 'POSCAYA','departamento_id' => 21]);
        Municipio::create([ 'nombre' => 'SAN MARCOS','departamento_id' => 21]);
        Municipio::create([ 'nombre' => 'SANTA VICTORIA','departamento_id' => 21]);
    }
}