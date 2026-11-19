<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <h1>Šeit būs raksti!</h1>
</head>
<body>
<?php
$produkti = ["Šodien taisam maizi", "Pērkam olas un pienu","Makruss lēka pa batutu"];

echo "<ol>";
foreach ($produkti as $elements) {
    echo "<li>" . $elements . "</li>";
}
echo "</ol>";
?>

</body>
</html>