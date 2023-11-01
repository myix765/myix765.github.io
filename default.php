<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Times <Table></Table></title>
</head>
<body>
    <?php
        $num = $_GET['n'];
        for ($i = 1; $i < 13; $i++) {
            echo $i . " x " . $num . " = " . $i * $num;
            echo "<br>";
        }
    ?>
</body>
</html>