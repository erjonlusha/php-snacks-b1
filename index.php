 <?php 
 $matches=[
    "Olimpia"=>
        [
            "Milano"=>55,
            "Cantù"=>60
        ],
    "Atene"=>[
            "Torino"=>51,
            "Bologna"=>61
        ]
    ];
// var_dump($matches);
foreach ($matches as $key1 => $val1) {
    // echo "$key1\n";
    foreach ($val1 as $key2 => $val2) {
        // echo "$key2\n"; 

    }

    foreach ($val1 as $val2) {
        // echo "$val2\n";

    }
    // echo "<br>";
};
// ?name=erjon&email=erion.l@hot.it&age=20
$name =  $_GET['name'];
$email =  $_GET['email'];
$age = $_GET['age'];


 ?>



 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
	<h1>php-snacks-b1</h1>
    <h2>ISTRUZIONI:</h2>
    <div class="card">
        <h3>PHP Snack 1:</h3>
        <p>Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema: Olimpia Milano - Cantù | 55 - 60</p>
        <h2><?php foreach ($matches as $key1 => $val1) {
            echo "$key1\n";
        }; ?>
        </h2> 
        <h3>
        <?php 
        foreach ($matches as $key1 => $val1) {
            foreach ($val1 as $key2 => $val2) {
                echo "$key2\n"; 
            }
            
            foreach ($val1 as $val2) {
                echo "$val2\n";
                
            }
            echo "<br>";
        };
        ?>
        </h3>
    </div>
    <h3>PHP Snack 2:</h3>
    <p>Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che: 1. name sia più lungo di 3 caratteri, 2. mail contenga un punto e una chiocciola 3. age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” </p>
        <?php 
        if((strlen($name)>3) && (strpos($email, '@') !== false && strpos($email, ".") !== false) && (is_numeric($age)) ) { 
            //do that something here.
            echo "Accesso riuscito";
        } else { 
            echo "Accesso negato";
        }
        ?>
</body>
</html>