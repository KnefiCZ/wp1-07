<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<h1>Hra</h1>
<?php
    $KCGPU = 10 ; // index spotřeb.
    $KCCPU = 10 ; // index spotřeb.
    $KCRAM = 16 ; // GB
    $KCHDD = 40 ; // GB
//------------------------------------------------------------------------------
    $myGPU = filter_input(INPUT_POST, 'myGPU') ; // Moje GPU koupený z Alzy.cz. (TAKZE LEDŽIT)
    $myCPU = filter_input(INPUT_POST, 'myCPU') ; // Moje CPU co jsem koupil včera u čongů.
    $myRAM = filter_input(INPUT_POST, 'myRAM') ; // Tyhle RAMky jsem vzal ze školy. (GIGA)
    $myHDD = filter_input(INPUT_POST, 'myHDD') ; // HDD jsem si vzal od dědy (GIGABAJTŮ).
?>
<?php
   if (($KCGPU <= $myGPU)&&($KCCPU <= $myCPU)&&($KCRAM <= $myRAM)&&($KCHDD <= $myHDD)) {
      echo "V pohodě. tu hru rozjedeš";
   }
   else {
     echo "Máš smůlu. zahraj si radši Tetris";
   }
 ?>

  </body>
</html>
