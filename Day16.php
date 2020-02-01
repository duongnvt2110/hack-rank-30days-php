<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%s",$S);


try {
    new ReflectionClass( 'ReflectionClass' . ( (int) $S . "" != $S ) );
    echo $S;
}catch(Exception $e) {
  echo 'Bad String';
}

?>

