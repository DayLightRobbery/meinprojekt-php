<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
$name = "Max";
$age = 20;
?>

<h1>Benutzerdaten</h1>

<p>Name: <?php echo $name; ?></p>
<p>Alter: <?php echo $age; ?></p>

<h2>Status</h2>

<?php if ($age >= 18): ?>
    <p>Du bist volljährig.</p>
<?php else: ?>
    <p>Minderjährig.</p>
<?php endif; ?>

</body>
</html>