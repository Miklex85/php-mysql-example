<?php

try {
   if(getenv("CONFIG_MAP_PATH")) {
     $jsonConfigMap = file_get_contents(getenv("CONFIG_MAP_PATH"));
     $jsonIterator = new RecursiveIteratorIterator(
        new RecursiveArrayIterator(json_decode($jsonConfigMap, TRUE)),
        RecursiveIteratorIterator::SELF_FIRST);

     echo "Configuración Cargada de " . getenv("CONFIG_MAP_PATH") . "<br>";

     foreach ($jsonIterator as $key => $val) {
           if(is_array($val)) {
              echo "<br>$key:\n";
           } else {
              echo "<br>$key => $val\n";
           }
      }
   } else {
       echo "No hay Configuración Cargada";
   }
} catch(InvalidArgumentException $iae) {
    echo "No hay Configuración Cargada";
}

  echo "<br><br><a style='color: green' href='index.php'><- Regresar</a> ";

?>
