<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keturkampis</title>
    <style>
        p {
            background-color: plum;
            width: fit-content;
        }

    </style>
</head>

<body>

<form action="index3.php" action="get">
    <input type="text" name="krastinea" value="20"/>
    <input type="text" name="veiksmas" value="+"/>
    <input type="text" name="krastineb" value="30"/>
         
    <button type="submit" name="skaiciuoti">Skaičiuoti</button>
</form>

<?php 
// 3. Susikurti klasę "Keturkampis". Pagal klasę sukurti objektą.+
// Objektas turi priimti du kintamuosius: a ir b kraštines.+
// Sukurti metodus, kurie skaičiuoja kvadrato plotą, perimetrą, įstrižainės ilgį.+
// Informaciją išvesti į <p> žymę. +


// BAIGTAS  

class Keturkampis {
    private $krastinea;
    private $krastineb;
    private $rezultatas; 
    private $veiksmas; 
    
    
    function __construct($krastinea,$krastineb, $veiksmas){
        $this->krastinea=$krastinea;
        $this->krastineb=$krastineb;
        $this->veiksmas=$veiksmas;
    // tikrins koks zenklas yra ivestas
    switch($this->veiksmas) {
        case "S":
            $this->plotas(); 
            break; 
        case "P":
            $this->perimetras(); 
             break;
        case "d":
            $this->istrizaine(); 
            break;
        
        default:
          echo "ivestas neteisingas veiksmas";      
    }
    
}
    
    public function plotas () {
        $this->rezultatas=($this->krastinea * $this->krastineb);
        echo "<p>"."Kvadrato Plotas yra:" . $this->rezultatas." "."cm"."</p>";
        }

    public function perimetras () {
        $this->rezultatas=(($this->krastinea+$this->krastineb)*2);
        echo "<p>"."Kvadrato perimetras yra:" . $this->rezultatas." "."cm"."</p>";
        }   

    public function istrizaine () {
        $this->rezultatas=(($this->krastinea)*2 + ($this->krastineb)*2);
        echo "<p>"."Kvadrato istrizaine yra:" . $this->rezultatas." "."cm"."</p>";
        }
}

    if (isset($_GET["skaiciuoti"])){
        if (isset($_GET["krastinea"]) && !empty($_GET["krastinea"]) 
        && isset($_GET["krastineb"]) && !empty($_GET["krastineb"])
        && isset($_GET["veiksmas"]) && !empty($_GET["veiksmas"])) {
            $krastinea=$_GET["krastinea"];
            $veiksmas=$_GET["veiksmas"];
            $krastineb=$_GET["krastineb"];

        $keturkampis = new Keturkampis($krastinea, $krastineb, $veiksmas);

        } else {
            echo "<br>";
            echo "Ivesti ne visi keturkampio duomenys";
        }
}


?>  
</body>
</html>
