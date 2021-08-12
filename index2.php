<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trikampis</title>
</head>
<body>

<form action="index2.php" action="get">
    <input type="text" name="a" value="10"/>
    <input type="text" name="b" value="10"/>
    <input type="text" name="c" value="10"/>
     
    <button id="plotas">Plotas</button>
    <button id="perimetras">Perimetras</button>
    <button id="pusperimetris">Pusperimetris</button>

    <button type="submit" name="skaiciuoti">Skaiciuoti</button>

</form>
      
<?php

// 2. Susikurti klasę "Trikampis". Pagal klasę sukurti objektą.+
// Objektas turi priimti du kintamuosius: a, b, c kraštines.+
// Turi būti tikrinama ar trikampį galima sudaryti.
// Sukurti metodus, kurie skaičiuoja plotą, perimetrą, 
// pusperimetrį, bei kiekvieną iš trikampio kampų.
// Informaciją išvesti į <p> žymę.

// NEBAIGTAS  !!!

class Trikampis {
    public $krastinea;
    public $krastineb;
    public $krastinec;
    public $plotas; 
    public $perimetras;
    public $pusperimetris;
    
    function __construct($krastinea, $krastineb, $krastinec) {
        
        $this->krastinea=floatval($krastinea); 
        $this->krastineb=floatval($krastineb);
        $this->krastinec=floatval($krastinec);
    
    }
           
    
function Trikampis() {
    if ($this->krastinea+$this->krastineb>$this->krastinec 
        && $this->krastineb+$this->krastinec>$this->krastinea 
        && $this->krastinec+$this->krastinea>$this->krastineb) {
        $this->trikampis=true; 
        echo "Trikampi sudaryti galima"; 
            
    } else {
        echo "Trikampis nesusidaro"; 
    }  
}

function plotas () {
    $this->plotas = sqrt(($this->pusperimetris *($this->pusperimetris-$this->krastinea)) 
    *($this->pusperimetris*($this->pusperimetris-$this->krastineb))*
    ($this->pusperimetris *($this->pusperimetris- $this->krastinec)));
    echo $this->rezultatas."Plotas";
    }

function perimetras () {
    $this->perimetras= $this->a+$this->b+$this->c; 
    echo $this->rezultatas."perimetras";
    }

function pusperimetris () {
    $this->pusperimetris= $this->perimetras/2; 
    echo $this->rezultatas."pusperimetris";
    }

}
if (isset ($_GET["skaiciuoti"])) {
    if(isset($_GET["krastinea"]) && !empty($_GET["krastinea"]) 
    && isset($_GET["krastineb"]) && !empty($_GET["krastineb"]) 
    && isset($_GET["krastinec"]) && !empty($_GET["krastinec"])) {
        $krastinea = $_GET["krastinea"];
        $krastinea = $_GET["krastineb"];
        $krastinea = $_GET["krastinec"];
        $Trikampis = false;
        $rezultatas;
        $trikampis=new Trikampis (10,10,10); 
    
    } else {
        echo "Suvesti ne visu krastiniu duomenys"; 
    }
}

?>
    
</body>
</html>