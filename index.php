<?php
include_once __DIR__ . '/functions.php';

if (!empty($_GET['pw-length'])) {
    $pw_length = intval($_GET['pw-length']) ? intval($_GET['pw-length']) : 8;
    $pw = random_pw($_GET['pw-length']);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Generatore pw</h1>
     <form method="GET" action="index.php">
      <label for="pw-length">
        selezionare la lunghezza della pw
      </label>
      <input type="number" name="pw-length" id="pw-length">
      <button>Genera PW casuale</button>
     </form>
 
     <p> la tua pw di lunghezza <?php echo $pw_length ?> è <?php echo $pw ?> </p>
     
     
</body>
</html>
