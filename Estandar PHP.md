# Estandar de codificación para PHP

Lo siguiente sera el estandar que el equipo usara para PHP.

## Conexion a la base de datos
Para conectarse a la base de datos se creara un codigo en un archivo llamado "conexion.php" y siempre que se requiera conectarse a la bd habra que llamar al archivo "conexion.php".

---

## Incluir archivos
Para incluir archivos php se utilizara la siguiente sintaxis:
```php
// Correcto
require 'archivo.php';

// Incorrecto
require('archivo.php');
```
El codigo de arriba siempre debera estar arriba de todo, los "require" deberan ir primero que todo en un archivo php.

---

## Variables
Las variables deberán tener nombres representativos, evitando nombres como “x”, se deberá utilizar minúsculas a menos que la variable tenga mas de una palabra, en ese caso la segunda palabra iniciará en mayúscula.
```php
$opcionEscogida = 2;
```
---

## Funciones
Las funciones deberan tener nombres representativos de la acción que realizan y si el nombre debera estar en minusculas, si el nombre tiene mas de una palabra entonces la primera letra de cada palabra excepto la primera palabra deberan estar en mayusculas.
```php
function obtenerCantidadUsuariosRegistrados($conexion, $id) {
 // codigo
}
```
---

## Uso de llaves
Al momento de utilizar if, for, while, funciones, etc. Se deberá de utilizar las llaves de la siguiente forma:
```php
  for ($i = 0; $i < 10; $i++) {
  
  }
```
La llave de apertura deberá estar en la misma línea que la función y separada por un espacio.

---

## Comentarios
Se deberá evitar el uso de comentarios innecesarios para cosas que sean muy obvias, como por ejemplo “lee una variable”, los comentarios deberán utilizarse cuando el programa no sea tan obvio o cuando haya posibles excepciones o errores. 

Se debera realizar un bloque de comentario arriba de todas las funciones que se creen, utilizando los tags de PhpDocumentor, esto con motivo de poder generar documentacion automatica.

---

## Indentación
El código deberá estar indentado con dos espacios a la izquierda.
```php
if($numero > 10) {
  if($total == 100) {
    echo 'Numero: '.$numero;
  }
}
```
---

## Documentación automatica
Para generar documentación automatica se utilizara la herramienta PhpDocumentor, la cual puede encontrarse en el siguiente enlace: https://www.phpdoc.org/

---
