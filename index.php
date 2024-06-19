<?php
function random_pw() {

    $pw_characters = [
        'abcdefghilmnopqrstuvz',
        'ABCDEFGHILMNOPQRSTUVZ',
        '123456789',
        '£%&?_#'
    ];
    $pw ='';
    for($i = 0; $i < 9; $i++) {
        $index_characters = rand(0, 3);
        $last = strlen($pw_characters[$index_characters]) -1;
        $pw .= $pw_characters[$index_characters][rand(0,$last)];
    }
    return $pw;
}

$my_pw = $_GET['randomPw'];
$my_pw_length = strlen($pw);


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
     <form method="GET">
   
      <button name="randomPw">Genera PW casuale</button>



     </form>
 
     <p> <?php echo random_pw() ?> </p>
     <p> <?php echo $my_pw_length ?> </p>
     
</body>
</html>
