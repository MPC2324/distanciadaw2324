<?php
/**
*  @author Mario Puerma Cortes
*  @version 1.1
*/

/**
* Función suma de dos números
* @param int $num1
* @param int $num2
* @return float
* {@internal Esto es solo para los desarrolladores}
*/
  function suma ($num1, $num2) {
      $resultadosuma = $num1 + $num2;
      return $resultadosuma;

   }

/**
* Función saludar con paso de parámetro o argumento nombre
* @param string $nombre
* @return string
* {@internal funcion simple}
*/
  function saludar($nombre){
     return "Hola, como estás " . $nombre;
  }

echo (saludar('Mario'));

$suma = suma (1,4);
echo $suma;

?>
