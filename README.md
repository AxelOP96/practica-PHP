# practica-PHP

  PHP es el acrónimo de PHP (Personal Home Page) Hypertext Preprocessor.
Es un Lenguaje de Scripting del lado del Servidor. 

##Sintaxis básica

• PHP es sensible a las mayúsculas

• ¿Cómo se incrusta en la página web?
    <?PHP ... ?>
    recomendado, siempre disponible
    <?= expresión ?>
    equivale a <? echo expresión ?>

• Las instrucciones se separan con un ; como en C. La marca final ?> implica un ;

• Comentarios: como en C, /* … */ (varias líneas ) y // (una línea)
  /* Comentario de
  varias líneas */
  print “hola”; // Comentario de una línea

• Para imprimir: echo y print
  echo: muestra una o más cadenas
  echo cadena1 [, cadena2…];
  echo “Hola mundo”;
  echo “Hola “, “mundo”;
  print: muestra una cadena
  print cadena;
  print “Hola mundo”;
  print “Hola “ . “mundo”;

• Ejemplo:
  <HTML>
  <HEAD>
  <TITLE>Mi primer programa en PHP</TITLE>
  </HEAD>
  <BODY>
  <?PHP
  print (“<P>Hola mundo</P>”);
  ?>
  </BODY>
  </HTML>


• Inclusión de ficheros externos:
  include() / include_once()
  require() / require_once()
• Ambos incluyen y evalúan el fichero especificado
• Diferencia: en caso de error include() produce un warning y require() un error fatal
• Se usará require() si al producirse un error debe interrumpirse la carga de la página


<HTML>
<HEAD>
<TITLE>Título</TITLE>
<?PHP
// Incluir bibliotecas de funciones
require ("conecta.php");
require ("fecha.php");
require ("cadena.php");
require ("globals.php");
?>
</HEAD>
<BODY>
<?PHP
include ("cabecera.html");
?>
// Código HTML + PHP
. . .
<?PHP
include ("pie.html");
?>
</BODY>
</HTML>

----------------------------------------------------------------------------------------------------------------------------------------------------------------------------

##Tipos de datos

• PHP soporta 8 tipos de datos primitivos:
  – Tipos comunes: boolean, integer, double, string
  – Tipos compuestos: array, object
  – Tipos especiales: resource, NULL

• El tipo de una variable no se suele especificar. Se decide en tiempo de ejecución en función del contexto y puede variar

• Funciones de interés:
  – La función gettype() devuelve el tipo de una variable
  – Las funciones is_type comprueban si una variable es de un tipo dado:
      is_array(), is_bool(), is_float(), is_integer(), is_null(), is_numeric(), is_object(), is_resource(), is_scalar(), is_string()
  – La función var_dump() muestra el tipo y el valor de una variable. Es especialmente interesante con los arrays
  – isset() verifica si un variable existe
  – unset() Destruye una variable
  – settype() Setea el tipo de una variable
  – empty() Verifica si una variable esta vacia
  – intval(), doubleval(), strval() Convierte el tipo de variable

• Tipo integer (números enteros)
  – 27, -5, 0
  $entero_baselO = 1234;
  $entero_base8 = 01234;
  $entero_basel6 = 0x1234;
  $entero_negativo = -1234;

• Tipo double (números reales)
  1.234, -5.33

• Tipo boolean (lógico)
  – Valores: true, false (insensibles a las mayúsculas)
  – El 0 y la cadena vacía tienen valor false

• Tipo string:
  – Las cadenas se encierran entre comillas simples o dobles:

• ‘simples’: admite los caracteres de escape \’ (comilla simple) y \\ (barra). Las variables NO se expanden

• “dobles”: admite más caracteres de escape, como \n, \r, \t, \\, \$, \”. Los nombres de variables SÍ se expanden

• Ejemplos:
  $a = 9;
  print ‘a vale $a\n’;
  // muestra a vale $a\n
  print “a vale $a\n”;
  // muestra a vale 9 y avanza una línea
  print “<IMG SRC=‘logo.gif’>”;
  // muestra <IMG SRC=‘logo.gif’>
  print “<IMG SRC=\”logo.gif\”>”;
  // muestra <IMG SRC=“logo.gif”>

– Acceso a un carácter de la cadena:
• La forma es $inicial = $nombre[0]; o $nombre{0};

----------------------------------------------------------------------------------------------------------------------------------------------------------------------------

##Variables

• El Nombre del las variables siempre van precedidas de un $

• El nombre es sensible a las mayúsculas

• Debe comenzar por letra o subrayado, seguido de letras, números o subrayado

• Variables predefinidas:
  $GLOBALS, $_SERVER, $_GET, $_POST, $_COOKIES, $_FILES, $_ENV, $_REQUEST, $_SESSION
• Ejemplo:
  $valor = 5;
  print “El valor es: “ . $valor . “\n”;
  print “El valor es: $valor\n”; // ojo: comillas dobles
Resultado:
El valor es: 5

Ámbito:
  Globales:Toda variable definida dentro de un documento php que no este dentro de una funcion, tambien se pueden llamar con el array $GLOBALS
  Locales: Toda funcion definida dentro de una funcion es local a ella
  Estaticas: Definidas con la clave static, son variables locales que permanecen luego de cerrada la funcion
  Parametros: Es una variable local pasada a la funcion por el procedimiento que la llama. Son locales a la funcion

• Variables variables
  – Se pueden crear nombres de variables dinámicamente
  – La variable variable toma su nombre del valor de otra variable previamente declarada
  – Ejemplo:
  $a = "hola";
  $$a = "mundo";
  print "$a $hola\n";
  print "$a ${$a}";
  Resultado:
  hola mundo
  hola mundo

Las constantes son tipos de datos que no varían en el desarrollo de un programa. En la vida real existen muchos tipos de constantes, el número pi, la temperatura 
de congelación del agua, el nombre de la Empresa, etcétera.

• Definición de constantes:
  define (“CONSTANTE”, “hola”);
  print CONSTANTE;

• No llevan $ delante

• Sólo se pueden definir constantes de los tipos comunes (boolean, integer, double, string)

• Funcion defined() – Si existe una constante dada

• Constantes Mágicas (Ej. __LINE__ )

• Constantes Predefinidas (Ej. PHP_VERSION)

----------------------------------------------------------------------------------------------------------------------------------------------------------------------------

##Expresiones y operadores

• Operadores aritméticos:
  +, -, *, /, %, ++, --

• Operador de asignación: =
  operadores combinados: .=, +=, etc
  $a = 3; $a += 5;  a vale 8
  $b = “hola ”; $b .= “mundo”;  b vale “hola mundo”
   Equivale a $b = $b . “mundo”;

• Operadores de comparación:
  ==, !=, <, >, <=, >=

• Operador Ternario
  Expresion ? Verdadero : Falso ;

• Operador de control de error: @. Antepuesto a una expresión, evita cualquier mensaje de error que pueda ser generado por la expresión

• Operadores lógicos:
  and (&&), or (||), !, xor

• Operadores de cadena:
  concatenación: . (punto)
  asignación con concatenación: .=

• Precedencia de operadores (de mayor a menor):
  ++, --
  *, /, %
  +,-
  <, <=, >, >=
  ==, !=
  &&
  ||
  and
  or

##Estructura selectiva if-else
  if (condición)
    sentencia

  if (condición)
    sentencia 1
  else
    sentencia 2

  if (condición1)
    sentencia 1
  else if (condición2)
    sentencia 2
  ...
  else if (condición n)
    sentencia n
  else
    sentencia n+1

• Mismo comportamiento que en C

• Las sentencias compuestas se encierran entre llaves

• elseif puede ir todo junto

• Estructura selectiva switch

switch (expresión)
{
case valor_1:
sentencia 1
break;
case valor_2:
sentencia 2
break;
…
case valor_n:
sentencia n
break;
default
sentencia n+1
}

• Mismo comportamiento que en C, sólo que la expresión del case pueser integer, float o string

• Estructura repetitiva while
  while (condición)
    sentencia

• Mismo comportamiento que en C

• Estructura repetitiva for
  for (inicialización; condición; incremento)
    sentencia

• Mismo comportamiento que en C

• Comandos break y continue

• La estructura foreach simplemente da un modo fácil de iterar sobre arrays. foreach funciona solo sobre arrays (y objetos) y resultará en un error al intentar usarlo 
en una variable con un diferente tipo de datos o una variable no inicializada

<?php
$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
$value = $value * 2;
}
// $arr ahora es array(2, 4, 6, 8)
?>

Finalización de la ejecución de un programa
• die() y exit()


----------------------------------------------------------------------------------------------------------------------------------------------------------------------------

##Funciones

• Por defecto los parámetros se pasan por valor

• Paso por referencia:
  function incrementa (&$a)
  {
  $a = $a + 1;
  }
  $a=1;
  incrementa ($a);
  print $a; // Muestra un 2

• Los valores de variable dentro de una funcion son locales y dinamicas

• Si quiero variables estaticas:

<?php
function contador() {
  static $contador = 0;
  $contador = $contador + 1;
  return $contador;
}

• Argumentos por defecto
function muestranombre ($titulo = "Sr.")
{
print "Estimado $titulo:\n";
}
muestranombre ();
muestranombre ("Prof.");
• Salida:
Estimado Sr.:
Estimado Prof.:
Funciones de manipulación de argumentos:
func_num_args() , func_get_arg() y func_get_args()

• Los argumentos con valores por defecto deben ser siempre los últimos:
function muestranombre ($nombre, $titulo= "Sr.")
{
print "Estimado $titulo $nombre:\n";
}
muestranombre (“Fernández”);
muestranombre (“Fernández”, "Prof.");
• Salida:
Estimado Sr. Fernández:
Estimado Prof. Fernández:

----------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Arrays (Tablas)

• Sintaxis:
  array ([clave =>] valor, ...)

• La clave es una cadena o un entero no negativo. El valor puede ser de
  cualquier tipo válido en PHP, incluyendo otro array

• Ejemplos:
  $color = array (‘rojo’=>101, ‘verde’=>51, ‘azul’=>255);
  $medidas = array (10, 25, 15);

• Acceso:
  $color[‘rojo’] // No olvidar las comillas
  $medidas[0]
  
• El primer elemento es el 0

• Creación
• Asignación directa:
  Asignando subindice
  $mi_array[l] = 23; // Asignación directa
  Subindice implicito

<?php
$mi_array[] = 23; // Empieza en el índice 0
$mi_array[] = 54; // índice 1
?>

• Función array()
  <?php
  $mi_array = array(23,45,76,23,65);
  ?>

• Función array() utilizando índices no implícitos
  <?php
  $mi_array = array(0 => 23, 1 => 45, 2 => 76);
  ?>
  <?php
  $mi_array = array("cero" => 23, "uno" => 45, 2 => 76);
  ?>

• Array Multidimensional
  <?php
  $colores = array( "fuertes" => array ( "rojo" => "FF0000",
  "verde" => "00FF00",
  "azul" => "0000FF"),
  "suaves" => array ( "rosa" => "FE9ABC",
  "amarillo" => "FDF189",
  "malva" => "9A2F68"));
  echo $colores["fuertes"] ["rojo"];
  ?>



----------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Bibliotecas de funciones

• Existen muchas bibliotecas de funciones en PHP

• Algunos ejemplos:
  – Funciones de manipulación de cadenas
  – Funciones de fecha y hora
  – Funciones de arrays
  – Funciones de ficheros
  – Funciones matemáticas
  – Funciones de bases de datos
  – Funciones de red

• Algunas bibliotecas requieren la instalación de componentes adicionales

• Todas las funciones de biblioteca están comentadas en la documentación de PHP

• Funciones de manipulación de cadenas
  – explode()

• Divide una cadena en subcadenas

• array explode (string separator, string string [, int limit])
  – rtrim(), ltrim(), trim()

• Eliminan caracteres a la derecha, a la izquierda o por ambos lados de una cadena

• string rtrim ( string str [, string charlist])
  – strstr()

• Busca la primera ocurrencia de una subcadena
  – strtolower() / strtoupper()

• Convierte una cadena a minúscula / mayúscula
  – strcmp() / strcasecmp()

• Compara dos cadenas con/sin distinción de mayúsculas
  – strlen()

• Calcula la longitud de una cadena

• Funciones de fecha y hora
  – date()
    • Formatea una fecha según un formato dado
    • Ejemplo:
      $fecha = date ("j/n/Y H:i");
      print ("$fecha");
      Resultado:
      26/9/2005 17:36
  
  – strtotime()
    • Convierte una fecha en un timestamp de UNIX
    • Ejemplo:
      $fecha = date ("j/n/Y", strtotime(“5 april 2001"));
      print ("$fecha");
      Resultado:
      5/4/2001

• Funciones de arrays
  – array_count_values()

• Calcula la frecuencia de cada uno de los elementos de un array
  – array_search()

• Busca un elemento en un array
  – count()

• Cuenta los elementos de un array
  – sort(), rsort()

• Ordena y reindexa un array (r=decreciente)
  – ksort(), krsort()

• Ordena por claves un array (r=decreciente)

----------------------------------------------------------------------------------------------------------------------------------------------------------------------------

##Formularios

1. Acceso a formularios HTML desde PHP
  • Fichero uno.php
  <HTML>
  <BODY>
  <FORM ACTION=”dos.php” METHOD=”POST”>
  Edad: <INPUT TYPE=”text” NAME=”edad”>
  <INPUT TYPE=”submit” VALUE=”aceptar”>
  </FORM>
  </BODY>
  </HTML>

• Fichero dos.php
  <HTML>
  <BODY>
  <?PHP
  print (“La edad es: $edad”);
  ?>
  </BODY>
  </HTML>

• A partir de PHP 4.2.0, el valor por defecto de la directiva de PHP register_globals es off

• Esto tiene una gran importancia sobre los formularios, ya que no es posible acceder a las variables enviadas de la manera anterior (como variables globales). En su
lugar hay que utilizar la variable predefinida de PHP $_REQUEST, escribiendo $_REQUEST[‘edad’] en lugar de $edad

• Se puede poner register_globals = on en el fichero de configuración php.ini, pero no es recomendable por motivos de seguridad. Una alternativa que permite hacer 
mínimos cambios en el código ya existente es la siguiente:
$edad = $_REQUEST[‘edad’];

• Acceso mediante la Super Variable (tiene el contenido de $_POST, $_GET y $_COOKIE) $_REQUEST[ ]

• Acceso mediante la Super Variable (Método GET)
  – $_GET[ ]

• Acceso mediante la Super Variable (Método POST)
  – $_POST[ ]

• Codificación de datos enviados por Formularios

• Modificador enctype=

• Posibilidades:
  – application/x-www-form-urlencoded : Todos los caracteres son codificados antes de ser enviados
  – multipart/form-data : Los caracteres no son codificados, normalmente lo usamos solo para realizar upload de datos.
  – text/plain : Los espacios son convertidos en caracteres “+”, pero el resto de los caracteres especiales no son codificados.

• Acceso a los diferentes tipos de elementos de entrada de formulario
– Elementos de tipo INPUT
    • TEXT
    • RADIO
    • CHECKBOX
    • BUTTON
    • FILE
    • HIDDEN
    • PASSWORD
    • SUBMIT
– Elemento SELECT
    • Simple / múltiple
– Elemento TEXTAREA

• TEXT
  Introduzca la cadena a buscar:
  <INPUT TYPE="text" NAME="cadena" VALUE="valor por defecto" SIZE="20">
  <?PHP
  $cadena = $_POST[‘cadena’];
  print ($cadena);
  ?>

• RADIO
  Sexo:
  <INPUT TYPE="radio" NAME=“sexo" VALUE=“M“ CHECKED>Mujer
  <INPUT TYPE="radio" NAME=“sexo" VALUE=“H">Hombre
  <?PHP
  $sexo = $_POST[‘sexo’];
  print ($sexo);
  ?>

• CHECKBOX
  <INPUT TYPE="checkbox" NAME="extras[]" VALUE="garaje" CHECKED>Garaje
  <INPUT TYPE="checkbox" NAME="extras[]" VALUE="piscina">Piscina
  <INPUT TYPE="checkbox" NAME="extras[]" VALUE="jardin">Jardín
  <?PHP
  $extras = $_POST[‘extras’];
  foreach ($extras as $extra)
  print (“$extra<BR>\n”);
  ?>

• BUTTON
  <INPUT TYPE="button" NAME=“actualizar" VALUE="Actualizar datos">
  <?PHP
  $actualizar = $_POST[‘actualizar’];
  if ($actualizar)
    print ("Se han actualizado los datos");
  ?>

• HIDDEN
  <?PHP
  print(“<INPUT TYPE=’hidden’ NAME=’username’ VALUE=’$usuario’>\n”);
  ?>
  <?PHP
  $username = $_POST[‘username’];
  print ($username);
  ?>

• PASSWORD
  Contraseña: <INPUT TYPE="password" NAME="clave">
  <?PHP
  $clave = $_POST[‘clave’];
  print ($clave);
  ?>

• SUBMIT
  <INPUT TYPE="submit" NAME="enviar" VALUE="Enviar datos">
  <?PHP
  $enviar = $_POST[‘enviar’];
  if ($enviar)
    print ("Se ha pulsado el botón de enviar");
  ?>

• Upload de Archivos
  <FORM ACTION="procesa.php" METHOD="post“
  ENCTYPE="multipart/form-data">
  <INPUT TYPE="file" NAME="file">
  </FORM>

<?php
  if($_FILES["file"]["error"] > 0){
    echo "Error: " . $_FILES["file"]["error"] . "<br />";
  }else{
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Stored in: " . $_FILES["file"]["tmp_name"];
  if(file_exists("upload/" . $_FILES["file"]["name"])){
    echo $_FILES["file"]["name"] . " ya existe. ";
  }else{
    move_uploaded_file($_FILES["file"]["tmp_name"],
    "upload/" . $_FILES["file"]["name"]);
    echo “Almacenado en: " . "upload/" . $_FILES["file"]["name"];
  }
}
?>

----------------------------------------------------------------------------------------------------------------------------------------------------------------------------

  ##Sesiones
    1. Introducción
    2. Manejo de sesiones
    3. Autenticación de usuarios

A veces es necesario mantener el estado de una conexión entre distintas páginas o entre distintas visitas a un mismo sitio
  – Ejemplos: aplicaciones personalizadas, carrito de la compra, control de acceso
HTTP es un protocolo sin estado: cada conexión entre el cliente y el  servidor es independiente de las demás
Para mantener el estado entre diferentes conexiones hay que establecer lo que se conoce como una sesión
Las sesiones permiten disponer de unas variables con valores persistentes durante toda la conexión del usuario. Estas variables pueden almacenarse en el cliente 
mediante cookies o en el servidor
PHP dispone de una biblioteca de funciones para la gestión de sesiones

Funciones de PHP para el manejo de sesiones
  session_start()
Inicializa una sesión y le asigna un identificador de sesión único. Si la sesión ya está iniciada, carga todas las variables de sesión
  session_register(variable)
Registra una variable de sesión, equivalente a $_SESSION[]
  session_unregister(variable)
Elimina una variable de sesión, equivalente a unset($_SESSION[])

Funciones de PHP para el manejo de sesiones
  session_is_registered(variable)
Comprueba si una variable está registrada. Devuelve true en caso afirmativo y false en caso contrario
  session_destroy()
Cierra una sesión
  session_id()
Devuelve o setea el id de la sesión actual

Funciones de PHP para el manejo de sesiones
  – session_start ()
      • inicializa una sesión y le asigna un identificador de sesión único. Si la sesión ya está iniciada, carga todas las variables de sesión
  – $_SESSION[‘nombre’] = valor;
      • registra una variable de sesión
  – unset ($_SESSION[‘nombre’]);
      • elimina una variable de sesión
  – if (isset($_SESSION[‘nombre’]))
      • comprueba si una variable está registrada. Devuelve true en caso afirmativo y false en caso contrario
  – session_destroy ()
      • cierra una sesión

El manejo de las sesiones se realiza de la siguiente forma:
– Todas las páginas deben realizar una llamada a session_start() para cargar las variables de la sesión
– Esta llamada debe estar colocada antes de cualquier código HTML
– Conviene llamar a session_destroy() para cerrar la sesión



----------------------------------------------------------------------------------------------------------------------------------------------------------------------------

##Cookies

Son los archivos alojados en el cliente que nos permiten identificar una petición determinada.
Cada vez que el navegador realiza una petición a un dominio, si hay una cookie asociada, esta se envía al servidor junto con la petición.
PHP nos entrega una serie de Funciones y variables predefinidas para crear y acceder a cookies

Funciones
  setcookie(nombre, valor, expiracion, path, dominio, secure, httponly (5.2.0));
    Crea o elimina una cookie
  setrawcookie(nombre, valor, expiracion, path,  dominio, secure, httponly);
    Recuperación de una cookie
  Se utiliza la variable predefinida $_COOKIE[] o
  $HTTP_COOKIE_VARS (deprecated)
    Limpiar una cookie
  setcookie("user", "", time()-3600);

----------------------------------------------------------------------------------------------------------------------------------------------------------------------------

----------------------------------------------------------------------------------------------------------------------------------------------------------------------------


  
