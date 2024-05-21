<?php
function prostyKalkulator($num1, $num2, $operation) {
    switch ($operation) {
        case "dodawanie":
            return $num1 + $num2;
        case "odejmowanie":
            return $num1 - $num2;
        case "mnozenie":
            return $num1 * $num2;
        case "dzielenie":
            if ($num2 == 0) {
                return "Dzielenie przez 0 niemożliwe";
            } else {
                return $num1 / $num2;
            }
        default:
            return "Nie ma takiej operacji";
    }
}

function zaawansowany($num, $operation) {
    switch ($operation) {
        case "cosinus":
            return cos($num);
        case "sinus":
            return sin($num);
        case "tanges":
            return tan($num);
        case "binarne_na_dziesietne":
            return bindec($num);
        case 'dziesietne_na_binarne':
            return decbin($num);
        case 'dziesietne_na_szesnastkowe':
            return dechex($num);
        case 'szesnastkowe_na_dziesietne':
            return hexdec($num);
        default:
            return 'Nieznana operacja';
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['num1'], $_POST['num2'], $_POST['operation'])) {
        $num1 = floatval($_POST['num1']);
        $num2 = floatval($_POST['num2']);
        $operation = $_POST['operation'];
        $result = prostyKalkulator($num1, $num2, $operation);
        echo "Wynik prostego kalkulatora: $result";
    } elseif (isset($_POST['num3'], $_POST['advanced_operation'])) {
        $num3 = $_POST['num3'];
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <style>
        body {
            background-color: rgb(32, 32, 32);
            color: azure;
        }
        input[type=submit] {
            display: block;
            width: 100px;
            height: 25px;
            margin: 10px;
        }
    </style>
</head>
<body>
    <div class='container'>
        <h1>Kalkulator</h1>
        <hr>
        <div class='prosty'>
            <h2>Prosty</h2>
            <form name="Prosty" action="" method="post">
                <input type='text' id='num1' name='num1' required>
                <select name="operation">
                    <option value="dodawanie">Dodawanie</option>
                    <option value="odejmowanie">Odejmowanie</option>
                    <option value="mnozenie">Mnożenie</option>
                    <option value="dzielenie">Dzielenie</option>
                </select>
                <input type="text" id="num2" name='num2' required>
                <input type="submit" value="Oblicz">
            </form>
        </div>
        <hr>
        <div class="zaawansowany">
            <h2>Zaawansowany</h2>
            <form name="Zaawansowany" action="" method="post">
                <input type="text" id="num3" name="num3" required>
                <select name="advanced_operation">
                    <option value="cosinus">Cosinus</option>
                    <option value="sinus">Sinus</option>
                    <option value="tanges">Tangens</option>
                    <option value="binarne_na_dziesietne">Binarne na dziesiętne</option>
                    <option value="dziesietne_na_binarne">Dziesiętne na binarne</option>
                    <option value="dziesietne_na_szesnastkowe">Dziesiętne na szesnastkowe</option>
                    <option value="szesnastkowe_na_dziesietne">Szesnastkowe na dziesiętne</option>
                </select>
                <input type="submit" value="Oblicz">
            </form>
        </div>
    </div>
</body>
</html>
