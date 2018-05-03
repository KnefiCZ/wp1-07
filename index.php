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
    $myGPU = 10 ; // Moje GPU koupený z Alzy.cz. (TAKZE LEDŽIT)
    $myCPU = 10 ; // Moje CPU co jsem koupil včera u čongů.
    $myRAM = 16 ; // Tyhle RAMky jsem vzal ze školy. (GIGA)
    $myHDD = 60 ; // HDD jsem si vzal od dědy (GIGABAJTŮ).
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
