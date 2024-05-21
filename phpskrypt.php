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

        echo "<script>document.getElementById('result').value = '$result';</script>";
    }
?>