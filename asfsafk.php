<?php 
    function czy_wielkanoc($rok){
        $x=0;
        $y=0;
        if($rok>=1 && $rok<=1582){
            $x=15;
            $y=6;
        }else if($rok>=1583 && $rok<=1699){
            $x=22;
            $y=2;
        }else if($rok>=1700 && $rok<=1799){
            $x=23;
            $y=3;
        }else if($rok>=1800 && $rok<=1899){
            $x=23;
            $y=4;
        }else if($rok>=1900 && $rok<=2099){
            $x=24;
            $y=5;
        }else if($rok>=2100 && $rok<=2199){
            $x=24;
            $y=6;
        }else{
            return "Nieprawidlowy rok";
            
        }
        $a=$rok%19;
        $b=$rok%4;
        $c=$rok%7;
        $d=(19*$a+$x)%30;
        $e=(2 * $b + 4 * $c + 6 * $d + $y)%7;


        if($e == 6 && $d == 29){
            return "Wielkanoc przypada 26 kwietnia";
        } else if($e == 6 && $d == 28 && ((11 * $x + 11) % 30 < 19)){
            return "Wielkanoc przypada 18 kwietnia";
        } else if(($d + $e) < 10){
            $wielkanoc = 22 + $d + $e;
            return "Wielkanoc przypada " . $wielkanoc . " marca";
        } else {
            $wielkanoc = $d + $e - 9;
            return "Wielkanoc przypada " . $wielkanoc . " kwietnia";
        }
    }

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST['rok']) && is_numeric($_POST['rok'])){
            $rok=intval($_POST['rok']);
            $result=czy_wielkanoc($rok);
            echo $result;
        }else{
            echo "Podaj prawidlowy rok.";
        } 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            border:1px solid black;
            display:flex;
            flex-direction:column;
            justify-content:center;
            text-align:center;
            align-items:center;
        }
        form{
            width:85%;
        }
        input[type=text]{
            width:60%;
            height:30px;
            border-radius:10px;
        }
        input[type=submit]{
            width:75%;
            border-radius:20px;
            height:40px;
            margin:10px;
            background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 14%, rgba(0,212,255,1) 100%);
            color:white;
            border:none;
        }
    </style>
</head>
<body>
    


    <div class='container'>
        <h1>Zadanie 9 (0.3 pkt)</h1>

        <h4>Aby obliczyc datę Wielkanocy dla podanego roku,wprowadż rok poniżej</h4>
        <form name="Masno" action="" method="post">
            <label for="rok">Wprowadź rok:</label>
            <input type="text" id="rok" name="rok" required>

            <input type="submit" value="Oblicz">
        </form>
    </div>
</body>
</html>