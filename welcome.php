<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
            body{
                background-color:rgb(61, 108, 124 );
                color:white;
            }
        div{
            padding:10px;
            border-radius:10px;
            background-color:rgb(80, 138, 157 );
            margin:0 auto;
            width:420px;
        }
        h1{
            text-align:center;
        }
            form{
            display:flex;
            flex-direction:column;
            
            }
        input[type=text]{
            border:none;
            border-radius:5px;
            padding:10px;
            margin:10px;
        }
        input[type=submit]{
            background-color:rgb(234, 94, 63 );
            border-radius:5px;
            padding:10px;
            color:white;
            margin:10px;
        }
        select{
            border-radius:5px;
            padding:10px;
            margin:10px;
        }
        label{
            margin-left:10px;
        }
    
    </style>
</head>
<body>
    <h1>Kalkulator zbiorów</h1>
    <div>
        
        <form name="Kalkulator" action='welcome.php' method='post'>
            <label for="setA">Zbiór A (liczby oddzielone przecinkami):</label>

            <input type='text' name="setA" id="setA">
            
            <label for="setB">Zbiór B (liczby oddzielone przecinkami):</label>
            <input type='text' name="setB" id="setB">

            <label>Operacja:</label>
            <select name="operation">
                <option value='suma'>
                    Suma
                </option>
                <option value='diffA'>
                    Różnica A/B
                </option>
                <option value='diffB'>
                    Różnica B/A
                </option>
                <option value='iloczyn'>
                    Iloczyn Zbiorów
                </option>
            </select>
            
            <input type="submit" value='Oblicz'>

            <input type="text" name="result" id="result" readonly hidden>
        </form>
    </div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $setA = $_POST["setA"];
    $setB = $_POST["setB"];
    $operation = $_POST["operation"];
    $result = '';

    switch ($operation) {
        case "suma":
            $result = implode(", ", array_merge(explode(",", $setA), explode(",", $setB)));
            break;
        case "diffA":
            $result = implode(", ", array_diff(explode(",", $setA), explode(",", $setB)));
            break;
        case "diffB":
            $result = implode(", ", array_diff(explode(",", $setB), explode(",", $setA)));
            break;
        case "iloczyn":
            $result = implode(", ", array_intersect(explode(",", $setA), explode(",", $setB)));
            break;
        default:
            $result = "Nieodpowiednia operacja";
    }
    
    echo "<script>
        document.getElementById('result').value = '$result';
        document.getElementById('result').hidden=false;
    </script>";
}
?>

</body>
</html>