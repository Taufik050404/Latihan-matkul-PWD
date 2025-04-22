<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    ?>
    <h3>Angka kelipatan 3 dan 5 dari 1-100:</h3>
    <ul>
        <?php
            for ($i = 1; $i <= 100; $i++) {
                if ($i % 3 == 0 && $i % 5 == 0) {
                    echo "<li>$i</li>";
                }
            }
        ?>
    </ul>
</body>
</html>