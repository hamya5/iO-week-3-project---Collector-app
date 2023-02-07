<?php
require 'src/db.php';

$db = connectToDb('deitybase');
$deities = getAllDeities($db);

?>

<!DOCTYPE html>

<html>
<head>
    <title>Deitybase</title>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>
    <h1>BEHOLD!! Some deities and stuff:</h1>
    <div>
        <h2>Annoia</h2>
        <p>From the Discworld</p>
        <p>Associated to objects getting stuck in the cutlery drawer</p>
        <p>Carries no specific object</p>
    </div>

    <!-- this is just to test the database connection functions -->
    <?=print_r($deities);?>

</body>
</html>