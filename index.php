<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mein PHP Projekt</title>
</head>
<body>

<?php
$name = "DLR";
?>

<h1>Hallo <?php echo $name; ?></h1>

<?php if ($name == "DLR"): ?>
    <p>Willkommen zurück!</p>
<?php else: ?>
    <p>Wer bist du?</p>
<?php endif; ?>
    
</body>
</html>