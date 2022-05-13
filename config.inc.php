<?php
namespace MRBS;

// $Id$

/**************************************************************************
 *   MRBS Configuration File
 *   Configure this file for your site.
 *   You shouldn't have to modify anything outside this file.
 *
 *   This file has already been populated with the minimum set of configuration
 *   variables that you will need to change to get your system up and running.
 *   If you want to change any of the other settings in systemdefaults.inc.php
 *   or areadefaults.inc.php, then copy the relevant lines into this file
 *   and edit them here.   This file will override the default settings and
 *   when you upgrade to a new version of MRBS the config file is preserved.
 **************************************************************************/

/**********
 * Timezone
 **********/

// The timezone your meeting rooms run in. It is especially important
// to set this if you're using PHP 5 on Linux. In this configuration
// if you don't, meetings in a different DST than you are currently
// in are offset by the DST offset incorrectly.
//
// Note that timezones can be set on a per-area basis, so strictly speaking this
// setting should be in areadefaults.inc.php, but as it is so important to set
// the right timezone it is included here.
//
// When upgrading an existing installation, this should be set to the
// timezone the web server runs in.  See the INSTALL document for more information.
//
// A list of valid timezones can be found at http://php.net/manual/timezones.php
// The following line must be uncommented by removing the '//' at the beginning
//$timezone = "Europe/London";

/***************************************************************************************************/
/***************************** UGIT - TIMEZONE         *********************************************/
/***************************************************************************************************/
$timezone = "America/Costa_Rica";



/***************************************************************************************************/
/***************************** UGIT - BASE DE DATOS    *********************************************/
/***************************************************************************************************/
/*******************
 * Database settings
 ******************/
// Which database system: "pgsql"=PostgreSQL, "mysql"=MySQL
$dbsys = "mysql";
// Hostname of database server. For pgsql, can use "" instead of localhost
// to use Unix Domain Sockets instead of TCP/IP. For mysql "localhost"
// tells the system to use Unix Domain Sockets, and $db_port will be ignored;
// if you want to force TCP connection you can use "127.0.0.1".
$db_host = "mysqlp.siua.ac.cr";
// If you need to use a non standard port for the database connection you
// can uncomment the following line and specify the port number
// $db_port = 1234;
// Database name:
$db_database = "bd_sis_mrbs_citas_siua_ve";
// Schema name.  This only applies to PostgreSQL and is only necessary if you have more
// than one schema in your database and also you are using the same MRBS table names in
// multiple schemas.
//$db_schema = "public";
// Database login user name:
$db_login = "remoto";
// Database login password:
$db_password = 'Remoto_BAS_0';
// Prefix for table names.  This will allow multiple installations where only
// one database is available





$db_tbl_prefix = "mrbs_";
// Set $db_persist to TRUE to use PHP persistent (pooled) database connections.  Note
// that persistent connections are not recommended unless your system suffers significant
// performance problems without them.   They can cause problems with transactions and
// locks (see http://php.net/manual/en/features.persistent-connections.php) and although
// MRBS tries to avoid those problems, it is generally better not to use persistent
// connections if you can.
$db_persist = FALSE;


/* Add lines from systemdefaults.inc.php and areadefaults.inc.php below here
   to change the default configuration. Do _NOT_ modify systemdefaults.inc.php
   or areadefaults.inc.php.  */


/***************************************************************************************************/
/***************************** UGIT - VOLABULARIO      *********************************************/
/***************************************************************************************************/
$vocab_override["es"]["type.A"] = "01_2OPC"; 	// 01_2OPC | 2 opción de carrera 			| ORIT 	| f3e5f5
$vocab_override["es"]["type.B"] = "02_EMAI"; 	// 02_EMAI | Lectura Y docts				| ORIT 	| e1bee7  
$vocab_override["es"]["type.C"] = "03_ADMI"; 	// 03_ADMI | Admisión UNA 					| GENE 	| 263238
$vocab_override["es"]["type.D"] = "04_ANPA";    // 04_ANPA | Ansiedad-Panico 				| GENE 	| 455a64
$vocab_override["es"]["type.E"] = "05_REAC"; 	// 05_REAC | Bajo Rendimiento Academico		| GENE 	| bdbdbd
$vocab_override["es"]["type.F"] = "06_CCAR"; 	// 06_CCAR | Cambio de Carrera 				| GENE 	| 78909c
$vocab_override["es"]["type.G"] = "07_CAPA"; 	// 07_CAPA | Capacitación 					| GENE 	| 607d8b
$vocab_override["es"]["type.H"] = "08_CABI"; 	// 08_CABI | Consulta Abierta 				| GENE 	| 546e7a
$vocab_override["es"]["type.I"] = "09_COBE"; 	// 09_COBE | Consultas Beca 				| GENE 	| 90a4ae
$vocab_override["es"]["type.J"] = "10_MAPA"; 	// 10_MAPA | Estudiante Madre/Padre 		| ORIT 	| d1c4e9
$vocab_override["es"]["type.K"] = "11_FBWA"; 	// 11_FBWA | Facebook Whatsapp 				| ORIT 	| ede7f6
$vocab_override["es"]["type.L"] = "12_PIVU"; 	// 12_PIVU | Inducción a la Vida Universi. 	| ORIT 	| 9575cd
$vocab_override["es"]["type.M"] = "13_ICRI"; 	// 13_ICRI | Intervención en crisis 		| GENE 	| ff98fb
$vocab_override["es"]["type.N"] = "14_ESTR"; 	// 14_ESTR | Manejo de estrés 				| GENE 	| eceff1
$vocab_override["es"]["type.O"] = "15_VOCA"; 	// 15_VOCA | Orientación vocacional 		| ORIT 	| e8eaf6
$vocab_override["es"]["type.P"] = "16_PBEC"; 	// 16_PBEC | Procesos de Asignación de Beca | TSOC 	| 80cbc4
$vocab_override["es"]["type.Q"] = "17_EDUC"; 	// 17_EDUC | Procesos Socio-Educativos 		| GENE 	| cfd8dc
$vocab_override["es"]["type.R"] = "18_REPA"; 	// 18_REPA | Relaciones de pareja 			| GENE 	| eeeeee
$vocab_override["es"]["type.S"] = "19_REUN"; 	// 19_REUN | Reunión 						| GENE 	| f5f5f5
$vocab_override["es"]["type.T"] = "20_SIND"; 	// 20_SIND | Segimiento Individual 			| GENE 	| 616161
$vocab_override["es"]["type.U"] = "21_NNEE"; 	// 21_NNEE | Servicios de Apoyo NE 			| ORIT 	| b39ddb
$vocab_override["es"]["type.V"] = "22_VIFA"; 	// 22_VIFA | Violencia Intrafamiliar 		| ORIT 	| b388ff
$vocab_override["es"]["type.W"] = "23_VICO"; 	// 23_VICO | Visitas a Colegios 			| ORIT 	| 7e57c2
$vocab_override["es"]["type.X"] = "24_DUEL"; 	// 24_DUEL | Duelo 							| GENE 	| b0bec5
$vocab_override["es"]["type.Y"] = "25_ALMU"; 	// 25_ALMU | Almuerzo 						| GENE 	| c8e6c9
$vocab_override["es"]["type.Z"] = "26_OTRO"; 	// 26_OTRO | Otro 							| GENE 	| 757575

$vocab_override["es"]["type.a"] = "27_SALU"; 	// 27_SALU | Salud 							| GENE 	| fafafa
$vocab_override["es"]["type.b"] = "28_PSIC"; 	// 28_PSIC | Psicología 					| PSIC 	| b3e5fc
$vocab_override["es"]["type.c"] = "29_TRBJ"; 	// 29_TRBJ | Trabajo administrativo 		| GENE 	| 424242
$vocab_override["es"]["type.d"] = "30_VERI"; 	// 30_VERI | Verificación 					| TSOC 	| 4db6ac
$vocab_override["es"]["type.e"] = "31_VALO"; 	// 31_VALO | Estudio Social 				| ORIT 	| ba68c8
$vocab_override["es"]["type.f"] = "32_PLAN"; 	// 32_PLAN | Planeación activi. socioeduca. | GENE 	| 9e9e9e
$vocab_override["es"]["type.g"] = "33_REDA"; 	// 33_REDA | Redacción de inform. visitas  	| GENE 	| e0e0e0
$vocab_override["es"]["type.h"] = "34_CAMB"; 	// 34_CAMB | Reportes de cambios 			| TSOC 	| e0f2f1
$vocab_override["es"]["type.i"] = "35_VOLU"; 	// 35_VOLU | Voluntariado 					| ORIT 	| ce93d8
$vocab_override["es"]["type.j"] = "36_CONS"; 	// 36_CONS | Constancias de becas 			| TSOC 	| b2dfdb
$vocab_override["es"]["type.k"] = "37_HOLI"; 	// 37_HOLI | Feriado, Reposición Tiempo 	| GENE 	| 37474f








//Voy por j miniscula











/*$vocab_override["es"]["type.Y"] = "a";
$vocab_override["es"]["type.Z"] = "b";
$vocab_override["es"]["type.A1"] = "c";
*/



/*
$vocab_override['es']['room.Problema_Activo'] 			= "Existe algún problema";
$vocab_override['es']['room.Descripcion_Problema'] 		= "Descripción del problema";
$vocab_override['es']['room.Tipo_Mobiliario'] 			= "Tipo de Mobiliario";
$vocab_override['es']['room.Computadora_Profesor'] 		= "¿Computadora Profesor?";
$vocab_override['es']['room.Pizarra_Interactiva'] 		= "¿Pizarra Interactiva?";
$vocab_override['es']['room.Proyector'] 				= "Proyector";
$vocab_override['es']['room.Caja_Selector_Video'] 		= "Caja Selector Vídeo";
$vocab_override['es']['room.Parlante'] 					= "Parlante";
$vocab_override['es']['room.Extintor'] 					= "Extintor";
$vocab_override['es']['room.Rotulacion'] 				= "Rotulación";
$vocab_override['es']['room.UPS'] 						= "UPS";
$vocab_override['es']['room.Cantidad_Computadoras'] 	= "Cantidad de Computadoras";
$vocab_override['es']['room.Basurero'] 					= "Basurero";
$vocab_override['es']['room.Aire_Acondicionado'] 		= "Aire Acondicionado";
$vocab_override['es']['room.Camaras'] 					= "Cámaras";
$vocab_override['es']['room.Rack'] 						= "Rack";
$vocab_override['es']['room.Cobertura_WIFI'] 		 	= "Cobertura WIFI";
$vocab_override['es']['room.Cableado_LAN'] 				= "Cableado LAN";
$vocab_override['es']['room.Cableado_LAN'] 				= "Cableado LAN";
$vocab_override['es']['room.Lampara_Emergencia'] 		= "Lampara Emergencia";
*/

$vocab_override['es']['entry.Estudiante'] 				= "Estudiante";
$is_mandatory_field['entry.Estudiante'] = true;
$vocab_override['es']['entry.Telefono'] 				= "Teléfono";
$is_mandatory_field['entry.Telefono'] = true;
$vocab_override['es']['entry.Carrera'] 					= "Carrera";
$is_mandatory_field['entry.Carrera'] = true;
$select_options['entry.Carrera'] = array('Administración de Empresas' => 'Administración de Empresas','Ingeniería en Sistemas' => 'Ingeniería en Sistemas','Inglés'=>'Inglés','Química Industrial'=>'Química Industrial','Otro'=>'Otro');
$vocab_override['es']['entry.Genero'] 					= "Género";
$is_mandatory_field['entry.Genero'] = true;
$select_options['entry.Genero'] = array('Femenino' => 'Femenino','Masculino' => 'Masculino');
