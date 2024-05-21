<?php
    function prostyKalkulator($num1,$num2,$operation){
        switch($operation){
            case "dodawanie":
                return $num1 + $num2;

            case "odejmowanie":
                return $num1 + $num2;

            case "mnozenie":
                return $num1*$num2;

            case "dzielenie":
                if($num2==0){
                    return "Dzielenie przez 0 niemozliwe";
                }else{
                    return $num1/$num2;
                }
            default:
                return "Nie ma takiej operacji";
        }
    }

    function zaawansowany($num1,$operation){
        switch($operation){
            case "cosinus":
                return cos($num1);
            
            case "sinus":
                return sin($num1);
            
            case "tanges":
                return tan($num1);
            
            case "binarne_na_dziesietne":
                return bindec($num1);

            case 'dziesietne_na_binarne':
                return decbin($num1);

            case 'dziesietne_na_szesnastkowe':
                return dechex($num1);
            case 'szesnastkowe_na_dziesietne':
                return hexdec($num1);
            default:
                return 'Nieznana operacja';
        }
    }

    if($_SERVER['REQUEST_METHOD']==="POST"){
        if(isset($_POST['num1'],$_POST['num2'],$_POST['operation'])){
            $num1=floatval($_POST['num1']);
            $num2=floatval($_POST['num2']);
            $operation=$_POST['operation'];

            $result=prostyKalkulator($num1,$num2,$num3);
        }else if(isset($_POST['num3'],$_POST['advanced_operation'])){
            $num3=$_POST['num3'];
            if (is_numeric($num3) || ctype_xdigit($num3)) {
                $num3 = is_numeric($num3) ? floatval($num3) : $num3;
                $advanced_operation = $_POST['advanced_operation'];
                $result = zaawansowany($num3, $advanced_operation);
                echo "Wynik zaawansowanego kalkulatora: $result";
            } else {
                echo "Nieprawidłowa wartość";
            }
        }
    }

?>
    