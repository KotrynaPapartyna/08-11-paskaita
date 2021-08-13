<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trikampis</title>
    <style>
        h2 {
            background-color: crimson;
            width: fit-content;
        }
        p {
            background-color: darkolivegreen;
            width: fit-content;
        }
    </style>
</head>
<body>

<h1>Trikampio sudarymas</h1>

<form action="index2.php" action="get">
    <input type="text" name="a" value="3"/>
    <input type="text" name="b" value="4"/>
    <input type="text" name="c" value="5"/>
     
    <button type="submit" name="skaiciuoti">Skaiciuoti</button>

</form>
      
<?php

// 2. Susikurti klasę "Trikampis". Pagal klasę sukurti objektą.+
// Objektas turi priimti du kintamuosius: a, b, c kraštines.+
// Turi būti tikrinama ar trikampį galima sudaryti.-
// Sukurti metodus, kurie skaičiuoja plotą, perimetrą, + (metodai sukurti- tik neskaiciuoja?)
// pusperimetrį, bei kiekvieną iš trikampio kampų. - (kampai nesutvarkyti)- 
// Informaciją išvesti į <p> žymę.+

// NEBAIGTAS  !!!

class Trikampis {
    public $a;
    public $b;
    public $c;
    public $plotas; 
    public $perimetras;
    public $pusperimetris;
    public $rezultatas; 
    
    function __construct($a, $b, $c) {
        
        $this->krastinea=floatval($a); 
        $this->krastineb=floatval($b);
        $this->krastinec=floatval($c); 
                 
        
    $this->plotas(); 
    $this->perimetras(); 
    $this->pusperimetris();     
       
    }

    public function plotas () {
        $this->rezultatas = sqrt(($this->pusperimetris *($this->pusperimetris-$this->a)) 
        *($this->pusperimetris*($this->pusperimetris-$this->b))*
        ($this->pusperimetris *($this->pusperimetris- $this->c)));
        echo "<br>"; 
        echo "<p>"."Trikampio plotas yra:" . $this->rezultatas." "."cm"."</p>";
        echo "</br>"; 
        }
    
    public function perimetras () {
        $this->rezultatas= $this->a+$this->b+$this->c; 
        echo "<br>";
        echo "<p>"."Trikampio perimetras yra:" . $this->rezultatas." "."cm"."</p>";
        echo "</br>";
        }
    
    public function pusperimetris () {
        $this->rezultatas= $this->pusperimetris/2; 
        echo "<br>";
        echo "<p>"."Trikampio pusperimetris yra:" . $this->rezultatas." "."cm"."</p>";
        echo "</br>";
        }   
    } 
       
    if (isset($_GET["skaiciuoti"])) {
        if (isset($_GET["a"]) && !empty($_GET["a"]) 
        && isset($_GET["b"]) && !empty($_GET["b"])
        && isset($_GET["c"]) && !empty($_GET["c"])) {
            $a=$_GET["a"];
            $b=$_GET["b"];
            $c=$_GET["c"];
            
            if($a + $b > $c && $a + $c > $b && $b + $c > $a) {
                echo "Trikampis susidaro";
                echo "<br>";

                $trikampis = new Trikampis($a, $b, $c);
                
        } else {
            echo "<h2>"."Trikampis nesusidaro"."</h2>";
        }
        } else {   
            echo "<h2>"."Ivesta ne visu krastiniu informacija"."</h2>";
        }

}
   
  


?>
    
</body>
</html>