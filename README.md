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
-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------

##Tipos de datos
• PHP soporta 8 tipos de datos primitivos:
– Tipos comunes: boolean, integer, double, string
– Tipos compuestos: array, object
– Tipos especiales: resource, NULL
• El tipo de una variable no se suele especificar. Se decide en tiempo de ejecución en función del contexto y puede variar
• Funciones de interés:
– La función gettype() devuelve el tipo de una variable
– Las funciones is_type comprueban si una variable es de un tipo dado:
is_array(), is_bool(), is_float(), is_integer(), is_null(), is_numeric(),
is_object(), is_resource(), is_scalar(), is_string()
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

----------------------------------------------------------------------------------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------
