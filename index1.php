<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klientas</title>

    <style>
        
        table, tr, td {
            border: 1px solid black;
            text-align: center;
        }


    </style>
</head>
<body>
    
</body>
</html>


<?php
// 1.Susikurti klasę "Klientas".+

// Kintamieji:vardas, pavarde, asmens kodas, prisijungimo data, adresas, elpastas.+

//  klasę, sukurti masyvą, kuriame turi būti 200 kliento objektų
// Duomenis užpildyti savo nuožiūrą.
//  "Klientai" objektų masyvą atvaizduoti lentelėje <table>.

// vieno Kliento sablonas, pagal kuri kuriami kiti 200 klientu
class Klientas {

    public $vardas;
    public $pavarde; 
    public $asmensKodas; 
    public $prisijungimoData; 
    public $adresas; 
    public $elPastas;
    
    function __construct($a, $b, $c, $d, $e, $f) {
        
            $this->vardas=$a;
            $this->pavarde=$b;
            $this->asmensKodas=$c;
            $this->prisijungimoData=$d;
            $this->adresas=$e;
            $this->elPastas=$f;
      
    }
}

$klientai=array(); 

for($i=0; $i<200; $i++) {
    array_push($klientai, new Klientas 
    ("vardenis".$i, 
    "pavardenis".$i,
    // asmenskodas,
    rand(3,4).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9)
    .rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9),
    // data
    rand(2020,2021)."-".rand(1,12)."-".rand(1,31),
    "verkiu g.1-".$i,
    "vardenis.pavardenis@gmail.com".$i));
}

echo "<table>";
         echo "<td>"; 
         echo "Vardas";
         echo "<td>";
         echo "Pavarde";
         echo "<td>";
         echo "Asmens kodas";
         echo "<td>";
         echo "Prisijungimo data";
         echo "<td>";
         echo "Adresas";
         echo "<td>";
         echo "El pastas";
         
    foreach ($klientai as $eilute) {
        
        echo "<tr>";
    foreach ($eilute as $stulpelis) {

        echo "<td>";
        echo $stulpelis;
        echo "</td>";
        }

        echo "</tr>";
    }

        echo "</table>";

?>