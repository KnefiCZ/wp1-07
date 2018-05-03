<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<h1>Hra</h1>

<form action="submit.php" method="post">
<label for="myGPU">GPU </label>
<input id="myGPU" min="1" max="10" type="number" name='myGPU' placeholder="10" /> <br />
<label for="myCPU">CPU </label>
<input id="myCPU" min="1" max="10" type="number" name='myCPU' placeholder="10" /> <br />
<label for="myRAM">RAM </label>
<input id="myRAM" min="1" max="16" type="number" name='myRAM' placeholder="16" /> <hr />
<label for="myHDD">HDD </label>
<input id="myHDD" min="1" max="1000" type="number" name='myHDD' placeholder="40" /> <hr />

  <input name='submit' type="submit" value="Odeslat" />

  </body>
</html>
