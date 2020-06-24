<?php

$jsonConfigMap = file_get_contents(getenv("CONFIG_MAP_PATH"));
$jsonIterator = new RecursiveIteratorIterator(
    new RecursiveArrayIterator(json_decode($jsonConfigMap, TRUE)),
    RecursiveIteratorIterator::SELF_FIRST);
if($jsonConfigMap) {
foreach ($jsonIterator as $key => $val) {

  echo "Configuración Cargada de " - getenv("CONFIG_MAP_PATH");

    if(is_array($val)) {
        echo "$key:\n";
    } else {
        echo "$key => $val\n";
    }
}
} else {
  echo "No hay Configuración Cargada";
}
?>